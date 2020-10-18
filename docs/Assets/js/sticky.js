/*Header Pegajoso*/
window.addEventListener('scroll', function () {
    var cabecera = document.querySelector('header');
    cabecera.classList.toggle('sticky', window.scrollY > 0);
});
/*Menu Desplegable*/
function menuDesplegable() {
    var desplegableMenu = document.querySelector('.toggle');
    var menu = document.querySelector('.menu');
    desplegableMenu.classList.toggle('active');
    menu.classList.toggle('active');
}