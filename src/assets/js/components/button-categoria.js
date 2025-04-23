const buttonCategoria = ({ imagem, nome, link }) => {
  return `
      <div class="button-categoria">
          <a href="${link}">
              <button class="button" type="button">
                  <div class="container-imagem">
                      <img class="img-CategoriaButton" src="${imagem}" alt="Ícone de ${nome}">
                  </div>
                  <div class="container-nome-produto">
                      <h3 class="nome-produto">${nome}</h3>
                  </div>
              </button>
          </a>
      </div>
  `;
};

export default buttonCategoria;
// col-1 col-sm-1 col-md-3 col-lg-2 col-xl-3