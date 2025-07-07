const cardProdFavorito = ({id_produto, nome, imagens, preco, link = './carrinho'}) => {   
    return `
    <div class="card-prod-favorito col-sm-6 col-lg-4 col-xl-3">
        <div class="card-body">
            <div class="imagem-produto-wrapper">
                <a href="${link}">
                    <img class="img-produto" src=${imagens}>
                </a>
                <a class="shopping-link icon-top-right" href="${link}">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
        <div class="card-footer">
            <div class="container-nome-produto col-sm-12">
                <h3 class="nome-produto ">${nome}</h3>
            </div>
                <div class="container-preco-produto col-sm-12">
                    <h3 class="preco-produto">R$ ${preco}</h3>
                </div>
            <div class="col-sm-12">
                <button class="btn btn-carrinho col-sm-12 col-md-5">Adicionar ao Carrinho</button>
                <button class="btn btn-remove col-sm-12 col-md-5" id="remove" data-id="${id_produto}">Remover dos Favoritos</button>
            </div>
        </div>
    </div>    
    `;
};

export default cardProdFavorito ;