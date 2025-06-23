const cardProdFavorito = ({id_produto, nome, imagens, preco, link = './carrinho'}) => {   
    return `
    <div class="card-prod-favorito col-sm-6 col-lg-4 col-xl-3">
        <div class="card-body">
            <div class="imagem-produto-wrapper" data-id="${id_produto}">
                <a href="${link}">
                    <img class="img-produto" src=${imagens}>
                </a>
                <a class="shopping-link icon-top-right" href="${link}">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
        <div class="card-footer">
            <div class="container-nome-produto">
                <h3 class="nome-produto">${nome}</h3>
            </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$ ${preco}</h3>
                </div>
            <a href="${link}" class="btn btn-add-carrinho">Adicionar ao Carrinho</a>
        </div>
    </div>    
    `;
};

export default cardProdFavorito ;