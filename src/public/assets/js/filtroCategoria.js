import filtroComponent from './components/filtro-categoria.js';

const div = document.querySelector('filtroComponent');


let filtroInfo = [
    {
        'categoria': ['Celulares', 'Computadores', 'Smartwatches', 'Câmera', 'Fones de ouvido','Games']
    }
]

filtroInfo.forEach(element => {
    div.innerHTML += filtroComponent(element);
});

