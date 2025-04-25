// Ao abrir a tela o componente deve identificar em qual categoria o componente se encontra procurando a classe da categoria selecionada.
// O componente deve pelo id da classe ou pelo nome da classe tornar o nome da classe em uma variavel
// O componente devera adicionar o nome da classe no modelo const video = '<?php get_base_url(); ?>/assets/videos/videoBannerClasses_${nomeClasse}.mp4'
// O componente deve então adicionar a uma variavel o modelo html completo que será inserido (segue exemplo)

// const video = ({ video }) => {
//     return `
//         <div class="video-celular">
//             <video autoplay muted loop>
//                 <source src="../assets/videos/${video}" type="video/mp4">        
//             </video>
//         </div>
//     `;
// }

// O componente deve inserir o arquvio no html da pagina Categoria respectiva

export default video;

import cardProduto from '../js/components/card-produto.js';

const docTag = document.querySelector('card-produto');

let produtos = [
    {
        'id': 1,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'id': 2,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 3,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca1.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'id': 4,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca3.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 5,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 6,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca3.png',
        'preco': '99,90',
        'link': './produto.php'
    },
    {
        'id': 7,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca2.png',
        'preco': '119,90',
        'link': './produto.php'
    },
    {
        'id': 8,
        'titulo': 'Caneca especial Programador',
        'imagem': 'assets/img/caneca1.png',
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