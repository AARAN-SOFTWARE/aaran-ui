@props(['href', 'route'])
<td class="whitespace-nowrap border border-gray-200">
    <a {{ $attributes->merge(['class' => 'whitespace-nowrap px-3 flex object-center py-1']) }}>
        href="{{ isset($route) ? ($route) : $href }}">
        {{ $slot }}
    </a>
</td>
