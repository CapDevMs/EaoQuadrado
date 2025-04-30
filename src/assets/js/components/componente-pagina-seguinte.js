// componente da pagina seguinte aqui   

const paginaSeguinte = ({link}) => {
    return `
        <nav class="container-componente-page-seguinte row"> 
            <ul class="number-pages">
                <li><a href="${link}" id="number-page-1">1</a></li>
                <li><a href="${link}" id="number-page-2">2</a></li>
                <li><a href="${link}" id="number-page-3">3</a></li>
                <li><a href="${link}" id="number-page-4">4</a></li>
                <li><a href="${link}" id="page-seguinte">Seguinte ></a></li>
            </ul>
        </nav>
    `;
  };
  
  export default paginaSeguinte;
 
