document.addEventListener("DOMContentLoaded", function () {
    //Esconder la barra
    document.body.style.overflow = "hidden";
    //Declarar las constantes y variantes
    const preloader = document.getElementById("preloader");
    let bar = document.getElementById("bar");
    //Aplicar clases a el elemento "bar"
    bar.classList.remove("w-0");
    bar.classList.add("w-full");
    //Aplicamos un retraso
    setTimeout(delayPre, 2000);
    function delayPre() {
        //Aplicamos clases al elemento "Preloader"
        preloader.classList.remove("opacity-100");
        preloader.classList.add("opacity-0");
    }
    //Aplicamos un retraso con diferencia de 300 milisegundos
    setTimeout(delayLoad, 2300);
    function delayLoad() {
        //Aplicamos clases al elemento preloader
        preloader.classList.remove("flex");
        preloader.classList.add("hidden");
        //Mostramos la barra
        document.body.style.overflow = "visible";
        //Funcion inViewport
        function inViewport(entries, _observer) {
            entries.forEach((entry) => {
                entry.target.classList.toggle(
                    "is-inViewport",
                    entry.isIntersecting
                );
            });
        }

        //Codigo para la funcion inViewport
        const Obs = new IntersectionObserver(inViewport);
        const obsOptions = {};

        const ELs_inViewport = document.querySelectorAll("[data-inviewport]");
        ELs_inViewport.forEach((EL) => {
            Obs.observe(EL, obsOptions);
        });
    }
});


// Funciones para la navbar
window.addEventListener("scroll", function () {

    // Declaracion de constantes
    const nav = document.getElementById("header");
    const offset = window.pageYOffset;
    const menu = document.querySelectorAll(".menu-nav");
    const logo = document.getElementById("logo");

    // Condiciones si el offset pasa de 75px
    if (offset > 75)
    nav.classList.add("scroll"),
    logo.classList.add("scroll"),
    menu.forEach((element) => {
        element.classList.add("scroll");
    });
    else
    nav.classList.remove("scroll"),
    logo.classList.remove("scroll"),
    menu.forEach((element) => {
        element.classList.remove("scroll");
    });

});