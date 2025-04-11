// java script e componentes 
let limpa_cache = Date.now();

let { default: cardProdFavorito } = await import( `./components/card-prod-favoritos.js?v=${ limpa_cache }` );
let { default: cardProdVendedor } = await import( `./components/card-prod-vendedor.js?v=${ limpa_cache }` );
// import cardProduto from "./components/card-produto.js";

const docTagProdutos = document.querySelector('.card-prod-favorito-container');
const docTagVendedor = document.querySelector('card-prod-vendedor');


// import cardProduto from './components/card-prod-favoritos.js';

// const docTag = document.querySelector("card-prod-favorito");

let produtosFav = [
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
]

await exibirProdutosFav();

async function exibirProdutosFav() {
    produtosFav.forEach((produtosFav) => {
        docTag.innerHTML += cardProduto(produtosFav)
    });
}



let produtosVendFav = [
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
]

await exibirProdutosVendFav();

async function eexibirProdutosVendFav() {
    produtosFav.forEach(( produtosVendFav) => {
        docTag.innerHTML += cardProduto( produtosVendFav)
    });
}