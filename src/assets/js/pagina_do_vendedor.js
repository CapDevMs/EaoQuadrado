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

<<<<<<< HEAD
produtos.forEach((produto) => {
    docTag.innerHTML += cardProduto(produto)
});
=======
await exibirProdutos();

let likeBtns = document.querySelectorAll('i.like');

likeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        alert('Produto favoritado com sucesso!');
    })
});


async function exibirProdutos() {
    produtos.forEach((produto) => {
        docTag.innerHTML += cardProduto(produto)
    });
}
>>>>>>> 35c94bfad1e71e19caa8a249d90858804b9f331f
