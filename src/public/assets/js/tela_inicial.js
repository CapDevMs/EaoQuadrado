import cardProduto from '../js/components/card-produto.js';

const docTag = document.querySelector('card-produto');

let produtos = [
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
    },
    {
        'id': 5,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto'
    },
    {
        'id': 6,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca3.png',
        'preco': '99,90',
        'link': './produto'
    },
    {
        'id': 7,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto'
    },
    {
        'id': 8,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca1.png',
        'preco': '119,90',
        'link': './produto'
    },
]

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