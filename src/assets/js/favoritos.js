// java script e componentes 
let limpa_cache = Date.now();

let { default: cardProdFavorito } = await import( `./components/card-prod-favoritos.js?v=${ limpa_cache }` );
let { default: cardProdVendedor } = await import( `./components/card-vendedor-fav.js?v=${ limpa_cache }` );
// import cardProduto from "./components/card-produto.js";

const docTagProdutos = document.querySelector('.card-prod-favorito-container');


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
await exibirProdutosVendFav();

async function exibirProdutosFav() {
    produtosFav.forEach((produtosFav) => {
        docTagProdutos.innerHTML += cardProdFavorito(produtosFav)
    });
}


const docTagVendedor = document.querySelector('card-vendedor-favorito');

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


async function exibirProdutosVendFav() {
    produtosFav.forEach(( VendedoresFav) => {
        docTagVendedor.innerHTML += cardVendFavorito( VendedoresFav)
    });
}