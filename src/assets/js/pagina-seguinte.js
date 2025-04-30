// Supondo que você já inseriu o HTML no DOM, agora ative a lógica

let limpa_cache = Date.now();

let { default: paginaSeguinte} = await import( `./components/componente-pagina-seguinte.js?v=${ limpa_cache }` );

const docTagPaginaSeguinte = document.querySelector('.pagina-seguinte');

// Lógica do componente
document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".number-pages a[data-page]");
    const btnSeguinte = document.getElementById("page-seguinte");
    let paginaAtual = 1;

    function atualizarAtivo(pagina) {
        links.forEach(link => {
            if (link.getAttribute("data-page") == pagina) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
        paginaAtual = pagina;
    }

    // Clique nos números
    links.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const numero = parseInt(link.getAttribute("data-page"));
            atualizarAtivo(numero);
        });
    });

    // "Seguinte"
    btnSeguinte.addEventListener("click", (e) => {
        e.preventDefault();
        if (paginaAtual < links.length) {
            atualizarAtivo(paginaAtual + 1);
        }
    });

    // Inicialização
    atualizarAtivo(1); // Marca a primeira página como ativa ao iniciar
});
