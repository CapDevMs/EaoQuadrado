// java script e componentes 
let limpa_cache = Date.now();

let { default: cardProduto } = await import( `./components/card-prod-favoritos.js?v=${ limpa_cache }` );

// import cardProduto from "./components/card-produto.js";

const docTag = document.querySelector('card-prod-favorito');


// import cardProduto from './components/card-prod-favoritos.js';

// const docTag = document.querySelector("card-prod-favorito");

let produtosFav = [
    {
        'titulo': 'Notebook Acer Gamer',
        'imagem': '../../assets/img/acer_nitro.png',
        'preco': '3,999,99',
        'link': './produto.php'
    },
    {
        'titulo': 'Notebook Asus ',
        'imagem': '../../assets/img/asus_notebook.png',
        'preco': '2,999,90',
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
        'titulo': 'Notebook Asus Gamer',
        'imagem': '../../assets/img/asus_notebook.png',
        'preco': '2,999,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Notebook Asus Gamer',
        'imagem': '../../assets/img/asus_notebook.png',
        'preco': '2,999,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/monitor_oled.png',
        'preco': '899,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/monitor_oled.png',
        'preco': '899,90',
        'link': './produto.php'
    },
]

await exibirProdutosFav();

async function exibirProdutosFav() {
    produtosFav.forEach((produtosFav) => {
        docTag.innerHTML += cardProduto(produtosFav)
    });
}