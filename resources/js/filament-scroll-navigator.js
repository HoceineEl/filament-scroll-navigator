(function () {
    document.addEventListener('alpine:init', () => {
        Alpine.data('scrollButton', () => ({
            showButton: false,
            isAtBottom: false,
            updateScrollPosition() {
                const scrollTop = window.scrollY || document.documentElement.scrollTop;
                const scrollHeight = document.documentElement.scrollHeight;
                const clientHeight = document.documentElement.clientHeight;

                this.showButton = scrollTop > 100;
                this.isAtBottom = Math.ceil(scrollTop + clientHeight) >= scrollHeight - 50;
            },
            scrollToPosition() {
                const targetPosition = this.isAtBottom ? 0 : document.documentElement.scrollHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }));
    });
})();