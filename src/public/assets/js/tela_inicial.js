import cardProduto from "../js/components/card-produto.js";

const docTag = document.querySelector("card-produto");

async function renderProdutos() {
  const produtos = await fetch("getProdutos");
  const info = await produtos.json();
  exibirProdutos(info);
}

function exibirProdutos(produtos) {
  produtos.forEach((produto) => {
    docTag.innerHTML += cardProduto(produto);

    let favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];

    if (favoritos.includes(String(produto.id_produto))) {
      const btn = document.getElementById("like");
      if(btn.classList.contains("fa-regular")) {
          btn.classList.toggle("fa-solid");
      }
    } else {
      const likeBtns = document.querySelectorAll(".like");
      likeBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
          btn.classList.toggle("fa-solid");

          const produtoId = btn.dataset.id;

          if (btn.classList.contains("fa-solid")) {
            if (!favoritos.includes(produtoId)) {
              favoritos.push(produtoId);
            }
          } else {
            favoritos = favoritos.filter((id) => id !== produtoId);
          }

          localStorage.setItem("favoritos", JSON.stringify(favoritos));
        });
      });
    }
  });
}

renderProdutos();
