const filtroComponent = (categoria) => {
  return `
            <div class="filtroCategoria col-sm-12">
                <h2 class="col-sm-12 mb-1">Marcas</h2>
                <input class="searchCategoria col-sm-12 mb-1" type="search" name="" id="" placeholder="Buscar Produto">
                <h2 class="price mb-1">Preço</h2>
                <div class="priceCategoria col-sm-12 row">
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="min">Minimo</label>
                        <input class="numberInput" type="number" id="min">
                    </div>
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="max">Maximo</label>
                        <input class="numberInput" type="number" id="max">
                    </div> 
                </div>
                <div class="col-sm-12 row">
                    <h2 class="categoriasFiltro col-sm-12 mb-1">Categorias</h2>
                    <a class="categoriasFiltro" href="#">${categoria[0]}</a>
                    <a class="categoriasFiltro" href="#">${categoria[1]}</a>
                    <a class="categoriasFiltro" href="#">${categoria[2]}</a>
                    <a class="categoriasFiltro" href="#">${categoria[3]}</a>
                    <a class="categoriasFiltro" href="#">${categoria[4]}</a>
                    <a class="categoriasFiltro" href="#">${categoria[5]}</a>
                </div>
                <div class="vendedoresAvaliation">
                    <h2>Avaliação Dos Vendedores</h2>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <p class="col-sm-3">Todos</p>
                    </div>
                    <div class="inputAvaliation row">
                        <label class="checkbox-radio col-sm-2">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-7">
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
                        <div class="starsFiltro col-sm-7">
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
                        <div class="starsFiltro col-sm-7">
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
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <div class="starsFiltro col-sm-7">
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
                        <div class="starsFiltro col-sm-7">
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
