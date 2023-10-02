@props(['status'])

<button data-tooltip-target="tooltip-animation" type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800  font-bold rounded-xl text-sm px-3 py-2 text-center  {{ $status == 1 ? 'bg-green-500' : 'bg-teal-500' }}">
    @if ($status == 1)
        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon w-6 h-6"
            style="vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1">
            <path
                d="M931.84 517.12C931.84 768 732.16 972.8 486.4 972.8S40.96 768 40.96 517.12 240.64 61.44 486.4 61.44c93.184 0 182.272 28.672 257.024 83.968 9.216 7.168 11.264 19.456 4.096 28.672s-19.456 11.264-28.672 4.096C651.264 129.024 570.368 102.4 486.4 102.4 263.168 102.4 81.92 288.768 81.92 517.12S263.168 931.84 486.4 931.84 890.88 745.472 890.88 517.12c0-11.264 9.216-20.48 20.48-20.48s20.48 9.216 20.48 20.48z m44.032-349.184c-8.192-8.192-21.504-8.192-28.672 0L512 612.352 325.632 422.912c-8.192-8.192-20.48-8.192-28.672 0s-8.192 20.48 0 28.672l200.704 204.8c4.096 4.096 9.216 6.144 14.336 6.144 5.12 0 11.264-2.048 14.336-6.144l449.536-459.776c8.192-8.192 8.192-21.504 0-28.672z" />
        </svg>
    @else
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6 ">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    @endif

</button>
<div id="tooltip-animation" role="tooltip"
    class=" whitespace-nowrap absolute z-10 invisible inline-block px-3 py-2 text-xs font-light text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
   Make it (un)done
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
