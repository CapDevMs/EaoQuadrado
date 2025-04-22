const cardHistoricoVendas = ({imagem, produto, statusPedido, preco, cliente, endereco, data, cep, quantidade}) => {
    return `
    <div class="card" onclick="toggleDetails(this)">
            <div class="cardItems cardItems-inicio"  >
                <img class="img-historico" 
                    src="${imagem}">
                <p class="p-50">${produto}</p>
            </div>
            <div class="cardItems"  >
                <p class="p-40">${statusPedido}</p>
            </div>
            <div class="cardItems" >
                <p class="p-30">${preco}</p>
            </div>
            <div class="cardItems" >
                <p class="p-20">${cliente}</p>
            </div>
            <div class="cardItems" >
                <p class="p-data">${data}</p>
            </div>
            <div class="cardItems" >
                <p class="p-10">${quantidade}</p>
            </div>
            <div class="card-details">
                <div class="elementCard">
                <p class="clienteP">Cliente: <span class="nomeP">${cliente}</span> </p>
                <p class="clienteP">Endereço: <span class="nomeP"> ${endereco}</span> </p>
                <p class="clienteP">Data: <span class="nomeP">${data}</span></p>
                <p class="clienteP">CEP: <span class="nomeP">${cep}</span></p>
                </div> 

                // <label for="statusPedido">Status de Pedido</label>
                //         <select id="statusPedido" name="statusPedido">
                //             <option value="entregue">Entregue</option>
                //             <option value="opcao2">Troca</option>
                //             <option value="opcao3">Cancelamento</option>
                //         </select>
                // <span class="clienteP">${data}</span>
                // </div>
                
        </div>
    `;

}

export default cardHistoricoVendas;