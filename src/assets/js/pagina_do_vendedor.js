let limpa_cache = Date.now();

let { default: cardProduto } = await import( `./components/card-produto.js?v=${ limpa_cache }` );

// import cardProduto from "./components/card-produto.js";

const docTag = document.querySelector('card-produto');

let produtos = [
    {
        'id': 1,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/acer_nitro.png',
        'preco': '99,90'
    },
    {
        'id': 2,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '119,90'
    },
    {
        'id': 3,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/acer_nitro.png',
        'preco': '99,90'
    },
    {
        'id': 4,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/controle_usb.png',
        'preco': '119,90'
    },
    {
        'id': 5,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '119,90'
    },
    {
        'id': 6,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/controle_ps5.png',
        'preco': '99,90'
    },
    {
        'id': 7,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '119,90'
    },
    {
        'id': 8,
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/acer_nitro.png',
        'preco': '119,90'
    },
]

produtos.forEach((produto) => {
    docTag.innerHTML += cardProduto(produto)
    document.getElementById('like_prod_' + produto.id).addEventListener('click', () => {
        alert('teste');
    })
});
