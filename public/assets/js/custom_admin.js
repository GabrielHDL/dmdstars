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
    }
});