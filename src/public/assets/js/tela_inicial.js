import cardProduto from "../js/components/card-produto.js";
import mosaicoComp from "../js/components/componente-mosaico.js";

const docTag = document.querySelector("card-produto");

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

// function exibirMosaico(div_mosaico) {
//   const div_mosaico = document.querySelector('mosaico');
//   let mosaicoInfo =
//       {
//           'nome': ['PlayStation 5','Roupas', 'Caixa de Som', 'Bolsa'],
//           'descricao': ['Versão em preto e branco do PS5 chegando à venda','Coleções em destaque que dão outra vibe', 'Alto-falantes sem fio', 'GUCCI INTENSE'],
//           'imagem': ['']
//       }


//   for (let itens in mosaicoInfo) {
//           div.innerHTML = div_mosaico(mosaicoInfo[itens]);
//   }

// }

// exibirMosaico()