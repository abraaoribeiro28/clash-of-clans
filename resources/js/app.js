import './bootstrap';


const btnMenu = document.getElementById('btn-menu');
const mobileMenu = document.getElementById('mobile-menu');

btnMenu.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
