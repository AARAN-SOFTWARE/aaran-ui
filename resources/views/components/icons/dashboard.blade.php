@props(['icon'])

<span class="inline-flex justify-center items-center">
<svg class="w-10 h-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">

    @switch($icon)

        @case('rupee')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M9 8h6m-5 0a3 3 0 110 6H9l3 3m-3-6h6m6 1a9 9 0 11-18 0 9 9 0 0118 0z"/>
            @break

        @case('lighting-bolt')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M13 10V3L4 14h7v7l9-11h-7z"/>
            @break

        @case('sparkles')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            @break

        @case('slack')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
            @break

        @case('user-boxed')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M6 17c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6m9-9a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3a3 3 0 0 1 3 3M3 5v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2z"
            @break

        @case('profile')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                  d="M20.25 0h-18c-1.237 0-2.25 1.013-2.25 2.25v19.5c0 1.237 1.013 2.25 2.25 2.25h18c1.237 0 2.25-1.013 2.25-2.25v-19.5c0-1.237-1.013-2.25-2.25-2.25zM19.5 21h-16.5v-18h16.5v18zM6 13.5h10.5v1.5h-10.5zM6 16.5h10.5v1.5h-10.5zM7.5 6.75c0-1.243 1.007-2.25 2.25-2.25s2.25 1.007 2.25 2.25c0 1.243-1.007 2.25-2.25 2.25s-2.25-1.007-2.25-2.25zM11.25 9h-3c-1.238 0-2.25 0.675-2.25 1.5v1.5h7.5v-1.5c0-0.825-1.013-1.5-2.25-1.5z"/>
            @break

        @case('globe')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
            ></path>
            @break

        @case('reports')
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
            ></path>
            @break

        @default
            Default case...
    @endswitch

    </svg>
    </span>


<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="icon-profile" viewBox="0 0 24 24">
            <path
                    d="M20.25 0h-18c-1.237 0-2.25 1.013-2.25 2.25v19.5c0 1.237 1.013 2.25 2.25 2.25h18c1.237 0 2.25-1.013 2.25-2.25v-19.5c0-1.237-1.013-2.25-2.25-2.25zM19.5 21h-16.5v-18h16.5v18zM6 13.5h10.5v1.5h-10.5zM6 16.5h10.5v1.5h-10.5zM7.5 6.75c0-1.243 1.007-2.25 2.25-2.25s2.25 1.007 2.25 2.25c0 1.243-1.007 2.25-2.25 2.25s-2.25-1.007-2.25-2.25zM11.25 9h-3c-1.238 0-2.25 0.675-2.25 1.5v1.5h7.5v-1.5c0-0.825-1.013-1.5-2.25-1.5z"></path>
        </symbol>
    </defs>
</svg>
