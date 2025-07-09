import cardProduto from "./components/card-produto_categoria.js";
import filtroComponent from "./components/filtro-categoria.js";

document.addEventListener("DOMContentLoaded", async () => {
  const docTag = document.querySelector("cardProduto");

  async function renderCategorias() {
    const div = document.querySelector("filtrocomponent");
    const categorias = await fetch("getCategorias");
    const filtroInfo = await categorias.json();
    div.innerHTML += filtroComponent(filtroInfo);
  }

  await renderCategorias();
  
  document.querySelectorAll(".categoriasFiltro").forEach((btnCategoria) => {
    btnCategoria.addEventListener("click",async () => {renderProdutoByCategoria(btnCategoria.dataset.id)});
  })

  async function renderProdutoByCategoria(id) {
    const formData = new FormData();

    formData.append("categoria_id", id);

    const request = await fetch("searchProdutoByCategoria", {
      method:"post",
      body: formData
    });

    const json = await request.json();
    console.log(json)
    docTag.innerHTML = ""
    exibirProdutos(json)
  }

  const searchForm = document.getElementById("buscaProduto");

  searchForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    let searchInput = document.getElementById("searchProduto").value;

    const request = await fetch(
      `searchProduto?BuscarProduto=${encodeURIComponent(searchInput)}`
    );

    const json = await request.json();

    if (Object.keys(json).length == 0) {
      docTag.innerHTML = "";
      const p = document.createElement("p");
      p.className = "categoriaVazia";
      p.innerHTML = "Nenhum Produto Encontrado";
      docTag.append(p);
    } else {
      docTag.innerHTML = "";
      exibirProdutos(json);
    }
  });

  const aplicarFiltro = document.getElementById("filtroPrice");

  aplicarFiltro.addEventListener("submit", async (e) => {
    e.preventDefault();

    let precoMin = document.getElementById("min").value;
    let precoMax = document.getElementById("max").value;

    precoMin = precoMin === "" ? 0 : precoMin;
    precoMax = precoMax === "" ? 0 : precoMax;

    const formData = new FormData();

    formData.append("precoMax", parseFloat(precoMax));
    formData.append("precoMin", parseFloat(precoMin));

    const request = await fetch("filtroMaxMin", {
      method: "POST",
      body: formData,
    });

    const json = await request.json();

    if (Object.keys(json).length == 0) {
      docTag.innerHTML = "";
      const p = document.createElement("p");
      p.className = "categoriaVazia";
      p.innerHTML = "Nenhum Produto Encontrado";
      docTag.append(p);
    } else {
      docTag.innerHTML = "";
      exibirProdutos(json);
    }
  });

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
});
