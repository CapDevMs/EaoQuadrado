const filtroComponent = (categorias) => {
  const filtro =  `
            <div class="filtroCategoria col-sm-12">
                <h2 class="col-sm-12 mb-1">Marcas</h2>
                <form id="buscaProduto">
                    <input class="searchCategoria col-sm-12 mb-1" type="search" name="BuscarProduto" id="searchProduto" placeholder="Buscar Produto">
                </form>
                <h2 class="price mb-1">Preço</h2>
                <form class="priceCategoria col-sm-12 row" id="filtroPrice">
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="min">Minimo</label>
                        <input class="numberInput" type="number" step="0.01" id="min">
                    </div>
                    <div class="mediaCategoria col-sm-12 col-lg-6 mb-1">
                        <label for="max">Maximo</label>
                        <input class="numberInput" type="number" step="0.01" id="max">
                    </div> 
                    <button class="buttonAplicar" type="submit">Aplicar</button>
                </form>
                    <h2 class="price col-sm-12 mb-1">Categorias</h2>
                    <div class="col-sm-12 row">`

    
    let array = []
    categorias.forEach(categoria => {
        array.push(`<button data-id="${categoria['id_categoria']}" class="categoriasFiltro"> ${categoria['nome']} </button>`)
    })
    
    return filtro + array.join("") + "</div>";
};

export default filtroComponent;



// const filtro2 = `</div>
    //              <div class="vendedoresAvaliation">
    //                 <h2>Avaliação Dos Vendedores</h2>
    //                 <div class="inputAvaliation row">
    //                     <label class="checkbox-radio col-sm-2">
    //                         <input type="checkbox">
    //                         <span class="checkmark"></span>
    //                     </label>
    //                     <p class="col-sm-3">Todos</p>
    //                 </div>
    //                 <div class="inputAvaliation row">
    //                     <label class="checkbox-radio col-sm-2">
    //                         <input type="checkbox">
    //                         <span class="checkmark"></span>
    //                     </label>
    //                     <div class="starsFiltro col-sm-7">
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                     </div>
    //                 </div>
    //                 <div class="inputAvaliation row">
    //                     <label class="checkbox-radio col-sm-2">
    //                         <input type="checkbox">
    //                         <span class="checkmark"></span>
    //                     </label>
    //                     <div class="starsFiltro col-sm-7">
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                     </div>
    //                 </div>
    //                 <div class="inputAvaliation row">
    //                     <label class="checkbox-radio col-sm-2">
    //                         <input type="checkbox">
    //                         <span class="checkmark"></span>
    //                     </label>
    //                     <div class="starsFiltro col-sm-7">
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                     </div>
    //                 </div>
    //                 <div class="inputAvaliation row">
    //                     <label class="checkbox-radio col-sm-2">
    //                         <input type="checkbox">
    //                         <input type="checkbox">
    //                         <span class="checkmark"></span>
    //                     </label>
    //                     <div class="starsFiltro col-sm-7">
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                     </div>
    //                 </div>
    //                 <div class="inputAvaliation row">
    //                     <label class="checkbox-radio col-sm-2">
    //                         <input type="checkbox">
    //                         <span class="checkmark"></span>
    //                     </label>
    //                     <div class="starsFiltro col-sm-7">
    //                         <i class="fa fa-star icone-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                         <i class="fa-regular fa-star"></i>
    //                         <i class="fa-regular fa-star"></i>                            
    //                     </div>
    //                 </div>
    //             </div>
    //         </div>
    // `;