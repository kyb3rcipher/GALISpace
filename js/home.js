var copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);


// Disable scroll in mobile responsive navbar
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

    // Función para prevenir el comportamiento predeterminado del desplazamiento táctil
    function preventDefault(e) {
        e.preventDefault();
    }
});
