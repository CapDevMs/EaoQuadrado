const buttonCategoria = ({ imagem, nome }) => {
    return `
    <div class="col-3">
        <div class="button">
            <div class="button-body ptb-1 plr-1">
                <div class="container-imagem">
                    <img class="img-produto" src="${imagem}">
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">${nome}</h3>
                </div>
            </div>
        </div>
    </div>
    `;
}

export default buttonCategoria;