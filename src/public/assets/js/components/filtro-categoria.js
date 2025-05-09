const filtroComponent = () => {
  return `
    <div class="content-container">
                <div class="sidebar">
                    <div class="marcas_preco">
                        <h1 class="marcas">Marcas</h1>
                        <div class="search-group">
                            <input class="search-bar-marcas" placeholder="Buscar Produtos">
                            <button class="search-marca" alt="Pesquisar_Marca">
                            </button>
                        </div>
                        <h1 class="preco">Preço</h1>
                        <div class="price-range-container">
                            <div class="price-input-group">
                                <label for="minimo" class="label-min_max">Mínimo</label>
                                <input type="text" id="minimo" class="min_max">
                            </div>
                            <div class="price-input-group">
                                <label for="maximo" class="label-min_max">Máximo</label>
                                <input type="text" id="maximo" class="min_max">
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__categoria">
                        <div class="sidebar__navigation">
                            <h3>Categorias</h3>
                            <a href="">Celulares</a>
                            <a href="">Computadores</a>
                            <a href="">Smartwatches</a>
                            <a href="">Câmera</a>
                            <a href="">Fones de Ouvido</a>
                            <a href="">Games</a>
                        </div>
                    </div>

                    <!-- Avaliações -->
                    <h1 class="titulo">Avaliação dos Vendedores</h1>
                    <div class="checkbox-container">        
                        <label for="tudo"><input type="checkbox" name="tudo" id="tudo">Tudo</label>
                        <label for="star5">
                            <input type="checkbox" name="5-star" id="star5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </label>
                        <label for="star4">
                        <input type="checkbox" name="4-star" id="star4">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </label>   
                        <label for="star3">
                            <input type="checkbox" name="3-star" id="star3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </label>   
                        <label for="star2">
                            <input type="checkbox" name="2-star" id="star2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </label>                    
                        <label for="star1">
                            <input type="checkbox" name="1-star" id="star1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    `;
};

export default filtroComponent;
