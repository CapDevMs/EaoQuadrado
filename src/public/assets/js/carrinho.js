let arrayLocalStorage = JSON.parse(localStorage.getItem("listaProdutosCarrinho")) || [];


function LimparCarrinho() {
    localStorage.removeItem('listaProdutosCarrinho')
}


function ExibirProdutos() {
    if (arrayLocalStorage.length == 0) {
        console.log('Carrinho vazio');
        document.querySelector('painelProdutos').innerHTML += `
        <h2 style="margin:auto;max-width:max-content;color:var(--cor-botao-primario);">Carrinho Vazio</h2>
        `;
        arrayLocalStorage = [{ id: 1, quantidade: 1 }, { id: 2, quantidade: 2 },{id:3,quantidade:3},{id:4,quantidade:4}];
        let novoCarrinhoString = JSON.stringify(arrayLocalStorage);
        localStorage.setItem("listaProdutosCarrinho", novoCarrinhoString);
    
    } else {
        document.querySelector('painelProdutos').innerHTML = ``

        arrayLocalStorage.forEach(product => {
            
            let id = `${product.id}`
            let imagem = `asus_notebook.png`
            let nome = `Asus notebok ${product.id}`;
            let preco = `R$ 500,00`;
            let quantidade = `${product.quantidade}`

            document.querySelector('painelProdutos').innerHTML += `
        
                    <produto class="produto" id = '${id}'>
                     <div class='col-2 baseBlocoIcone'>
                         <img src="src/public/assets/img/${imagem}" alt="foto-produto" class='imagem'>
                         </div>
        
                     <div class="col-md-9 col-12 blocoCentralProduto flexColuna-sr">
        
                     <div class="col-md-6 col-12 flexLinha-nr flexbetween-nr blocoNome">
        
                             <div class='col-md-6 col-12 baseBlocoProduto'>
                             <h4 class='miniBloco1 '>Nome</h4>
                                 <texto class='miniBloco2'><span class="redutor nomeGrande">${nome}</span></texto>
                                 </div>
                                 
                             <div class='col-6 sumidão baseBlocoProduto'>
                             <h4 class='miniBloco1 '>Preço</h4>
                                 <preco class='miniBloco2'>${preco}</preco>
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
    const produtosCarrinho = document.querySelectorAll('produto');

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
            console.log(product)
            console.log(removeProduto)
          if (product.id == removeProduto){
              arrayLocalStorage.splice(cont,1)
              console.log('Item deletado');
          } else {
            cont+= 1;
          }
        });
        let novoCarrinhoString = JSON.stringify(arrayLocalStorage);
        localStorage.setItem("listaProdutosCarrinho", novoCarrinhoString);

    produtoRemovido.closest('produto').remove();
    console.log('localStorage atualizado:', localStorage.getItem("listaProdutosCarrinho"));
    ExibirProdutos()
    updateTotal();

};

updateTotal();

ExibirProdutos();
const contadores = document.querySelectorAll('.counter');
contadores.forEach(contador => {
    contador.addEventListener('input', updateTotal);
});
