// java script e componentes
let limpa_cache = Date.now();

let { default: cardProdFavorito } = await import(
  `./components/card-prod-favoritos.js?v=${limpa_cache}`
);
let { default: cardVendFavorito } = await import(
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

let VendedoresFav = [
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
await exibirProdutosVendFav();

async function exibirProdutosVendFav() {
  VendedoresFav.forEach((vendedores) => {
    docTagVendedoresFav.innerHTML += cardVendFavorito(vendedores);
  });
}
