@props([
    'type'=>'text',
    'label'=>'',
    'required'=>'false',
    'placeholder'=>''
])

    <div {{ $attributes->merge(['class'=>'flex grid grid-cols-1 gap-2']) }}>

        <label for="vname" class="gray-label">{{\Illuminate\Support\Str::ucfirst($label)}}</label>

        <input
                {{$attributes->whereStartsWith('wire:model')}}

                id="{{$attributes->whereStartsWith('wire:model')->first()}}"

                type="{{$type}}"


                class='purple-textbox
                @error($attributes->whereStartsWith('wire:model')->first()) ? purple-textbox  : red-textbox @enderror'

                placeholder="{{\Illuminate\Support\Str::ucfirst($label)}}"

                required="{{$required}}"
        />

        @error($attributes->whereStartsWith('wire:model')->first()) <span class="error-label">{{ $message }}</span> @enderror

    </div>
