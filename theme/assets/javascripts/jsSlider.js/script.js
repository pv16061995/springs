/*==================================================
        360° COVERFLOW ENGINE
==================================================*/

const track = document.querySelector(".track");
const cards = [...document.querySelectorAll(".card")];

const prev = document.getElementById("prev");
const next = document.getElementById("next");

let current = 0;
let radius = 650;

let cardAngle = 360 / cards.length;

let isDragging = false;
let startX = 0;
let currentRotation = 0;
let targetRotation = 0;
let velocity = 0;

/*========================================*/

function calculateRadius() {

    if (window.innerWidth < 500)
        radius = 260;

    else if (window.innerWidth < 768)
        radius = 340;

    else if (window.innerWidth < 992)
        radius = 460;

    else if (window.innerWidth < 1400)
        radius = 560;

    else
        radius = 700;

}

calculateRadius();

/*========================================*/

function normalize(v) {

    while (v < 0) v += 360;

    return v % 360;

}

/*========================================*/

function update() {

    cards.forEach((card, index) => {

        let angle = (index * cardAngle) + currentRotation;

        let rad = angle * Math.PI / 180;

        let x = Math.sin(rad) * radius;

        let z = Math.cos(rad) * radius;

        let scale = (z + radius) / (radius * 2);

        let opacity = Math.max(.25, scale);

        let rotateY = -angle;

        card.style.transform = `
translate(-50%,-50%)
translate3d(${x}px,0,${z}px)
rotateY(${rotateY}deg)
scale(${0.55 + scale * .55})
`;

        card.style.opacity = opacity;

        card.style.zIndex = Math.floor(z + radius);

        card.style.filter = `
blur(${(1 - scale) * 3}px)
`;

        card.classList.remove(
            "active",
            "left",
            "right"
        );

    });

    /*=====================*/

    let nearest = 0;

    let min = 99999;

    cards.forEach((card, index) => {

        let angle = normalize(index * cardAngle + currentRotation);

        let diff = Math.abs(angle);

        if (diff > 180) diff = 360 - diff;

        if (diff < min) {

            min = diff;

            nearest = index;

        }

    });

    cards[nearest].classList.add("active");

}

/*========================================*/

function animate() {

    velocity *= 0.92;

    currentRotation += velocity;

    update();

    requestAnimationFrame(animate);

}

animate();

/*========================================*/

function rotateNext() {

    velocity -= cardAngle;

}

function rotatePrev() {

    velocity += cardAngle;

}

/*========================================*/

next.onclick = rotateNext;

prev.onclick = rotatePrev;

/*========================================*/

window.addEventListener("keydown", (e) => {

    if (e.key === "ArrowRight")
        rotateNext();

    if (e.key === "ArrowLeft")
        rotatePrev();

});

/*========================================*/
/* Mouse Wheel */
/*========================================*/

window.addEventListener("wheel", (e) => {

    e.preventDefault();

    velocity -= e.deltaY * .04;

}, { passive: false });

/*========================================*/
/* Mouse Drag */
/*========================================*/

track.addEventListener("mousedown", (e) => {

    isDragging = true;

    startX = e.clientX;

    track.classList.add("grabbing");

});

window.addEventListener("mouseup", () => {

    isDragging = false;

    track.classList.remove("grabbing");

});

window.addEventListener("mousemove", (e) => {

    if (!isDragging) return;

    let dx = e.clientX - startX;

    startX = e.clientX;

    velocity += dx * .22;

});

/*========================================*/
/* Touch */
/*========================================*/

track.addEventListener("touchstart", (e) => {

    startX = e.touches[0].clientX;

    isDragging = true;

});

track.addEventListener("touchmove", (e) => {

    if (!isDragging) return;

    let x = e.touches[0].clientX;

    let dx = x - startX;

    startX = x;

    velocity += dx * .18;

});

track.addEventListener("touchend", () => {

    isDragging = false;

});

/*========================================*/
/* Card Click */
/*========================================*/

cards.forEach((card, index) => {

    card.addEventListener("click", () => {

        let target = index * cardAngle;

        let diff = normalize(target + currentRotation);

        velocity -= diff;

    });

});

/*========================================*/
/* Infinite Auto Rotation */
/*========================================*/

// let auto = true;

// setInterval(() => {

//     if (!isDragging && auto) {

//         velocity -= 0.12;

//     }

// }, 16);

/*========================================*/

window.addEventListener("resize", () => {

    calculateRadius();

    update();

});

/*========================================*/
/* Initial */
/*========================================*/

update();