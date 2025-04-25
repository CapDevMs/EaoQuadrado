// js da página de categorias
let limpa_cache = Date.now();

let { default: buttonCategoria } = await import(`./components/button-categoria.js?v=${limpa_cache}`);

const docTag = document.querySelector('.button-categoria');

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

if (docTag) {
    categorias.forEach((categoria) => {
        docTag.innerHTML += buttonCategoria(categoria);
    });
} else {
    console.error("Elemento .button-categoria não encontrado.");
}