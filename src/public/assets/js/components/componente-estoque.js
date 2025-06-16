const componenteEstoque = ({ imagem,nome,preco,imagem2 }) => {
    return`<div class="items">
    <img class="img-item" src="${imagem}" alt="erro">

    <h2 class="text-items">${nome}</h3>

    <contadorBtn></contadorBtn>

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