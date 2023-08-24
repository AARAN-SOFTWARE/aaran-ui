@props(['column','class'=>''])

<th class="text-left whitespace-nowrap border border-gray-300  py-2">
    <a class="flex-shrink-0 px-3" {{ $attributes->merge(['class' => $class]) }}
    role="button"
       href="#">
        {{ $slot }}
    </a></th>


