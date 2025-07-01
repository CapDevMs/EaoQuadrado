import filtroComponent from './components/filtro-categoria.js';

const div = document.querySelector('filtroComponent');


let filtroInfo =
    {
        'categoria': ['Celulares', 'Computadores', 'Smartwatches', 'Câmera', 'Fones de ouvido','Games']
    }


for (let coisa in filtroInfo) {
        div.innerHTML = filtroComponent(filtroInfo[coisa]);
}
