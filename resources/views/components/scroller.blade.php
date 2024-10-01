<div x-data="scrollButton" x-on:scroll.window="updateScrollPosition" class="scroller fixed bottom-4 right-4 z-50"
    x-cloak>
    <button x-show="showButton" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2" @click="scrollToPosition"
        class="bg-{{ $color }}-600 hover:bg-{{ $color }}-700 text-white font-bold p-3 rounded-full shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform duration-300 ease-in-out"
            :class="{ 'rotate-180': isAtBottom }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </button>
</div>
