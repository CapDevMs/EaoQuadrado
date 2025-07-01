import galeriaImg from "./components/galeria-img.js";
import contadorQuantidade from "./components/contador-quantidade.js";
import cardProduto from "./components/card-produto.js";
import fieldsetLoja from "./components/fieldset-loja.js";
import componenteTelaProduto from "./components/componente-tela-produto.js";

document.addEventListener('DOMContentLoaded', () => {
     // 1. LER OS DADOS DINÂMICOS DA PÁGINA
    const jsonDataElement = document.getElementById('page-data');
    console.log(jsonDataElement)
    if (!jsonDataElement) {
        console.error("Elemento com dados JSON #page-data não encontrado!");
        return;
    }
    const dados = JSON.parse(jsonDataElement.textContent);

     // 2. USAR OS DADOS LIDOS EM VEZ DOS DADOS FIXOS
    const componenteTelaProdutoContainer = document.querySelector(".tela-produto");

     // Os arrays agora são preenchidos com os dados do PHP
    let telaProdutoItens = [dados.produto];
    let produtosRecomendar = dados.recomendados;
    let images = dados.imagens;
    let fieldsetLojaitens = [dados.loja];

    if (componenteTelaProdutoContainer) {
        let componenteTelaProdutoHTML = ""; 
        telaProdutoItens.forEach((item) => {
            componenteTelaProdutoHTML += componenteTelaProduto(item); 
        });
        componenteTelaProdutoContainer.innerHTML = componenteTelaProdutoHTML; 

        const galeriaContainer = componenteTelaProdutoContainer.querySelector(".galeria-container");
        const contadorContainer = componenteTelaProdutoContainer.querySelector(".contador-container");
        const cardProdutoRecomendar = componenteTelaProdutoContainer.querySelector(".produto-recomendar");
        const fieldsetLojaContainer = componenteTelaProdutoContainer.querySelector(".fieldset-loja");
        const iconeFavorito = document.getElementById('icone-favorito');
        const iconeCarrinho = document.getElementById('icone-carrinho');

        if (cardProdutoRecomendar) {
            let cardProdutoHTML = ""; 
            produtosRecomendar.forEach((produto) => {
                cardProdutoHTML += cardProduto(produto); 
            });
            cardProdutoRecomendar.innerHTML = cardProdutoHTML; 
        } else {
            console.error("Container '.produto-recomendar' não foi encontrado no DOM.");
        }

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
        iconeFavorito.addEventListener('click', function() {

            let srcAtual = iconeFavorito.src;
            let srcAlternativo = iconeFavorito.dataset.imagemAlternativa;
        

            iconeFavorito.src = srcAlternativo;

            iconeFavorito.dataset.imagemAlternativa = srcAtual;
        });
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
});