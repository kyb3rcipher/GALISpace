const container = document.querySelector(".products-slider");
const slider = document.querySelector(".carousel");
const initialCardWidth = slider.querySelector(".card").offsetWidth;
const controlBtns = document.querySelectorAll(".products-slider i");
const sliderChildren = [...slider.children];

let isMoving = false, isAutomatic = true, startMouseX, startScrollLeft, timerId;

let cardsInView = Math.round(slider.offsetWidth / initialCardWidth);

sliderChildren.slice(-cardsInView).reverse().forEach(child => {
    slider.insertAdjacentHTML("afterbegin", child.outerHTML);
});

sliderChildren.slice(0, cardsInView).forEach(child => {
    slider.insertAdjacentHTML("beforeend", child.outerHTML);
});

slider.classList.add("no-transition");
slider.scrollLeft = slider.offsetWidth;
slider.classList.remove("no-transition");

controlBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        slider.scrollLeft += btn.id == "left" ? -initialCardWidth : initialCardWidth;
    });
});

const startDrag = (e) => {
    isMoving = true;
    slider.classList.add("dragging");
    startMouseX = e.pageX;
    startScrollLeft = slider.scrollLeft;
}

const duringDrag = (e) => {
    if(!isMoving) return;
    slider.scrollLeft = startScrollLeft - (e.pageX - startMouseX);
}

const stopDrag = () => {
    isMoving = false;
    slider.classList.remove("dragging");
}

const handleInfiniteScroll = () => {
    if(slider.scrollLeft === 0) {
        slider.classList.add("no-transition");
        slider.scrollLeft = slider.scrollWidth - (2 * slider.offsetWidth);
        slider.classList.remove("no-transition");
    }
    else if(Math.ceil(slider.scrollLeft) === slider.scrollWidth - slider.offsetWidth) {
        slider.classList.add("no-transition");
        slider.scrollLeft = slider.offsetWidth;
        slider.classList.remove("no-transition");
    }

    clearTimeout(timerId);
    if(!container.matches(":hover")) autoScroll();
}

/*const autoScroll = () => {
    if(window.innerWidth < 800 || !isAutomatic) return;
    timerId = setTimeout(() => slider.scrollLeft += initialCardWidth, 2500);
}
autoScroll();*/

slider.addEventListener("mousedown", startDrag);
slider.addEventListener("mousemove", duringDrag);
document.addEventListener("mouseup", stopDrag);
slider.addEventListener("scroll", handleInfiniteScroll);
container.addEventListener("mouseenter", () => clearTimeout(timerId));
container.addEventListener("mouseleave", autoScroll);