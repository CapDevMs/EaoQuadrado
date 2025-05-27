import filtroComponent from './components/filtro-categoria.js';

const div = document.querySelector('filtroComponent');


let Categorias = [
    {
        'categoria': ['Celulares', 'Computadores', 'Smartwatches', 'Câmera', 'Fones de ouvido','Games']
    }
]

Categorias.forEach(element => {
    div.innerHTML += filtroComponent(element);
});

