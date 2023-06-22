// hamburger
window.onscroll = function () {
const header = document.querySelector('header');
const fixedNav = header.offsetTop;

if(window.pageYOffset > fixedNav) {
header.classList.add('navbar-fixed');

} else {
    header.classList.remove('nabar-fixed');
}
}



const hamburger = document.querySelector('#hamburger');
const nav = document.querySelector('#nav');

hamburger.addEventListener('click', function() {
hamburger.classList.toggle('hamburger-true');
nav.classList.toggle('hidden');
});