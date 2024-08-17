import './bootstrap';

let darkToggle = document.querySelector('#dark-toggle');
let lightToggle = document.querySelector('#light-toggle');
let html = document.querySelector('html');

function toggleVisibility() {
    // Toggle visibility between dark-toggle and light-toggle
    lightToggle.classList.toggle('hidden');
    darkToggle.classList.toggle('hidden');
}

// Fungsi untuk mengubah mode gelap dan visibilitas tombol
function toggleDarkMode() {
    if (html.classList.contains('dark')) {
        // Jika mode gelap aktif, nonaktifkan dan tampilkan dark-toggle
        darkToggle.classList.add('animate');
        html.classList.remove('dark');
        localStorage.theme = 'light'
    } else {
        // Jika mode gelap nonaktif, aktifkan dan tampilkan light-toggle
        lightToggle.classList.add('animate');
        localStorage.theme = 'dark'
        html.classList.add('dark');
    }
    toggleVisibility();
    runtext();
}
// Tambahkan event listener untuk dark-toggle
darkToggle.addEventListener('click', toggleDarkMode);

// Tambahkan event listener untuk light-toggle
lightToggle.addEventListener('click', toggleDarkMode);

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    html.classList.add('dark');
    lightToggle.classList.remove('hidden');
    darkToggle.classList.add('hidden');
} else {
    toggleVisibility();
    html.classList.remove('dark')
    lightToggle.classList.add('hidden');
    darkToggle.classList.remove('hidden');
}

// heroimg
const heroimg = document.querySelector('.heroimg');

function imghero(anything) {
    heroimg.style.opacity = "0";
    heroimg.style.transform = "translateY(10px)";
    setTimeout(() => {
        heroimg.style.opacity = "1";
        heroimg.style.transform = "translateY(0)";
        heroimg.src = anything;
    }, 300); 
}

window.imghero = imghero;


// runtext img
const infiniteItems = document.querySelectorAll('.iteminfinite');

function runtext() {
    infiniteItems.forEach((item) => {
        const img = item.querySelector('img');
        const position = item.style.getPropertyValue('--position').trim();
        const isDarkMode = html.classList.contains('dark');

        if (isDarkMode) {
            img.src = `storage/img/slider2_${position}.png`;
        } else {
            img.src = `storage/img/slider1_${position}.png`;
        }
    });
}

runtext();