const buttonCategoria = ({ imagem, nome, link }) => {
    return `
        <a href="${link}" >
            <button class="button col-sm-1 col-xl-2" type="button">
                <div class="container-imagem col-sm-12">
                    <img class="img-CategoriaButton" src="${imagem}" alt="Ícone de ${nome}">
                </div>
                <div class="">
                    <a class="nome-categoria">${nome}</a>
                </div>
            </button>
        </a>
    `;
};

export default buttonCategoria;