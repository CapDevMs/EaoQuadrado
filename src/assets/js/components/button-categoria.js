const buttonCategoria = ({ imagem, nome, link }) => {
  return `
      <div class="button-categoria col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
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