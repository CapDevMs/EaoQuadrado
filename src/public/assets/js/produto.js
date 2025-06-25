import galeriaImg from "./components/galeria-img.js";
import contadorQuantidade from "./components/contador-quantidade.js";
import cardProduto from "./components/card-produto.js";
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

let produtosRecomendar = [
    { 'id': 1, 'titulo': 'Caneca especial Programador', 'imagem': 'assets/img/caneca1.png', 'preco': '99,90', 'link': './produto' },
    { 'id': 2, 'titulo': 'Caneca especial Programador', 'imagem': 'assets/img/caneca2.png', 'preco': '119,90', 'link': './produto' },
    { 'id': 3, 'titulo': 'Caneca especial Programador', 'imagem': 'assets/img/caneca1.png', 'preco': '99,90', 'link': './produto' },
    { 'id': 4, 'titulo': 'Caneca especial Programador', 'imagem': 'assets/img/caneca3.png', 'preco': '119,90', 'link': './produto' }
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
    const cardProdutoRecomendar = componenteTelaProdutoContainer.querySelector(".produto-recomendar");
    const fieldsetLojaContainer = componenteTelaProdutoContainer.querySelector(".fieldset-loja");

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