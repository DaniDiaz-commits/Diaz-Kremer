const mediaQuery = window.matchMedia("(min-width: 768px)");
function toggleNavIfNeeded() {
    const btn = document.querySelector("#button-toggle-nav");
    if (
        btn &&
        btn.getAttribute("aria-expanded") === "true" &&
        window.getComputedStyle(btn).display === "none"
    ) {
        btn.click();
    }
}
mediaQuery.addEventListener("change", (e) => e.matches && toggleNavIfNeeded());
if (mediaQuery.matches) toggleNavIfNeeded();

document.addEventListener("DOMContentLoaded", () => {
    
    const currentPath = window.location.pathname;
    document.querySelectorAll(".change").forEach(item => {
        if (
            item.getAttribute("href") === currentPath ||
            (currentPath === "/" && item.getAttribute("href") === "#")
        ) {
            item.classList.add("bg-blue-900", "text-black-900");
        }
    });

    const formularioFiltros = document.getElementById("formulario"); 
    if (formularioFiltros) {
        formularioFiltros.querySelectorAll("input[type='radio'], select").forEach(input => {
            input.addEventListener("change", () => formularioFiltros.submit());
        });

        formularioFiltros.addEventListener("submit", function (event) {
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
    }

    const toggleButton = document.getElementById("button-toggle-nav");
    const navbarMenu = document.getElementById("navbar-hamburger");
    if (toggleButton && navbarMenu) {
        toggleButton.addEventListener("click", () => {
            const isExpanded = toggleButton.getAttribute("aria-expanded") === "true";
            navbarMenu.classList.toggle("hidden");
            toggleButton.setAttribute("aria-expanded", !isExpanded);
        });
    }
});
