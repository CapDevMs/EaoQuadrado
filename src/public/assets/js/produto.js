console.log(`abriu Script p[roduto]`)
console.log(listaProdutosJS)
import galeriaImg from "./components/galeria-img.js";   

import fieldsetLoja from "./components/fieldset-loja.js";

import componenteTelaProduto from "./components/componente-tela-produto.js";

const componenteTelaProdutoContainer = document.querySelector(".tela-produto");

const produtoSelecionado = listaProdutosJS.find(produto => produto.id_produto == idPego)
const lojaSelecionada = listaVendedoresJS.find(vendedor => vendedor.id_loja == produtoSelecionado.id_loja)
let telaProdutoItens = [
    {
        'id_produto':`${produtoSelecionado.id_produto}`,
        'nomeProduto': `${produtoSelecionado.nome}`,
        'precoProduto':`${produtoSelecionado.preco}`,
        'descricao':`${produtoSelecionado.descricao}`,
        'nomeLoja':`${lojaSelecionada.nome}` 
    }
];

let images = [
    { 'image': `${produtoSelecionado.imagens}` }
];

let fieldsetLojaitens = [
    { 'image': `${lojaSelecionada.loja_imagem}`, 
    'nomeLoja':`${lojaSelecionada.nome_loja}`,
    'numeroLoja':`${lojaSelecionada.telefone}` }
];


if (componenteTelaProdutoContainer) {
    let componenteTelaProdutoHTML = ""; 
    telaProdutoItens.forEach((item) => {
        componenteTelaProdutoHTML += componenteTelaProduto(item); 
    });
    componenteTelaProdutoContainer.innerHTML = componenteTelaProdutoHTML; 

    const galeriaContainer = componenteTelaProdutoContainer.querySelector(".galeria-container");
    const fieldsetLojaContainer = componenteTelaProdutoContainer.querySelector(".fieldset-loja");
    const iconeCarrinho = document.getElementById('icone-carrinho');

    if (galeriaContainer) {
        let galeriaHTML = ""; 
        images.forEach((image) => {
            galeriaHTML += galeriaImg(image); 
        });
        galeriaContainer.innerHTML = galeriaHTML; 
    } else {
        console.error("Container '.galeria-container' não foi encontrado no DOM.");
    }

    if (fieldsetLojaContainer) { 
        let fieldsetLojaHTML = ""; 
        fieldsetLojaitens.forEach((item) => {
            fieldsetLojaHTML += fieldsetLoja(item); 
        });
        fieldsetLojaContainer.innerHTML = fieldsetLojaHTML; 
    } else {
        console.error("Container '.fieldset-loja' não foi encontrado no DOM.");
    }
   
    if (iconeCarrinho) {

        const imagemOriginalCarrinho = 'assets/img/carrinho-tela-produto.svg';
        const imagemSucesso = 'assets/img/tela-produtos/carrinhopreenchido.svg';

        iconeCarrinho.addEventListener('click', function() {
            iconeCarrinho.src = imagemSucesso;
            console.log('Produto adicionado ao carrinho!');
            setTimeout(function() {
                iconeCarrinho.src = imagemOriginalCarrinho;
            }, 500); 
        });
    }

} else {
    console.error("Container principal '.tela-produto' não foi encontrado no DOM.");
}

