<header class="flex items-center p-4 text-semibold text-gray-800 bg-white border-b shadow-md">

    <div class="w-full px-2 w-full flex justify-between items-center">

        <div class="p-1 mr-4 "
             @click="sidebarOpen = !sidebarOpen">

            <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': sidebarOpen, 'inline-flex': ! sidebarOpen }" class="inline-flex"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"/>
                <path :class="{'hidden': ! sidebarOpen, 'inline-flex': sidebarOpen }" class="hidden"
                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"/>
            </svg>

        </div>

        <div class="w-full px-2 flex justify-between items-center">

            <!-- Page Heading -->
            <div class="font-semibold text-xl text-gray-800 leading-tight justify-start ">
                {{$slot}}
            </div>
        </div>
    </div>
</header>
