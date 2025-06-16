const buttonCategoria = ({ imagem, nome, link }) => {
    return `
            <a href="${link}" class="button col-sm-4 col-md-4 col-lg-2" type="button">
                <div class="container-imagem col-sm-12">
                    <img class="img-CategoriaButton col-sm-12 pl-1" src="${imagem}" alt="Ícone de ${nome}">
                </div>
                    <p class="nome-categoria">${nome}</p>
            </a>
    `;
};

export default buttonCategoria;