import galeriaImg from "./components/galeria-img.js";   

import fieldsetLoja from "./components/fieldset-loja.js";

import componenteTelaProduto from "./components/componente-tela-produto.js";

const componenteTelaProdutoContainer = document.querySelector(".tela-produto");

let telaProdutoItens = [
    {
        'nomeProduto': 'Bolsa Gucci',
        'precoProduto':'987,88',
        'descricao':'Eleve o seu estilo com a deslumbrante Bolsa Feminina Gucci...',
        'nomeLoja':'studio center' 
    }
];

let images = [
    { 'image': 'assets/img/tela-produtos/bolsa.png' }
];

let fieldsetLojaitens = [
    { 'image': 'src/public/assets/img/tela-produtos/loja.png', 'nomeLoja': 'Studio Center' }
];


if (componenteTelaProdutoContainer) {
    let componenteTelaProdutoHTML = ""; 
    telaProdutoItens.forEach((item) => {
        componenteTelaProdutoHTML += componenteTelaProduto(item); 
    });
    componenteTelaProdutoContainer.innerHTML = componenteTelaProdutoHTML; 

    const galeriaContainer = componenteTelaProdutoContainer.querySelector(".galeria-container");
    const contadorContainer = componenteTelaProdutoContainer.querySelector(".contador-container");
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

    if (contadorContainer) {
        contadorContainer.innerHTML = contadorQuantidade();

        const mais = contadorContainer.querySelector(".btn-mais"); 
        const menos = contadorContainer.querySelector(".btn-menos"); 
        const qtd = contadorContainer.querySelector(".input-quantidade"); 

        if (mais && menos && qtd) {
            let quantidadeProdutos = 1;

            mais.addEventListener("click", () => {
                quantidadeProdutos++;
                qtd.value = quantidadeProdutos;
            });

            menos.addEventListener("click", () => {
                if (quantidadeProdutos > 1) {
                    quantidadeProdutos--;
                }
                qtd.value = quantidadeProdutos;
            });

            qtd.addEventListener("change", () => {
                const novoValor = parseInt(qtd.value);
                if (!isNaN(novoValor) && novoValor > 0) {
                    quantidadeProdutos = novoValor;
                } else {
                    qtd.value = quantidadeProdutos; 
                }
            });
        } else {
            console.error("Elementos do contador não encontrados.");
        }
    } else {
        console.error("Container '.contador-container' não foi encontrado no DOM.");
    }

} else {
    console.error("Container principal '.tela-produto' não foi encontrado no DOM.");
}

