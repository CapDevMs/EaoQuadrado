import buttonCategoria from "./components/button-categoria.js"
import cardProdFavorito from "./components/card-prod-favoritos.js";
import filtroComponent from './components/filtro-categoria.js';

const div = document.querySelector('filtroComponent');


let filtroInfo =
    {
        'categoria': ['Celulares', 'Computadores', 'Smartwatches', 'Câmera', 'Fones de ouvido','Games']
    }


for (let coisa in filtroInfo) {
        div.innerHTML += filtroComponent(filtroInfo[coisa]);
}


const docTagCategoria = document.querySelector('buttonCategoria');
const categorias = [
    {
        imagem: 'assets/img/camera_icon.svg',
        nome: 'Camera'
    },
    {
        imagem: 'assets/img/cellphone_icon.svg',
        nome: 'Celulares'
    },
    {
        imagem: 'assets/img/computer_icon.svg',
        nome: 'Computador'
    },
    {
        imagem: 'assets/img/games_icon.svg',
        nome: 'Games'
    },
    {
        imagem: 'assets/img/headphone_icon.svg',
        nome: 'Fone de Ouvido'
    },
    {
        imagem: 'assets/img/smartwatches_icon.svg',
        nome: 'Smartwatch'
    }
];

categorias.forEach((categoria) => {
    docTagCategoria.innerHTML += buttonCategoria(categoria);
});



const docTagProdutoFav = document.querySelector('cardProduto');

const produtos = [
    {
        id: 1,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca1.png',
        preco: '99,90',
        link: './produto'
    },
    {
        id: 2,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca2.png',
        preco: '119,90',
        link: './produto'
    },
    {
        id: 3,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca1.png',
        preco: '99,90',
        link: './produto'
    },
    {
        id: 4,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca3.png',
        preco: '119,90',
        link: './produto'
    },
    {
        id: 5,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca2.png',
        preco: '119,90',
        link: './produto'
    },
    {
        id: 6,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca3.png',
        preco: '99,90',
        link: './produto'
    },
    {
        id: 7,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca2.png',
        preco: '119,90',
        link: './produto'
    },
    {
        id: 8,
        titulo: 'Caneca especial Programador',
        imagem: 'assets/img/caneca1.png',
        preco: '119,90',
        link: './produto'
    }
];

produtos.forEach((produto) => {
    docTagProdutoFav.innerHTML += cardProdFavorito(produto);
});



const likeBtns = document.querySelectorAll('i.like');
likeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        alert('Produto favoritado com sucesso!');
    });
});


// const docTagFiltro = document.querySelector("filtroCategoria");
// docTagFiltro.innerHTML = filtroComponent();




