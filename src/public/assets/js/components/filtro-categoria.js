const filtroComponent = (categoria) => {
  return `
            <div class="filtroCategoria col-sm-12 ml-3">
                <h2 class="col-sm-12 mb-1">Marcas</h2>
                <input class="searchCategoria col-sm-12 mb-1" type="search" name="" id="" placeholder="Buscar Produto">
                <h2 class="price mb-1">Preço</h2>
                <div class="priceCategoria col-sm-12 row">
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="min">Minimo</label>
                        <input class="numberInput" type="number" id=min">
                    </div>
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="max">Maximo</label>
                        <input class="numberInput" type="number" id="max">
                    </div> 
                </div>

                <div class="row">
                    <h3 class="categoriasFiltro mb-1">Categorias</h3>
                    <a class="categoriasFiltro" href="#">${categoria}</a>
                    <a class="categoriasFiltro" href="#"${categoria}</a>
                    <a class="categoriasFiltro" href="#">${categoria}s</a>
                    <a class="categoriasFiltro" href="#">${categoria}</a>
                    <a class="categoriasFiltro" href="#">${categoria}</a>
                    <a class="categoriasFiltro" href="#">${categoria}</a>
                </div>

                <div class="vendedoresAvaliation">
                    <h2>Avaliação Dos Vendedores</h2>
                    <div class="inputTodos row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <p class="col-sm-10">Todos</p>
                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-9">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                        </div>

                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>

                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-10">
                            <i class="fa fa-star icone-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>                            
                        </div>

                    </div>
                </div>
                
                
            </div>
    `;
};

export default filtroComponent;
