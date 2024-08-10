<span
    x-data="{ tooltip: false }"
    x-on:mouseover="tooltip = true"
    x-on:mouseleave="tooltip = false"
    class="ml-2 h-5 w-5 cursor-pointer">
  <!-- SVG Goes Here -->
  <div x-show="tooltip"
       class="text-sm text-white absolute bg-blue-400 rounded-lg
    p-2 transform -translate-y-8 translate-x-8"
  >
     {{$slot}}
  </div>
</span>
