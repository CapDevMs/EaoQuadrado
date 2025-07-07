function voltarPagina() {
    window.history.back();
};

function adicionarAoCarrinho(idProduto) {
    let arrayLocalStorage = JSON.parse(localStorage.getItem("listaProdutosCarrinho")) || [];
    let item = {id:idProduto,quantidade:1};
    
    arrayLocalStorage.push(item);
    localStorage.setItem("listaProdutosCarrinho", JSON.stringify(arrayLocalStorage));
};