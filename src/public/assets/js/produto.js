import galeriaImg from "../js/components/galeria-img.js";
import contadorQuantidade from "../js/components/contador-quantidade.js";
import cardProduto from "../js/components/card-produto.js";
import componenteTelaProduto from "../js/components/tela-produto.js";
import fieldsetLoja from "../js/components/fieldset-loja.js";

// Obtém o ID do produto da URL
const idProduto = new URLSearchParams(window.location.search).get('id');

// Função principal
if (!idProduto) {
  const produtoMock = {
    nome: "Bolsa Gucci",
    preco: "987.88",
    descricao: "Eleve o seu estilo com a deslumbrante Bolsa Feminina Gucci...",
    nome_loja: "Studio Center",
    imagem: "assets/img/tela-produtos/bolsa.png",
    logo_loja: "assets/img/tela-produtos/loja.png",
    link_loja: "#"
  };

  renderProduto(produtoMock);
  renderProdutosRelacionados();
} else {
  carregarProduto(idProduto);
}

// Requisição real de produto via API
async function carregarProduto(id) {
  try {
    const response = await fetch(`/getProduto?id=${id}`);
    if (!response.ok) throw new Error("Produto não encontrado");

    const produto = await response.json();
    renderProduto(produto);
    renderProdutosRelacionados();

  } catch (error) {
    console.error(error);
    document.querySelector(".container-produto").innerHTML = `<p>Erro ao carregar produto.</p>`;
  }
}

// Renderiza os dados principais do produto
function renderProduto(produto) {
  const container = document.querySelector(".container-produto");
  container.innerHTML = componenteTelaProduto(produto);

  document.querySelector(".galeria-container").innerHTML = galeriaImg({
    image: produto.imagem
  });

  document.querySelector(".fieldset-loja").innerHTML = fieldsetLoja({
    image: produto.logo_loja,
    nomeLoja: produto.nome_loja,
    linkLoja: produto.link_loja
  });

  contadorQuantidade();

  configurarFavoritos();
  configurarCarrinho(produto.id || idProduto); // caso id esteja disponível
}

// Lógica do botão de favoritos
function configurarFavoritos() {
  const iconeFavorito = document.querySelector("#btn-favorito i");
  if (!iconeFavorito) return;

  iconeFavorito.addEventListener('click', function () {
    const isFavoritado = iconeFavorito.classList.contains("bi-heart-fill");

    iconeFavorito.classList.toggle("bi-heart", isFavoritado);
    iconeFavorito.classList.toggle("bi-heart-fill", !isFavoritado);
  });
}

// Lógica do botão de adicionar ao carrinho
function configurarCarrinho(idProduto) {
  const iconeCarrinho = document.querySelector("#btn-carrinho i");
  const inputQtd = document.querySelector(".input-quantidade");

  if (!iconeCarrinho || !inputQtd) return;

  iconeCarrinho.addEventListener('click', function () {
    const qtd = Number(inputQtd.value) || 1;
    
    iconeCarrinho.classList.replace("bi-bag-plus", "bi-bag-check");

    setTimeout(() => {
      iconeCarrinho.classList.replace("bi-bag-check", "bi-bag-plus");
    }, 1500);

    // Aqui você pode salvar no carrinho com o ID real
    console.log(`Produto ${idProduto} adicionado com quantidade: ${qtd}`);
  });
}

// Produtos relacionados (estático por enquanto)
function renderProdutosRelacionados() {
  const produtos = [
    {
      imagem: "assets/img/tela-produtos/bolsa.png",
      titulo: "Bolsa Louis Vuiton",
      preco: "199,99",
      descricao: "Bolsa original feita em couro de jumento albino",
      id: 1
    },
    {
      imagem: "assets/img/tela-produtos/sapato.png",
      titulo: "Sapato Versace",
      preco: "788,98",
      descricao: "Um dos sapatos mais caros do Brasil",
      id: 2
    },
    {
      imagem: "assets/img/tela-produtos/bermuda.png",
      titulo: "Bermuda Champion",
      preco: "388,98",
      descricao: "100% algodão premium",
      id: 3
    }
  ];

  const containerRelacionados = document.querySelector(".produtos-relacionados");
  if (!containerRelacionados) return;

  produtos.forEach((produto) => {
    containerRelacionados.innerHTML += cardProduto(produto);
  });
}
