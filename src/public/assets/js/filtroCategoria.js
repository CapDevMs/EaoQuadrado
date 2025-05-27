import listaVendedores from './components/filtro-categoria.js';

const div = document.querySelector('filtroComponent');


let Vendedores = [
    {
        'categoria': ['Celulares', 'Computadores', 'Smartwatches', 'Câmera', 'Fones de ouvido','Games']
    }
]

Vendedores.forEach(element => {
    div.innerHTML += listaVendedores(element);
});

