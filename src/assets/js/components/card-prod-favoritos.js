// componente dos produtos favoritos
const cardProdFavorito = ({ id, titulo, imagem, preco, link }) => {   
    return `
    <div class="card-produto col-sm-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card-body pb-1">
            <div class="row">
                <div class="col-sm-11">
                    <a href="${link}">
                        <img class="img-produto" src="${imagem}">
                    </a>
                </div>
                <div class="col-sm-1 pt-2">
                    <i class="fa-regular fa-heart pointer pb-1 like" data-id="like_prod_${id}"></i>
                    <a class="shopping-link" href="${link}">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">${titulo}</h3>
                    </div>
                    <div class="container-preco-produto">
                        <h3 class="preco-produto">R$ ${preco}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="${link}" class="btn btn-comprar">Comprar</a>
                </div>
                <div class="col-sm-6">
                    <a href="${link}" class="btn btn-carrinho">Carrinho</a>
                </div>
            </div>
        </div>
    </div>
    `;
}
    
    `;

}
export default cardProdFavorito ;