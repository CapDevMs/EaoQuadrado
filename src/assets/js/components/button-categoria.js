const buttonCategoria = ({ imagem, nome }) => {
    return `
    <div class="container">
        <button class="buttonCategoria">
            <div class="button-body">
                <div class="container-imagem">
                    <img class="img-produto" src="${imagem}" alt="Ícone de ${nome}">
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">${nome}</h3>
                </div>
            </div>
        </button>
    </div>
    `;
}
customElements.define("button-categoria", ButtonCategoria);

export default buttonCategoria;
