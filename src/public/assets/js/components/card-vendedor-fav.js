// componente card vendedor favorito
const cardVendFavorito = ({id_vendedor, titulo, imagem, link }) => {
    return `
    <div class="card-produto-vend col-sm-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card-body pb-1">
            <div class="row">
                <div class="col-sm-11">
                    <a href="${link}">
                        <img class="img-vendedor" src="${imagem}">
                    </a>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                    <a href="${link}" class="btn btn-visitar-loja">Visitar Loja</a>
                    <div class="container-nome-produto">
                        <h3 class="nome-loja">${titulo}</h3>
                    </div>
                    <div class ="avaliacao-vendedor">
                        <p class="text">
                            Avaliações: 
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                        </p>
                    </div>
                    <button class= "btn btn-remove col-sm-12 col-md-5" da-id="${id_vendedor}">
                        Remover dos Favoritos
                    </button>                    
            </div>
        </div>
    </div>
    `;
}

export default cardVendFavorito;