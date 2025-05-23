const buttonCategoria = ({ imagem, nome, link }) => {
    return `
        <a href="${link}">
            <button class="button" type="button">
                <div class="container-imagem">
                    <img class="img-CategoriaButton" src="${imagem}" alt="Ícone de ${nome}">
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-categoria">${nome}</h3>
                </div>
            </button>
        </a>
    `;
};

export default buttonCategoria;