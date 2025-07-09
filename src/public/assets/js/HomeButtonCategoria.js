import buttonCategoria from './components/button-categoria.js';

async function renderCategorias() {
    const btn = document.querySelector("buttonCategoria");
    const categorias = await fetch("getCategorias");
    const filtroInfo = await categorias.json();
    btn.innerHTML += buttonCategoria(filtroInfo);
  }

renderCategorias();