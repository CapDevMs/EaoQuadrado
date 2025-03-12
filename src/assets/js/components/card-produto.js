const cardProduto = ({ id, titulo, imagem, preco }) => {
    return `
    <div class="card-produto mb-3 col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card-body ">
            <div class="row">
                <div class="pt-2 col-11 ratio ratio-1x1">
                    <img class="img-produto" src="${imagem}">
                </div>
                <div class="pt-2 col-1">
                    <i class="fa-regular fa-heart pointer pb-1" id="like_prod_${id}"></i>
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
            <div class="row pt-3 pb-1 pl-1">
                <div class="container-nome-produto">
                    <h3 class="nome-produto">${titulo}</h3>
                </div>
                <div class="container-preco-produto">
                    <h3 class="preco-produto">R$ ${preco}</h3>
                </div>
            </div
        </div>
    </div>
    `;
}

export default cardProduto;