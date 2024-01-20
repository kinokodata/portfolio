let navbar = null;
const yPositionArray = [-550, 100, 510];
const parallaxSpeed = 0.5;

window.addEventListener('load', () => {
    navbar = document.querySelector('.header-Navbar');
});

window.addEventListener('scroll', () => {
    const currentScrollY = getScrollTop();
    console.log(currentScrollY);
    if(currentScrollY > 400) {
        navbar.classList.add('header-Navbar--fixed');
    } else {
        navbar.classList.remove('header-Navbar--fixed');
    }
});

const getScrollTop = () => {
    return Math.max(
        window.scrollY,
        document.body.scrollTop,
        document.documentElement.scrollTop,
        document.scrollingElement.scrollTop
    );
}
