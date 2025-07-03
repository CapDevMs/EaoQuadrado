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

async function renderProdutos() {
  const produtos = await fetch("getProdutos");
  const info = await produtos.json();
  exibirProdutos(info);
}

function exibirProdutos(produtos) {
  let favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];

  produtos.forEach((produto) => {
    if (favoritos.includes(String(produto.id_produto))) {
      docTag.innerHTML += cardProdFavorito(produto);
    }

    const btnsRemove = document.querySelectorAll("#remove");

    btnsRemove.forEach((btnRemove) => {
      btnRemove.addEventListener("click", () => {
        const id = btnRemove.dataset.id;
        favoritos = favoritos.filter((idproduto) => idproduto !== id);
        localStorage.setItem("favoritos", JSON.stringify(favoritos));
        window.location.reload();
      });
    });
  });
}

renderProdutos();
async function renderVendedores(){
  let todosVendedoresFavoritos = [
    {
      titulo: "Studio Center",
      imagem: "./assets/img/loja-favorita.png",
      link: "./produto",
    },
    {
      titulo: "Studio Center",
      imagem: "./assets/img/loja-favorita.png",
      link: "./produto",
    },
    {
      titulo: "Studio Center",
      imagem: "./assets/img/loja-favorita.png",
      link: "./produto",
    },
    {
      titulo: "Studio Center",
      imagem: "./assets/img/loja-favorita.png",
      link: "./produto",
    },
  ];
  // busca no localstorage
  let vendedoresFav = JSON.parse(localStorage.getItem("vendedores_favoritos")) || [];
  // filtra e renderiza apenas os favoritos
  const vendedoresFavoritados = todosVendedoresFavoritos.filter(vendedor =>
    vendedoresFav.include(String(vendedor.id_vendedor))
  );

  vendedoresFavoritados.forEach(vendedor => {
    docTagVendedoresFav.innerHTML += cardVendFavorito(vendedor);
  });

  // espera o DOM carregar os botões para adicionar eventos
  setTimeout(()=> {
    const btnsRemove = document.querySelectorAll(".btn-remove");
    btnsRemove.forEach(btn =>{
      const id = btn.dataset.id;
      vendedoresFav = vendedoresFav.filter(vid => vid !== id);
      localStorage.setItem("vendedores_favoritos", JSON.stringify(vendedoresFav));
      window.location.reload();
    });
  });
}
await renderVendedores();

