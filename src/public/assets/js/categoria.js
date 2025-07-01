import buttonCategoria from "./components/button-categoria.js";
import cardProduto from "./components/card-produto.js";
import filtroComponent from "./components/filtro-categoria.js";

const div = document.querySelector("filtroComponent");

async function renderCategorias() {
  const categorias = await fetch("getCategorias");
  const filtroInfo = await categorias.json();
  div.innerHTML + filtroComponent(filtroInfo);
}

renderCategorias();

const docTagCategoria = document.querySelector("buttonCategoria");
const categoriasButtons = [
  {
    imagem: "assets/img/computer_icon.svg",
    nome: "Eletrônicos",
    link: "./categoria",
  },
  {
    imagem: "assets/img/dress_icon.svg",
    nome: "Moda",
    link: "./categoria",
  },
  {
    imagem: "assets/img/home_icon.svg",
    nome: "Casa",
    link: "./categoria",
  },
  {
    imagem: "assets/img/ball_icon.svg",
    nome: "Esportes",
    link: "./categoria",
  },
  {
    imagem: "assets/img/ring_icon.svg",
    nome: "Acessorios",
    link: "./categoria",
  },
  {
    imagem: "assets/img/games_icon.svg",
    nome: "Entretenimento",
    link: "./categoria",
  },
];

categoriasButtons.forEach((categoria) => {
  docTagCategoria.innerHTML += buttonCategoria(categoria);
});

const docTag = document.querySelector("cardProduto");

async function renderProdutos() {
  const produtos = await fetch("getProdutos");
  const info = await produtos.json();
  exibirProdutos(info);
}

function exibirProdutos(produtos) {
  let favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];

  produtos.forEach((produto) => {
    docTag.innerHTML += cardProduto(produto);
  });

  const likeBtns = document.querySelectorAll(".like");

  likeBtns.forEach((btn) => {
    const produtoId = btn.dataset.id;

    if (favoritos.includes(produtoId)) {
      btn.classList.remove("fa-regular");
      btn.classList.add("fa-solid");
    }

    btn.addEventListener("click", () => {
      if (btn.classList.contains("fa-solid")) {
        btn.classList.remove("fa-solid");
        btn.classList.add("fa-regular");
        favoritos = favoritos.filter((id) => id !== produtoId);
      } else {
        btn.classList.remove("fa-regular");
        btn.classList.add("fa-solid");
        if (!favoritos.includes(produtoId)) {
          favoritos.push(produtoId);
        }
      }

      localStorage.setItem("favoritos", JSON.stringify(favoritos));
    });
  });
}

renderProdutos();
