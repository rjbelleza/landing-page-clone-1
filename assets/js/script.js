const topNav = document.querySelector('.header');
let ticking = false;

window.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            topNav.classList.toggle('header-bg', window.scrollY >= 1);
            ticking = false;
        });
        ticking = true;
    }
});