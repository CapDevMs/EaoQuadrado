const cardHistoricoVendas = ({ imagem, produto, statusPedido, preco, cliente, data, quantidade, endereco, cep }) => {
  return `
  <div class="card" onclick="toggleDetails(this, event)">
    <div class="card-item card-item-inicio"  >
      <img class="img-historico" src="${imagem}">
      <p class="p-50">${produto}</p>
    </div>
    <div class="card-item"  >
      <p>${statusPedido}</p>
    </div>
    <div class="card-item" >
      <p>${preco}</p>
    </div>
    <div class="card-item" >
      <p>${cliente}</p>
    </div>
    <div class="card-item" >
      <p>${data}</p>
    </div>
    <div class="card-item" >
      <p>${quantidade}</p>
    </div>
    <div class="card-details">
      <div class="infoCard">
        <p class="info-cliente-key">Cliente: <span class="info-cliente-value">${cliente}</span> </p>
        <p class="info-cliente-key">Endereço: <span class="info-cliente-value"> ${endereco}</span> </p>
          <p class="info-cliente-key">CEP: <span class="info-cliente-value">${cep}</span></p>
      </div> 
      <label for="statusPedido" class="info-cliente-key">Status de Pedido:</label>
      <select id="statusPedido" name="statusPedido" onclick="event.stopPropagation()">
        <option value="entregue">Entregue</option>
        <option value="troca">Troca</option>
        <option value="cancelamento">Cancelamento</option>
      </select>
      <button class="btn-salvar" onclick="salvarStatus(event)">Salvar</button>
    </div>
  </div> 
  
`;

}

export default cardHistoricoVendas;