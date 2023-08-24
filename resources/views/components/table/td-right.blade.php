@props(['href', 'route'])
<td class="whitespace-nowrap border border-gray-200">
    <a class="whitespace-nowrap px-3 flex object-center justify-end  py-1"
       href="{{ isset($route) ? ($route) : $href }}" tabindex="-1">
        {{ $slot }}
    </a>
</td>
