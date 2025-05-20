// java script e componentes 
let limpa_cache = Date.now();

let { default: cardProdFavorito } = await import( `./components/card-prod-favoritos.js?v=${ limpa_cache }` );
let { default: cardVendFavorito } = await import( `./components/card-vendedor-fav.js?v=${ limpa_cache }` );
// import cardProduto from "./components/card-produto.js";

const docTagProdutosFav = document.querySelector('.card-prod-favorito-container');
const docTagVendedoresFav = document.querySelector('.card-vendedor-favorito');

// import cardProduto from './components/card-prod-favoritos.js';

// const docTag = document.querySelector("card-prod-favorito");

let produtosFav = [
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': './assets/img/caneca1.png',
        'preco': '99,90',
        'link': '../../Views/produto.php'
    },
]


let VendedoresFav = [
    {
        'titulo': 'Studio Center',
        'imagem': './assets/img/loja-favorita.png',
        'link': './produto.php'
    },
    {
        'titulo': 'Studio Center',
        'imagem': './assets/img/loja-favorita.png',
        'link': './produto.php'
    },
    {
        'titulo': 'Studio Center',
        'imagem': './assets/img/loja-favorita.png',
        'link': './produto.php'
    },
    {   
        'titulo': 'Studio Center',
        'imagem': './assets/img/loja-favorita.png',
        'link': './produto.php'
    },

]
await exibirProdutosVendFav();
await exibirProdutosFav();


async function exibirProdutosFav() {
    produtosFav.forEach((produtos) => {
        docTagProdutosFav.innerHTML += cardProdFavorito(produtos);
    });
}

async function exibirProdutosVendFav() {
    VendedoresFav.forEach((vendedores) => {
        docTagVendedoresFav.innerHTML += cardVendFavorito(vendedores);
    });
}



