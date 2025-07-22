function voltarPagina() {
    window.history.back();
};

function adicionarCarrinho(idProduto) {
    let arrayLocalStorage = JSON.parse(localStorage.getItem("listaProdutosCarrinho")) || [];
    const produtoExistente = arrayLocalStorage.find(produto => produto.id == idProduto);

    if (produtoExistente) {
        produtoExistente.quantidade += 1;
        console.log("Quantidade do produto atualizada.");

    } else {
        arrayLocalStorage.push({ id: idProduto, quantidade: 1 });
        console.log("Novo produto adicionado ao carrinho.");
    }

    localStorage.setItem("listaProdutosCarrinho", JSON.stringify(arrayLocalStorage));
    console.log("Estado atual do carrinho:", arrayLocalStorage);
    console.log(`adicionado ao carrinho`)
}