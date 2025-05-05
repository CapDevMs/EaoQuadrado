const contadorQuantidade = () => {
    return `
    <div id="botao_qtd">
        <button class="quantidade" id="menos">-</button>
        <input type="text" class="quantidade" id="quantidade" value="1">
        <button class="quantidade" id="mais">+</button>
    </div>
    `;
}

export default contadorQuantidade;
