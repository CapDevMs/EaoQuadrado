let limpa_cache = Date.now();

let { default: cardProduto } = await import( `./components/card-produto.js?v=${ limpa_cache }` );

// import cardProduto from "./components/card-produto.js";

const docTag = document.querySelector('card-produto');

let produtos = [
    {
        'id': 1,
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/caneca1.png',
        'preco': '99,90',
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
        'titulo': 'Caneca especial Programador',
        'imagem': '../assets/img/caneca1.png',
        'preco': '99,90',
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
        'imagem': '../assets/img/caneca1.png',
        'preco': '119,90',
        'link': './produto.php'
    },
]

produtos.forEach((produto) => {
    docTag.innerHTML += cardProduto(produto)
    document.getElementById('like_prod_' + produto.id).addEventListener('click', () => {
        alert('teste');
    })
});