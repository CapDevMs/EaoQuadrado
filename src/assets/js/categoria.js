import buttonCategoria from "./components/button-categoria.js";

let categorias = [
    {
        'imagem': '../assets/img/categoria/icone-categoria/camera_icon.svg',
        'nome': 'Camera',
        'link': '#'       
    },
    {
        'imagem': '../assets/img/categoria/icone-categoria/cellphone_icon.svg',
        'nome': 'Celulares',
        'link': '#' 
    },
    {
        'imagem': '../assets/img/categoria/icone-categoria/computer_icon.svg',
        'nome': 'Computador' ,
        'link': '#' 
    },
    {       
        'imagem': '../assets/img/categoria/icone-categoria/games_icon.svg',
        'nome': 'Games',
        'link': '#' 
        
    },
    {
        'imagem': '../assets/img/categoria/icone-categoria/headphone_icon.svg',
        'nome': 'Fone de Ouvido',
        'link': '#' 
        
    },
    {
        'imagem': '../assets/img/categoria/icone-categoria/smartwatches_icon.svg',
        'nome': 'Smartwatch',
        'link': '#' 
        
    },  
];

const docTag = document.querySelector("buttonCategoria");


categorias.forEach((categoriaComponent) => {
    console.log(docTag)
    docTag.innerHTML += buttonCategoria(categoriaComponent);
});
