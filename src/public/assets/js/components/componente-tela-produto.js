const componenteTelaProduto = ({ id_produto,nomeProduto,precoProduto,descricao,nomeLoja }) => {
    return `
    <div id = "${id_produto} " class="container-produto col-lg-10 col-sm-11">
        <div class="galeria-container col-lg-8 col-sm-12"></div>
            <div class="desc-produto col-lg-5 col-sm-12">
                <p class="nome-produto">${nomeProduto}</p>
                <h1 class="preco">R$ ${precoProduto}</h1>
                <div class="contador-container"></div>
                <div class="comprar col-lg-8 col-sm-10">
                    <div class="btn-comprar"><a onclick = "adicionarCarrinho(${id_produto})">Comprar</a></div>
                    <div class="icons-comprar">
                        <img id="icone-carrinho" class="icon cursor" src="assets/img/carrinho-tela-produto.svg" onclick = "adicionarCarrinho(${id_produto})">
                        <div></div>
            </div>
            </div>
                <div class="fieldset-loja"></div>
            </div>
            </div>
                <div class="line col-lg-10"></div>
                <div class="descricao col-lg-10">
                    <p class="titulo-descricao">descrição do produto </p>
                    <p class="conteudo-descricao"">
                        ${descricao}
                    </p>
                </div>



                <div class="container-recomendar col-lg-10 ">
                <div class="produto-recomendar row"></div>
            </div>
    </div>
    `;
}

export default componenteTelaProduto;
    // <div class="grid-topico">
    //     <div class="topico"></div>
    //     <a class="text-topico">Mais itens da ${nomeLoja}</a>
    // </div>