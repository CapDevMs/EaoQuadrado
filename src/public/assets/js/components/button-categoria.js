const buttonCategoria = ({ imagem, nome }) => {
    return `
            <button class="button col-sm-2 col-md-4 col-lg-2" type="button">
                <div class="container-imagem col-sm-12">
                    <img class="img-CategoriaButton" src="${imagem}" alt="Ícone de ${nome}">
                </div>
                    <p class="nome-categoria">${nome}</p>
            </button>
    `;
};

export default buttonCategoria;