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

    const dadosLocalStorage = localStorage.getItem('listaProdutosCarrinho');
    const arrayDeDicionarios = JSON.parse(dadosLocalStorage);

    fetch('src/App/Cliente/CarrinhoController.php',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(arrayDeDicionarios)
    })
    .then(Response => Response.JSON())
    .then(data => {
        
    })
}