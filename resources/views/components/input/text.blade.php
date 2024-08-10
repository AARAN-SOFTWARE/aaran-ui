@props([
    'leadingAddOn' => false,
])

<div class="flex rounded-md shadow-sm w-full">
    @if ($leadingAddOn)
        <span
            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

        <label>
            <input {{ $attributes->merge(['class' => '
                        rounded-lg appearance-none border
                        border-gray-300 py-2 px-2 bg-white text-gray-800
                        placeholder-gray-400 shadow-md text-base focus:outline-none
                        focus:ring-2 focus:ring-purple-500 focus:border-transparent
                        flex-1 form-input block transition duration-150 ease-in-out'
                        . ($leadingAddOn ? ' rounded-none rounded-r-md' : '')]) }}/>
        </label>
</div>
