AOS.init({
    duration:1200,
});
const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})

const btn = document.querySelector('.theme-btn');
const nav = document.querySelector('.navigation');
const home = document.querySelector('.home');
const about = document.querySelector('#about');
const prjct = document.querySelector('#projects');
const prcnt = document.querySelector('.project-container');
const prbx = document.getElementsByClassName('project-box');
btn.addEventListener('click',() => {
    nav.classList.toggle('bg-dark');
    nav.classList.toggle('text-light');
    
    home.classList.toggle('bg-dark');
    home.classList.toggle('text-light');

    about.classList.toggle('bg-dark');
    about.classList.toggle('text-light');

    prjct.classList.toggle('bg-dark');
    prjct.classList.toggle('text-light');

    prcnt.classList.toggle('bg-dark');
    prcnt.classList.toggle('text-light');

    prbx[0].classList.toggle('bg-dark');
    prbx[0].classList.toggle('text-light');

    prbx[1].classList.toggle('bg-dark');
    prbx[1].classList.toggle('text-light');

    prbx[2].classList.toggle('bg-dark');
    prbx[2].classList.toggle('text-light');
})