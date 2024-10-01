<div x-data="scrollButton" x-on:scroll.window="updateScrollPosition" class="scroller fixed bottom-4 right-4 z-50"
    x-cloak>
    <button x-show="showButton" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2" @click="scrollToPosition"
        class="bg-{{ $color }}-600 hover:bg-{{ $color }}-700 text-white font-bold p-3 rounded-full shadow-lg transition-all duration-300 ease-in-out relative overflow-hidden group">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 transition-transform duration-300 ease-in-out relative z-10"
            :class="{ 'rotate-180': isAtBottom }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
        <div
            class="absolute inset-0 bg-gradient-to-br from-{{ $color }}-400 to-{{ $color }}-800 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
        </div>
        <div
            class="absolute -inset-1 bg-gradient-to-r from-{{ $color }}-600 via-{{ $color }}-400 to-{{ $color }}-600 rounded-full blur opacity-30 group-hover:opacity-100 transition duration-1000 group-hover:duration-200">
        </div>
    </button>
</div>
