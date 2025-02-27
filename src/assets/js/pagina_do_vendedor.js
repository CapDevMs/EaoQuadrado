import cardProduto from "./components/card-produto.js";

const docTag = document.querySelector('card-produto');

let produtos = [
    {
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/acer_nitro.png',
        'preco': '119,90'
    },
    {
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '119,90'
    }, {
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/acer_nitro.png',
        'preco': '119,90'
    },
    {
        'titulo': 'Ração de cachorro',
        'imagem': '../assets/img/asus_notebook.png',
        'preco': '119,90'
    }
]

produtos.forEach((produto) => {
    docTag.innerHTML += cardProduto(produto)
});

for x in produtos:

    n = 3
    if x == n:
        break

for produtos (i=0, i <=3, i++){
    
}