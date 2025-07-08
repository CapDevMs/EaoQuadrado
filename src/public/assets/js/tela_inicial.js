import cardProduto from '../js/components/card-produto.js';

const docTag = document.querySelector('card-produto');

async function renderProdutos() {
  const produtos = await fetch("getProdutos");
  const info = await produtos.json();
  console.log(info)
  exibirProdutos(info);
}

await exibirProdutos();

let likeBtns = document.querySelectorAll('i.like');

likeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        alert('Produto favoritado com sucesso!');
    })
});


async function exibirProdutos() {
    produtos.forEach((produto) => {
        docTag.innerHTML += cardProduto(produto)
    });
}