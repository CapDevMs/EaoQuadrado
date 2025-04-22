// js da página de categorias
import buttonCategoria from "./components/button-categoria.js";

const categorias = [
    {
        imagem: '../assets/img/categoria/icone-categoria/camera_icon.svg',
        nome: 'Camera',
        link: '#'
    },
    {
        imagem: '../assets/img/categoria/icone-categoria/cellphone_icon.svg',
        nome: 'Celulares',
        link: '#'
    },
    {
        imagem: '../assets/img/categoria/icone-categoria/computer_icon.svg',
        nome: 'Computador',
        link: '#'
    },
    {
        imagem: '../assets/img/categoria/icone-categoria/games_icon.svg',
        nome: 'Games',
        link: '#'
    },
    {
        imagem: '../assets/img/categoria/icone-categoria/headphone_icon.svg',
        nome: 'Fone de Ouvido',
        link: '#'
    },
    {
        imagem: '../assets/img/categoria/icone-categoria/smartwatches_icon.svg',
        nome: 'Smartwatch',
        link: '#'
    }
];

const docTag = document.querySelector(".button-categoria-container");
if (docTag) {
    docTag.innerHTML = categorias.map(categoria => buttonCategoria(categoria)).join('');
} else {
    console.error("Elemento <buttonCategoria> não encontrado no DOM.");
}