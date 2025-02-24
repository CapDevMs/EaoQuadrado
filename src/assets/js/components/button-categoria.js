const buttonCategoria = ({ titulo, imagem, preco }) => {
    return `
    <div class="col-3">
        <div class="card">
            <div class="card-body ptb-1 plr-1">
                <div class="container-foto">
                    <img class="img-produto" src="${imagem}">
                </div>
                <div class="container-coracao-carrinho">
                    <img class="icones-coracao-carrinho" src="../../assets/img/icone-coracao.svg" alt="like" />
                    <img class="icones-coracao-carrinho" src="../../assets/img/icone-carrinho.svg" alt="cart" />
                </div>
                <div class="container-nome-produto">
                    <h3 class="nome-produto">${titulo}</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$ ${preco}</h3>
                </div>
            </div>
        </div>
    </div>
    `;
}

export default cardProduto;