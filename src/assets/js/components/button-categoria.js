const buttonCategoria = ({ imagem, nome }) => {
    return `
    <div class="button-categoria">
        <button class="button" type="button">
            <div class="container-imagem">
                <img class="img-produto" src="${imagem}" alt="Ícone de ${nome}">
            </div>
            <div class="container-nome-produto">
                <h3 class="nome-produto">${nome}</h3>
            </div>
        </button>
    </div>
    `;
};

export default buttonCategoria;
