import cardVendFavorito from "./components/card-vendedor-fav";

// java script e componentes
let limpa_cache = Date.now();

let { default: cardProdFavorito } = await import(
  `./components/card-prod-favoritos.js?v=${limpa_cache}`
);
let { default: cardVendFavorito  } = await import(
  `./components/card-vendedor-fav.js?v=${limpa_cache}`
);
// import cardProduto from "./components/card-produto.js";

const docTagProdutosFav = document.querySelector(
  ".card-prod-favorito-container"
);
const docTagVendedoresFav = document.querySelector(".card-vendedor-favorito");

// import cardProduto from './components/card-prod-favoritos.js';

// const docTag = document.querySelector("card-prod-favorito");

const docTag = document.querySelector("card-prod-favorito");

async function renderVendedores() {
  try {
    const response = await fetch("/getVendedoresFavoritos");
    const vendedoresFavoritados = await response.json();

    vendedoresFavoritados.forEach(vendedor => {
      docTagVendedoresFav.innerHTML += cardVendFavorito(vendedor);
    });

    setTimeout(() => {
      const btnsRemove = document.querySelectorAll(".btn-remove-vendedor");
      btnsRemove.forEach(btn => {
        btn.addEventListener("click", async () => {
          const id = btn.dataset.id;

          await fetch(`/removeVendedorFavorito/${id}`, {
            method: "DELETE"
          });

          window.location.reload();
        });
      });
    }, 300);

  } catch (error) {
    console.error("Erro ao carregar vendedores favoritos", error);
  }
}
// favoritar vendedor
const likeBtn = document.querySelector(".fa-heart-vendedor");
likeBtn.addEventListener("click", async () => {
  const id = likeBtn.dataset.id;

  await fetch("/favoritarVendedor", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ id_vendedor: id })
  });

  alert("Favorito adicionado!");
});



// Chama ambas as renderizações
await renderProdutos();
await renderVendedores();
