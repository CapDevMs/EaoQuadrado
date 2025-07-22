let arrayLocalStorage = JSON.parse(localStorage.getItem("listaProdutosCarrinho")) || [];

function LimparCarrinho() {
    localStorage.removeItem('listaProdutosCarrinho');
}

function ExibirProdutos() {
    if (arrayLocalStorage.length == 0) {
        document.querySelector('painelProdutos').innerHTML += `
        <h2 style="margin:auto;max-width:max-content;color:var(--cor-botao-primario);">Carrinho Vazio</h2>
        `;
    } else {
        document.querySelector('painelProdutos').innerHTML = ``

        arrayLocalStorage.forEach(product => {
            
            const produtoSelecionado = listaProdutosJS.find(produto => produto.id_produto == product.id)

            let id = `${produtoSelecionado.id_produto}`
            let imagem = `${produtoSelecionado.imagens}`
            let nome = `${produtoSelecionado.nome}`;
            let preco = `${produtoSelecionado.preco}`;
            let quantidade = `${product.quantidade}`

            document.querySelector('painelProdutos').innerHTML += `
        
                    <produto class="produto" id = '${id}' onclick = "selecionarProduto(${id})">
                     <div class='col-2 baseBlocoIcone'>
                         <img src="${imagem}" alt="foto-produto" class='imagem'>
                         </div>
        
                     <div class="col-md-9 col-12 blocoCentralProduto flexColuna-sr">
        
                     <div class="col-md-6 col-12 flexLinha-nr flexbetween-nr blocoNome">
        
                             <div class='col-md-6 col-12 baseBlocoProduto'>
                             <h4 class='miniBloco1 '>Nome</h4>
                                 <texto class='miniBloco2'><span class="redutor nomeGrande">${nome}</span></texto>
                                 </div>
                                 
                             <div class='col-6 sumidão baseBlocoProduto'>
                             <h4 class='miniBloco1 '>Preço</h4>
                                 <preco class='miniBloco2'>R$ ${preco}</preco>
                             </div>
                             
                         </div>
                         
                         <div class="col-md-6 col-12 flexLinha-nr flexbetween-nr">
                         
                         <div class='col-6 baseBlocoProduto'>
                         <h4 class='miniBloco1'>Quantidade</h4>
                         <texto class='miniBloco2'><input type="Number" class='counter' min='0' value=${quantidade}></texto>
                         </div>
                         
                         <div class='col-6 baseBlocoProduto'>
                         <h4 class='miniBloco1'>Subtotal</h4>
                         <subtotal class='miniBloco2'>...</subtotal>
                             </div>
        
                             </div>
        
                             </div>
                             
                             
                     <btRemover class="col-1 baseBlocoIcone">
                         <img onclick="removeProdutoCarrinho(${id})" class='redutor icone removeProductButton' src="src/public/assets/img/icons/Icon_lixeira.png" alt="icone">
                     </btRemover>
                     </produto>
        
                    `;

            updateTotal();
        });

    }

};




document.querySelectorAll('.counter').forEach(input => {
    input.addEventListener('input', updateTotal);
});

function updateTotal() {
    let valorTotal = 0;
    const produtosCarrinho = document.querySelectorAll('.selecionado');

    produtosCarrinho.forEach(product => {

        const precoProduto = product.querySelector('preco').innerText.replace('R$', '').replace(',', '.').replace(' ', '');

        const quantidadeProduto = product.querySelector('.counter').value;

        const subTotal = parseFloat(precoProduto) * parseInt(quantidadeProduto);

        product.querySelector('subtotal').innerText = `R$ ${subTotal.toFixed(2).replace('.', ',')}`;

        valorTotal += subTotal;
    });

    document.querySelector('totalCompraSubtotal').innerText = 'Total: R$ ' + valorTotal.toFixed(2).replace('.', ',');
    document.querySelector('totalCompraTotal').innerText = 'Total: R$ ' + valorTotal.toFixed(2).replace('.', ',');
}

let classeComumContadores = document.querySelectorAll('.counter')


function removeProdutoCarrinho(removeProduto) {

    const produtoRemovido = document.getElementById(removeProduto);
    let cont = 0
        arrayLocalStorage.forEach(product => {
          if (product.id == removeProduto){
              arrayLocalStorage.splice(cont,1)
          } else {
            cont+= 1;
          }
        });
        let novoCarrinhoString = JSON.stringify(arrayLocalStorage);
        localStorage.setItem("listaProdutosCarrinho", novoCarrinhoString);

    produtoRemovido.closest('produto').remove();
    ExibirProdutos()
    updateTotal();
};

updateTotal();

ExibirProdutos();
const contadores = document.querySelectorAll('.counter');
contadores.forEach(contador => {
    contador.addEventListener('input', updateTotal);
});

function selecionarProduto(id) {

    let produto = document.getElementById(`${id}`);
    
    if (produto.classList.contains('selecionado')){
        produto.classList.remove('selecionado')
    } else {
        produto.classList.add('selecionado')
    }

    updateTotal()
};

function levarWhatsapp(){
    let mensagem = `
    Olá! Gostaria de fazer um pedido com os seguintes itens:
    
    `;

    let produtosSelecionados = document.querySelectorAll('.selecionado')

    if (produtosSelecionados.length === 0){
        return alert(`Escolha um produto`)
    } else {
        
            produtosSelecionados.forEach(produtoSelecionado => {
        
                removeProdutoCarrinho(produtoSelecionado.id)
                let productoAchado = listaProdutosJS.find(produto => produto.id_produto == produtoSelecionado.id)
                let contador  = produtoSelecionado.querySelector('.counter')
                
                mensagem += `
                -  Nome: ${productoAchado.nome} / Marca: ${productoAchado.marca} / Loja: ${productoAchado.id_loja} / Quantidade: ${contador.value}`

                mensagem = mensagem.replace(' ' , '%20');
                urlMensagem = `https://wa.me/${5567984665576}?text=${mensagem}`;
                
                window.location.href = urlMensagem;
                
            })
            console.log(mensagem)
    }
};
