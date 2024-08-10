@props([
    "list" =>null
])
<div class="relative">

    <div x-data="{
        currentSlide: 0,
        skip: 1,
        autoSlideInterval: null,

        startAutoSlide() {
            this.autoSlideInterval = setInterval(() => {
                this.next();
            }, 4500);
        },

        stopAutoSlide() {
            clearInterval(this.autoSlideInterval);
        },
        goToSlide(index) {
            let slider = this.$refs.slider;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            slider.scrollTo({ left: offset * index, behavior: 'smooth' });
        },
        next() {
            let slider = this.$refs.slider;
            let current = slider.scrollLeft;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            let maxScroll = offset * (slider.children.length );

            current + offset >= maxScroll ? slider.scrollTo({ left: 0, behavior: 'smooth' }) : slider.scrollBy({ left: offset * this.skip, behavior: 'smooth' });
        },
        prev() {
            let slider = this.$refs.slider;
            let current = slider.scrollLeft;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            let maxScroll = offset * (slider.children.length - 1);

            current <= 0 ? slider.scrollTo({ left: maxScroll, behavior: 'smooth' }) : slider.scrollBy({ left: -offset * this.skip, behavior: 'smooth' });
        },
        updateCurrentSlide() {
            let slider = this.$refs.slider;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            this.currentSlide = Math.round(slider.scrollLeft / offset);
        }
    }"
         x-init="startAutoSlide()"
         {{-- @mouseover="stopAutoSlide()" @mouseout="startAutoSlide()"--}}
         class="flex flex-col w-full">

        <!--image animation ----------------------------------------------------------------------------------->

        <div class="flex space-x-6">
            <ul x-ref="slider" @scroll="updateCurrentSlide"
                class="flex w-full md:h-screen h-96 overflow-x-hidden snap-x snap-mandatory">

                @if($list)
                    @forelse($list as $row)
                        <li class="flex flex-col items-center justify-center w-full md:h-screen h-80 shrink-0 snap-start animate__animated">

                            <div style="background-image: url('/../../../storage/images/{{$row->bg_image}}');"
                                 class="w-full md:h-screen h-96 bg-cover bg-no-repeat mx-auto  flex-col flex justify-center relative">


                                <div
                                    class=" w-auto h-10/12 flex-col text-white font-roboto p-5 my-5 border-l-[16px] border-white px-10 absolute md:left-80 left-20 ">

                                    <div
                                        class=" md:text-9xl text-xl  ml-10  animate__animated wow animate__bounceInUp capitalize drop-shadow-lg">{{$row->vname}}</div>

                                    {{--                                    <div--}}
                                    {{--                                        class="md:text-6xl mt-3 text-justify tracking-wider drop-shadow-lg ml-10
                                    animate__animated wow animate__slideInLeft capitalize">{!! $row->description !!}</div>--}}
                                    <div
                                        class="text-md mt-3 text-white ml-10 drop-shadow-lg bg-black/10 ">{{$row->created_at}}</div>
                                </div>

                            </div>

                        </li>
                    @empty
                        <div>&nbsp;</div>
                    @endforelse
                @endif
            </ul>

        </div>

        <!-- Prev / Next Buttons ---------------------------------------------------------------------------------->

        <div class="absolute z-10 flex justify-between w-full h-full px-4">

            <!-- Prev Button -------------------------------------------------------------------------------------->
            <button x-on:click="prev" @mouseover="stopAutoSlide()" @mouseout="startAutoSlide()">
                <x-icons.icon icon="chevrons-left"
                              class="w-auto h-12 block text-gray-300 hover:text-orange-500 rounded-xl hover:bg-orange-200 opacity-50 hover:opacity-100"/>
            </button>


            <!-- Next Button -------------------------------------------------------------------------------------->

            <button x-on:click="next" @mouseover="stopAutoSlide()" @mouseout="startAutoSlide()">
                <x-icons.icon icon="chevrons-right"
                              class="w-auto h-12 block text-gray-300 hover:text-orange-500 rounded-xl hover:bg-orange-200 opacity-50 hover:opacity-100"/>
            </button>
        </div>

        <!-- Indicators ------------------------------------------------------------------------------------------->

        <div class="absolute z-10 w-full bottom-10 lg:bottom-12">
            <div class="flex justify-center space-x-2">
                <template x-for="(slide, index) in Array.from($refs.slider.children)" :key="index">
                    <button @click="goToSlide(index)"
                            :class="{'bg-gray-500': currentSlide === index, 'bg-bubble': currentSlide !== index}"
                            class="w-3 h-1 rounded-full lg:w-3 lg:h-3 hover:bg-orange-400 focus:outline-none"></button>
                </template>
            </div>
        </div>

    </div>
</div>

