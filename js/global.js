// Disable scroll in mobile responsive navbar - **and fix apple ios safari responsive navbar .dropmenu one tap-click open**
document.addEventListener('DOMContentLoaded', function() {
    var checkBtn = document.getElementById('check');
    var body = document.querySelector('body');

    checkBtn.onclick = function() {
        body.classList.toggle('no-scroll');
        if (this.checked) {
            disableScroll();
        } else {
            enableScroll();
        }
    };

    function disableScroll() {
        document.addEventListener('touchmove', preventDefault, { passive: false });
    }
    function enableScroll() {
        document.removeEventListener('touchmove', preventDefault, { passive: false });
    }

    // Feature to prevent default touch scroll behavior
    function preventDefault(e) {
        e.preventDefault();
    }
});