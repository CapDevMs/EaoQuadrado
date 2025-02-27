import buttonCategoria from "./components/button-categoria";
const docTag = document.querySelector(buttonCategoria);

let categorias= [
    {
        'imagem':'../assets/img/categoria/icone-categoria/camera_icon.svg',
        'nome':'Camera'       
    },
    {
        'imagem':'../assets/img/categoria/icone-categoria/cellphone_icon.svg',
        'nome':'Celular'       
    },
    {
        'imagem':'../assets/img/categoria/icone-categoria/computer_icon.svg',
        'nome':'Computador'       
    },
    {
        'imagem':'../assets/img/categoria/icone-categoria/games_icon.svg',
        'nome':'Games'       
    },
    {
        'imagem':'../assets/img/categoria/icone-categoria/headphone_icon.svg',
        'nome':'Fone de Ouvido'       
    },
    {
        'imagem':'../assets/img/categoria/icone-categoria/smartwatches_icon.svg',
        'nome':'Smartwatche'       
    },
]
categorias.forEach((imagem,nome)=>{
    docTag.innerHTML += buttonCategoria(imagem,nome)
}); 