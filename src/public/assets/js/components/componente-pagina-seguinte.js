// componente-pagina-seguinte.js
const paginaSeguinte = ({ link }) => {
    return `
      <nav class="container-componente-page-seguinte row"> 
        <ul class="number-pages">
          <li><a href="${link}" id="page-anterior">&#60; Anterior</a></li>
          <li><a href="${link}" data-page="1" class = "numbers-page" id="number-page-1">1</a></li>
          <li><a href="${link}" data-page="2" class = "numbers-page" id="number-page-2">2</a></li>
          <li><a href="${link}" data-page="3" class = "numbers-page" id="number-page-3">3</a></li>
          <li><a href="${link}" data-page="4" class = "numbers-page" id="number-page-4">4</a></li>
          <li><a href="${link}" id="page-seguinte">Seguinte &#62;</a></li>
        </ul>
      </nav>
    `;
  };
  export default paginaSeguinte;