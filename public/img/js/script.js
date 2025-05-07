// --  Para la paginacion  -- //
// document.addEventListener("DOMContentLoaded", () => {
//     console.log("CARGADO");
//     const div = document.body.querySelector(".seleccion");
//     if (div) {
//         const p = div.children[2].children[0].children[1].children[0];
//         if(p) p.style.display = "none";
//     }
// });

console.log("Si que va el script");
const mediaQuery = window.matchMedia("(min-width: 768px)");
function toggleNavIfNeeded() {
    let btn = document.querySelector("#button-toggle-nav");
    if (
        btn &&
        btn.getAttribute("aria-expanded") === "true" &&
        window.getComputedStyle(btn).display === "none"
    )
        btn.click();
}
mediaQuery.addEventListener("change", (e) => e.matches && toggleNavIfNeeded());
if (mediaQuery.matches) toggleNavIfNeeded();

document.addEventListener("DOMContentLoaded", (e) => {
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll(".change");

    menuItems.forEach((item) => {
        if (
            item.getAttribute("href") === currentPath ||
            (currentPath === "/" && item.getAttribute("href") === "#")
        ) {
            item.classList.add("bg-blue-900");
            item.classList.add("text-black-900");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const formularioFiltros = document.getElementById("formulario"); 
    const inputs = formularioFiltros.querySelectorAll("input[type='radio'], select");
    console.log("CARGADA", inputs)

    inputs.forEach(input => {
        input.addEventListener("change", function () {
            console.log("ENVIADO");
            formularioFiltros.submit(); 
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("button-toggle-nav");
    const navbarMenu = document.getElementById("navbar-hamburger");

    toggleButton.addEventListener("click", function () {
        const isExpanded = toggleButton.getAttribute("aria-expanded") === "true";

        // Alternar clases y atributos
        navbarMenu.classList.toggle("hidden");
        toggleButton.setAttribute("aria-expanded", !isExpanded);
    });
});

document.getElementById("formulario").addEventListener("submit", function (event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("{{ route('productos.orden') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error("Error:", error));
});
