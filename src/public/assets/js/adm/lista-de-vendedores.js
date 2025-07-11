const listaVendedores = ({ imagem, email, categorias, whatsapp}) => {
    return `
    <div class="col-sm-11 ml-1">
                        <div class="card-vend">
                            <div class="card-body">
                                <div class="container mtb-1">
                                    <div class="row inner-container">
                                        <div class="cont-1 col-sm-12 col-md-2 col-xl-2">
                                            <div class="avatar">
                                                <img src="${imagem}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="cont-2 col-sm-12 col-md-6 col-xl-7">
                                            <div class="name col-sm-12 col-md-2">
                                                <h2>
                                                    Studio Center
                                                </h2>
                                            </div>
                                            <div class="col-sm-12 ">
                                                <a class="email" href="mailto: ${email}" class="text">${email}</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <p class="text mt-1">Categorias: ${categorias}</p>
                                            </div>
                                            <div class="col-md-hidden col-sm-12 pb-1"></div>
                                        </div>
                                        <div class="cont-3 col-sm-12 col-md-4 col-xl-3">
                                            <div class="row">
                                                <div class="col-sm-12 stars">
                                                    <p class="text-star">
                                                        Avaliações: 
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                        <i class="fa-regular fa-star icone-star"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row pl-1">
                                                <div class="col-sm-10 pt-1 contato-container">
                                                    <img class="whatsapp" src="../../assets/img/icons/whatsapp.svg" alt="whatsapp">
                                                    <a target="_blank" class="contato" href="https://wa.me/556734377000">(67) ${whatsapp}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
    `
}

export default listaVendedores;