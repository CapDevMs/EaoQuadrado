// let limpa_cache = Date.now();

// let { default: cardProdutoFav} = await import( `./components/card-prod-favoritos.js?v=${ limpa_cache }`);
import cardProdutoFav from "./components/card-prod-favoritos";

const docTag = document.querySelector('card-produto-fav');

let ProdutosFav = [
    {
        'id': 1,
        'titulo': 'Notebook Asus Gamer',
        'imagem': '../assets/img/acer_nitro\.png',
        'preco': '3,999,99',
        'link': './produto.php'
    },
    {
        'id': 2,
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 3,
        'titulo': 'Notebook Asus Gamer',
        'imagem': '../assets/img/computador.png',
        'preco': '3,999,99',
        'link': './produto.php'
    },
    {
        'id': 4,
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/caneca3.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 5,
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 6,
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/caneca3.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'id': 7,
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 8,
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/computador.png',
        'preco': '119,90',
        'link': './produto.php'
    },
];

await exibirProdutosFav();

async function exibirProdutosFav(){
    ProdutosFav.forEach((ProdutosFav) =>{
        docTag.innerHTML += cardProdutoFav(ProdutosFav)
    });

}

// ProdutosFav.forEach((ProdutosFavComponent)=>{
//     console.log(docTag)
//     docTag.innerHTML += cardProdutoFav(ProdutosFavComponent);
// });


