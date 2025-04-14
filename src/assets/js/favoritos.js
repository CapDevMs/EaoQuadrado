// java script e componentes 
let limpa_cache = Date.now();

let { default: cardProdFavorito } = await import( `./components/card-prod-favoritos.js?v=${ limpa_cache }` );
let { default: cardProdVendedor } = await import( `./components/card-vendedor-fav.js?v=${ limpa_cache }` );
// import cardProduto from "./components/card-produto.js";

const docTagProdutos = document.querySelector('.card-prod-favorito-container');
const docTagVendedor = document.querySelector('.card-vendedor-favorito');

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
    produtosFav.forEach((produto) => {
        docTagProdutos.innerHTML += cardProdFavorito(produto)
    });
}


let VendedoresFav = [
    {
        'titulo': 'Studio Center',
        'imagem': '../../assets/img/loja-favorita.png',
        'link': './produto.php'
    },
    {
        'titulo': 'Studio Center',
        'imagem': '../../assets/img/loja-favorita.png',
        'link': './produto.php'
    },
    {
        'titulo': 'Studio Center',
        'imagem': '../../assets/img/loja-favorita.png',
        'link': './produto.php'
    },
    {
        'titulo': 'Studio Center',
        'imagem': '../../assets/img/loja-favorita.png',
        'link': './produto.php'
    },

]

await exibirProdutosVendFav();

async function exibirProdutosVendFav() {
    produtosFav.forEach(( vendedor) => {
        docTagVendedor.innerHTML += cardVendFavorito( vendedor)
    });
}