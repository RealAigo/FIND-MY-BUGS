// Custom Cursor
const cursor = document.querySelector(".cursor");
document.addEventListener("mousemove", (e) => {
    cursor.style.left = e.clientX + "px";
    cursor.style.top = e.clientY + "px";
});

// GSAP Hero Animations
gsap.from("#heroTitle", {
    y: 60,
    opacity: 100,
    duration: 1.4,
    ease: "power4.out"
});

gsap.from(".hero span", {
    y: 40,
    opacity: 0,
    delay: 0.4,
    duration: 1.2
});

gsap.from(".cta", {
    y: 40,
    opacity: 100,
    stagger: 0.2,
    delay: 0.6,
    duration: 1.2
});

// ScrollTrigger for info section
gsap.from(".infoText", {
    scrollTrigger: {
        trigger: ".info",
        start: "top 80%"
    },
    y: 40,
    opacity: 0,
    duration: 1.2
});

// Particles Canvas
const canvas = document.getElementById("particles");
const ctx = canvas.getContext("2d");

canvas.width = innerWidth;
canvas.height = innerHeight;

let particlesArray = [];

class Particle {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.size = Math.random() * 2 + 1;
        this.speedX = Math.random() * 0.4 - 0.2;
        this.speedY = Math.random() * 0.4 - 0.2;
    }
    update() {
        this.x += this.speedX;
        this.y += this.speedY;
        if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
        if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
    }
    draw() {
        ctx.fillStyle = "#00ffcc";
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
    }
}

function initParticles() {
    particlesArray = [];
    for (let i = 0; i < 120; i++) {
        particlesArray.push(new Particle());
    }
}
initParticles();

function animateParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    particlesArray.forEach((p) => {
        p.update();
        p.draw();
    });
    requestAnimationFrame(animateParticles);
}
animateParticles();
document.addEventListener("DOMContentLoaded", () => {
    // Select elements
    const toggleButtons = document.querySelectorAll("[data-menu-toggle]");
    const panels = document.querySelectorAll(".wipe-panel");
    const navLinks = document.querySelectorAll(".nav-link");
    const closeButton = document.querySelector(".close-button");
    const overlay = document.querySelector(".nav-overlay");

    // Create GSAP Timeline (paused initially)
    const tl = gsap.timeline({ paused: true });

    // 1. Animate Panels (Wipe Down)
    tl.to(panels, {
        height: "100%",
        duration: 0.8,
        stagger: 0.05, // Slight delay between panels
        ease: "power4.inOut"
    })
        // 2. Enable pointer events on overlay
        .set(overlay, { pointerEvents: "all" }, "-=0.5")
        // 3. Fade/Slide in Menu Links
        .from(navLinks, {
            y: 50,
            opacity: 0,
            duration: 0.5,
            stagger: 0.1,
            ease: "power2.out"
        }, "-=0.2")
        // 4. Show Close Button
        .to(closeButton, { opacity: 1, duration: 0.3 }, "<");

    // Toggle Logic
    let isOpen = false;

    toggleButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            if (!isOpen) {
                tl.play();
                isOpen = true;
            } else {
                tl.reverse();
                isOpen = false;
            }
        });
    });
});