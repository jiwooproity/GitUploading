const toogglebtn = document.querySelector(".nav__tooglebtn");
const menu = document.querySelector(".nav__list");

toogglebtn.addEventListener('click', () => {
    menu.classList.toggle('active');
});