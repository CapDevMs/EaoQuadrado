const cardHistoricoVendas = ({ imagem, produto, statusPedido, preco, cliente, data, quantidade, endereco, cep }) => {
  const statusClass = statusPedido.toLowerCase().replace(' ', '-');
  
  return `
    <div class="card" onclick="toggleDetails(this, event)">
      <div class="card-content">
        <div class="card-item card-item-inicio">
          <img class="img-historico" src="${imagem}">
          <p>${produto}</p>
        </div>
        <div class="card-item ml-1">
          <span class="status-pedido status-${statusClass}">${statusPedido}</span>
        </div>
        <div class="card-item">
          <p>${preco}</p>
        </div>
        <div class="card-item">
          <p>${cliente}</p>
        </div>
        <div class="card-item">
          <p>${data}</p>
        </div>
        <div class="card-item">
          <p>${quantidade}</p>
        </div>
      </div>
      
      <div class="card-details">
        <div class="infoCard">
          <p class="info-cliente-key">Produto: <span class="info-cliente-value">${produto}</span></p>
          <p class="info-cliente-key">Cliente: <span class="info-cliente-value">${cliente}</span></p>
          <p class="info-cliente-key">Endereço: <span class="info-cliente-value">${endereco}</span></p>
          <p class="info-cliente-key">CEP: <span class="info-cliente-value">${cep}</span></p>
        </div>
        
        <div class="status-action">
          <label for="statusPedido" class="info-cliente-key mr-1">Status do pedido:</label>
          <select id="statusPedido" name="statusPedido" onclick="event.stopPropagation()">
            <option value="entregue" ${statusPedido === 'Entregue' ? 'selected' : ''}>Entregue</option>
            <option value="em-andamento" ${statusPedido === 'Em Andamento' ? 'selected' : ''}>Em Andamento</option>
            <option value="cancelado" ${statusPedido === 'Cancelado' ? 'selected' : ''}>Cancelado</option>
          </select>
          <button class="btn-salvar" onclick="salvarStatus(event)">Salvar</button>
        </div>
      </div>
    </div>
  `;
};

export default cardHistoricoVendas;