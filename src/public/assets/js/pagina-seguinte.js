document.addEventListener("DOMContentLoaded", async () => {
    let limpa_cache = Date.now();
    let { default: paginaSeguinte } = await import(`./components/componente-pagina-seguinte.js?v=${limpa_cache}`);
  
    const docTagPaginaSeguinte = document.querySelector(".pagina-seguinte");
    if (docTagPaginaSeguinte) {
      docTagPaginaSeguinte.innerHTML = paginaSeguinte({ link: "#" });
  
      const links = docTagPaginaSeguinte.querySelectorAll(".number-pages a[data-page]");
      const btnSeguinte = docTagPaginaSeguinte.querySelector("#page-seguinte");
      const btnAnterior = docTagPaginaSeguinte.querySelector("#page-anterior");
      let paginaAtual = 1;
  
      const atualizarAtivo = (pagina) => {
        links.forEach(link => {
          if (parseInt(link.getAttribute("data-page")) === pagina) {
            link.classList.add("active");
          } else {
            link.classList.remove("active");
          }
        });
        paginaAtual = pagina;
        history.pushState({ paginaAtual }, `Página ${pagina}`, `?pagina=${pagina}`); // Atualiza a URL sem recarregar
        carregarConteudo(pagina); // Carrega o conteúdo da página (essa função precisa ser criada para carregar o conteúdo)
      };

      const carregarConteudo = (pagina) => {
        // Lógica para carregar o conteúdo da página (substituir com seu conteúdo dinâmico)
        console.log(`Conteúdo da página ${pagina} carregado.`);
      };

      links.forEach(link => {
        link.addEventListener("click", (e) => {
          e.preventDefault();
          const numero = parseInt(link.getAttribute("data-page"));
          if (!isNaN(numero)) {
            atualizarAtivo(numero);
          }
        });
      });
  
      btnSeguinte?.addEventListener("click", (e) => {
        e.preventDefault();
        if (paginaAtual < links.length) {
          atualizarAtivo(paginaAtual + 1);
        }
      });
  
      btnAnterior?.addEventListener("click", (e) => {
        e.preventDefault();
        if (paginaAtual > 1) {
          atualizarAtivo(paginaAtual - 1);
        }
      });
  
      const parametrosURL = new URLSearchParams(window.location.search);
      const paginaURL = parametrosURL.has("pagina") ? parseInt(parametrosURL.get("pagina")) : 1;
      atualizarAtivo(paginaURL); // Inicializa com a página da URL ou página 1
    }
});
