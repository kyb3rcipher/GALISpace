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


// LightMode switch
let lightMode = localStorage.getItem('lightMode');
const lightModeToggle = document.querySelector('#light-mode-toggle');

// Check the initial state
if (lightMode === 'enabled') {
    document.body.classList.add('light-mode');
    lightModeToggle.checked = true;
} else {
    document.body.classList.add('dark-mode'); // Add default dark-mode
}

const enableLightMode = () => {
    document.body.classList.remove('dark-mode');
    document.body.classList.add('light-mode');
    localStorage.setItem('lightMode', 'enabled');
}

const disableLightMode = () => {
    document.body.classList.remove('light-mode');
    document.body.classList.add('dark-mode');
    localStorage.setItem('lightMode', 'disabled');
}

// Function for on-change event in switch
function toggleLightMode() {
    if (localStorage.getItem('lightMode') !== 'enabled') {
        enableLightMode();
    } else {
        disableLightMode();
    }
}