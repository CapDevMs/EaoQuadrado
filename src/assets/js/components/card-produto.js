const cardProduto = ({ id, titulo, imagem, preco }) => {
    return `
    <div class="col-3 col-md-6 col-sm-12">
        <div class="container">
            <div class="card-produto">
                <div class="card-body pl-1">
                    <div class="container-foto pt-1">
                        <img class="img-produto" src="${imagem}">
                    </div>
                    <div class="container-coracao-carrinho">
                        <i class="fa-regular fa-heart pointer" id="like_prod_${id}"></i>
                        <i class="fa-solid fa-cart-shopping"></i>
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
    </div>
    `;
}

export default cardProduto;