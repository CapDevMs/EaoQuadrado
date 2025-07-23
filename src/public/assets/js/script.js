console.log(`abriu Script`);
function voltarPagina() {
  window.history.back();
}

function adicionarCarrinho(idProduto) {
  let arrayLocalStorage =
    JSON.parse(localStorage.getItem("listaProdutosCarrinho")) || [];
  const produtoExistente = arrayLocalStorage.find(
    (produto) => produto.id == idProduto
  );

  if (produtoExistente) {
    produtoExistente.quantidade += 1;
    console.log("Quantidade do produto atualizada.");
  } else {
    arrayLocalStorage.push({ id: idProduto, quantidade: 1 });
    console.log("Novo produto adicionado ao carrinho.");
  }

  localStorage.setItem(
    "listaProdutosCarrinho",
    JSON.stringify(arrayLocalStorage)
  );
  let div = document.createElement("div")
  div.innerHTML =
  '<div class="toast success">Produto adicionado com sucesso!</div>'
  document.body.appendChild(div);

  showAndHideToast();
  
  console.log("Estado atual do carrinho:", arrayLocalStorage);
  console.log(`adicionado ao carrinho`);
}

function levarWhatsapp(numeroSelecionado) {
  const produtoSelecionado = listaProdutosJS.find(
    (produto) => produto.id_produto == idPego
  );
  const lojaSelecionada = listaVendedoresJS.find(
    (vendedor) => vendedor.id_loja == produtoSelecionado.id_loja
  );

  let mensagem = `
    Olá! Gostaria de fazer um pedido com os seguintes itens:`;
  mensagem += `
    -  Nome: ${produtoSelecionado.nome} / Marca: ${produtoSelecionado.marca}`;
  mensagem = mensagem.replace(" ", "%20");

  urlMensagem = `https://wa.me/${numeroSelecionado}?text=${mensagem}`;
  window.location.href = urlMensagem;
}
