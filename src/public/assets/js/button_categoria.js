import buttonCategoria from "./components/button-categoria.js"

const docTagCategoria = document.querySelector('buttonCategoria');
const categorias = [
    {
        imagem: 'assets/img/computer_icon.svg',
        nome: 'Eletrônicos',
        link: './categoria'
    },
    {
        imagem: 'assets/img/dress_icon.svg',
        nome: 'Moda',
        link: './categoria'
    },
    {
        imagem: 'assets/img/home_icon.svg',
        nome: 'Casa',
        link: './categoria'
    },
    {
        imagem: 'assets/img/ball_icon.svg',
        nome: 'Esportes',
        link: './categoria'
    },
    {
        imagem: 'assets/img/ring_icon.svg',
        nome: 'Acessorios',
        link: './categoria'
    },
    {
        imagem: 'assets/img/games_icon.svg',
        nome: 'Entretenimento',
        link: './categoria'
    }
];

categorias.forEach((categoria) => {
    docTagCategoria.innerHTML += buttonCategoria(categoria);
});
