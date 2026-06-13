const menuIcon = document.querySelector('#menu-icon');
const navLinks = document.querySelector('.nav-links');

menuIcon.onclick = () => {
    navLinks.classList.toggle('active');
}

let loadingText = document.getElementById("loading-text");
let loadingScreen = document.getElementById("loading-screen");
let content = document.getElementById("content");

let loadProgress = 0;
let interval = setInterval(() => {
    loadProgress += 5;
    loadingText.textContent = loadProgress + "%";

    if (loadProgress >= 100) {
        clearInterval(interval);
        loadingScreen.style.display = "none";
        content.style.display = "block";
    }
}, 100);

if (window.location.pathname.endsWith("index.html")) {
    window.history.replaceState(null, "", window.location.pathname.replace("index.html", ""));
}

document.getElementById("LoginBtn").addEventListener("click", function() {
    window.open("http://127.0.0.1:8000/admin", "_blank");
});

const darkModeToggle = document.getElementById('dark-mode-toggle');
const icon = document.getElementById('dark-mode-icon');

darkModeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

      if (document.body.classList.contains('dark-mode')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    } else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    const elements = document.querySelectorAll(".scroll-animate");
    elements.forEach((el) => observer.observe(el));
});

