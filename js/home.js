var copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logos").appendChild(copy);

// White links for .main section in light-mode for background
if (localStorage.getItem('lightMode') === 'enabled') {
    // Select navLinks of lightMode
    const navLinks = document.querySelectorAll('.light-mode nav ul li:not(.dropdown-menu) a, .light-mode nav ul li.dropdown-menu > span');

    // Ger vertical position of .main
    const mainSectionTop = document.querySelector('.main').offsetTop, mainSectionHeight = document.querySelector('.main').clientHeight;

    function changeNavLinksColorLightMode() {
        if (window.scrollY >= mainSectionTop && window.scrollY < (mainSectionTop + mainSectionHeight)) {
            navLinks.forEach(link => {
                link.style.color = 'white';
            });
            // .dropdown-menu:hover
            document.querySelector('.dropdown-menu').addEventListener('mouseover', function() { document.querySelector('.dropdown-menu > span').style.color = "#BF2E5D"; });
            document.querySelector('.dropdown-menu').addEventListener('mouseout', function() { document.querySelector('.dropdown-menu > span').style.color = "white"; });
        } else {
            navLinks.forEach(link => {
                link.style.color = 'black';
            });
            // .dropdown-menu:hover
            document.querySelector('.dropdown-menu').addEventListener('mouseover', function() { document.querySelector('.dropdown-menu > span').style.color = "#BF2E5D"; });
            document.querySelector('.dropdown-menu').addEventListener('mouseout', function() { document.querySelector('.dropdown-menu > span').style.color = "black"; });
        }
    }

    // Add event for detect scrool
    document.addEventListener('scroll', changeNavLinksColorLightMode);

    // Start function
    changeNavLinksColorLightMode();
}