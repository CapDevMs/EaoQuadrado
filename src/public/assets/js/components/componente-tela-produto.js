const componenteTelaProduto = ({ nomeProduto,precoProduto,descricao,nomeLoja }) => {
    return `
    <div class="container-produto col-lg-10 col-sm-11">
        <div class="galeria-container col-lg-8 col-sm-12"></div>
            <div class="desc-produto col-lg-5 col-sm-12">
                <p class="nome-produto">${nomeProduto}</p>
                <h1 class="preco">R$ ${precoProduto}</h1>
                <div class="contador-container"></div>
                <div class="comprar col-lg-8 col-sm-10">
                    <div class="btn-comprar"><a>Comprar</a></div>
                    <div class="icons-comprar">
                        <img id="icone-carrinho" class="icon cursor" src="assets/img/carrinho-tela-produto.svg" data-imagem-alternativa="assets/img/tela-produtos/carrinhopreenchido.svg value="gucci_bolsa_intense.png|Gucci intense|400,00">
                        <img id="icone-favorito" class="favoritos cursor" src="assets/img/coracao-tela-produto.svg"data-imagem-alternativa="assets/img/tela-produtos/coracaopreenchido.svg">
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

                <div class="grid-topico">
                <div class="topico"></div>
                    <a class="text-topico">Mais itens da ${nomeLoja}</a>
                </div>

                <div class="container-recomendar col-lg-10 ">
                <div class="produto-recomendar row"></div>
            </div>
    </div>
    `;
}

export default componenteTelaProduto;