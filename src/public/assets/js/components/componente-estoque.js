const componenteEstoque = ({ imagem,nome,preco,imagem2 }) => {
    return`<div class="items">
    <img class="img-item" src="${imagem}" alt="erro">

    <h2 class="text-items">${nome}</h3>

    <div id="botao_qtd">
        <button class="quantidade" id="menos">-</button>
        <input type="text" class="quantidade" id="quantidade">
        <button class="quantidade" id="mais">+</button>
    </div>

    <div>
        <h3 class="text-items">R$ ${preco}</h3>
    </div>

    <div>
        <input type="radio">
    </div>
    
    <img id="icone_edicao" src="${imagem2}" alt="">
</div>`;
}

export default componenteEstoque;