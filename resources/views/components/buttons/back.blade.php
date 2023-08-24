<div>
    <button
            {{ $attributes->merge(['class' => 'p-2 font-extrabold text-white uppercase bg-blue-600 border-b-4 border-blue-700
                                    rounded-lg shadow-md w-36 hover:bg-blue-500 hover:border-blue-700 focus:outline-none']) }}>
        <div class="flex justify-center gap-4">


            @if (isset($slot))
                {{$slot}}
            @endif


            <div class="pt-1.5">
                Back
            </div>
        </div>
    </button>
</div>
