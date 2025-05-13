let limpa_cache = Date.now();

let { default: cardProduto } = await import( `./components/card-produto.js?v=${ limpa_cache }` );
let { default: banner_vendedor } = await import( `./components/banner_vendedor.js?v=${ limpa_cache }` );
// import cardProduto from "./components/card-produto.js";


const docTag_banner = document.querySelector('banner_vendedor');


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

let banner = [{
    'titulo' : 'Teste',
    'email' : 'Studiocenter@gmail.com',
    'endereco' : 'Av.joão Cassimiro, 628, Tiradentes',
    'telefone' : '(67) 99299-3053'
}]

banner.forEach((titulo, email, endereco, telefone) => {
    docTag_banner.innerHTML += banner_vendedor(titulo, email, endereco, telefone)
});
