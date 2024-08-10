@props(['icon'])

<span>
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" {{$attributes}}>

    @switch($icon)

        @case('plus-slim')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
            @break

        @default
            Default case...

    @endswitch
</svg>
</span>