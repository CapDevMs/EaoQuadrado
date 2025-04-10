// java script e componentes 
import cardProduto from '../js/components/card-prod-favoritos.js';

const docTag = document.querySelector('card-prod-favorito');

let produtosFav = [
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../../assets/img/caneca2.png',
        'preco': '119,90',
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
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '2,999,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Notebook Asus Gamer',
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '2,999,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Notebook Asus Gamer',
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '2,999,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/monitor_oled.png',
        'preco': '899,90',
        'link': './produto.php'
    },
    {
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/monitor_oled.png',
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