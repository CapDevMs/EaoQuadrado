
import galeriaImg from "./components/galeria-img.js";
import contadorQuantidade from "./components/contador-quantidade.js";
import cardProduto from "./components/card-produto.js";

const galeriaContainer = document.querySelector(".galeria-container");
const contadorContainer = document.querySelector(".contador-container");
const cardProdutoRecomendar = document.querySelector(".produto-recomendar");

let produtosRecomendar = [
    {
        'id': 1,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto'
    },
    {
        'id': 2,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto'
    },
    {
        'id': 3,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto'
    },
    {
        'id': 4,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca3.png',
        'preco': '119,90',
        'link': './produto'
    }
    
]

let images = [
    {
        'image': 'http://localhost/EaoQuadrado/src/public/assets/img/tela-produtos/bolsa.png',
    },
    
];

if (cardProdutoRecomendar) {
    let cardProdutoHTML = ""; 
    produtosRecomendar.forEach((id, titulo, imagem, preco, link) => {
        cardProdutoHTML += cardProduto(id, titulo, imagem, preco, link); 
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
        console.error("Elementos do contador (.btn-mais, .btn-menos, .input-quantidade) não encontrados.");
    }
} else {
    console.error("Container '.contador-container' não foi encontrado no DOM.");
}