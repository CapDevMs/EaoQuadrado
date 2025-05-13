const cardHistoricoVendas = ({ imagem, produto, statusPedido, preco, valorTotal, cliente, data, quantidade, endereco, cidade, cep }) => {
  const statusClass = statusPedido.toLowerCase().replace(' ', '-');
  
  return `
    <div class="card" onclick="toggleDetails(this, event)">
      <div class="card-content">
        <div class="card-item card-item-inicio">
          <div class="card-item-img">
            <img class="img-historico" src="${imagem}">
          </div>
          <p class="card-item-p">${produto}</p>
        </div>
        <div class="card-item ml-1">
          <span class="status-pedido status-${statusClass}">${statusPedido}</span>
        </div>
        <div class="card-item">
          <p id="preco-card">${preco}</p>
        </div>
        <div class="card-item">
          <p id="cliente-card">${cliente}</p>
        </div>
        <div class="card-item ml-1">
          <p id="data-card">${data}</p>
        </div>
        <div class="card-item">
          <p id="quant-card">${quantidade}</p>
        </div>
      </div>

      <div class="card-content-mobile">
        <div class="card-item card-item-inicio">
          <div class="card-item-img">
            <img class="img-historico" src="${imagem}">
          </div>
          <p class="card-item-p">${produto}</p>
        </div>
        <div class="card-item ml-1">
          <span class="status-pedido status-${statusClass}">${statusPedido}</span>
        </div>
        <div class="card-item">
          <p id="preco-card"><b>Preço:</b> ${preco}</p>
        </div>
        <div class="card-item">
          <p id="cliente-card"><b>Cliente:</b> ${cliente}</p>
        </div>
        <div class="card-item ml-1">
          <p id="data-card"><b>Data da Compra:</b> ${data}</p>
        </div>
        <div class="card-item">
          <p id="quant-card"><b>Quantidade:</b> ${quantidade}</p>
        </div>
      </div>
      
      <div class="card-details">
        <div class="infoCard">
          <div class="info-produto">
            <p class="info-cliente-key">Produto: <span class="info-cliente-value">${produto}</span></p>
            <p class="info-cliente-key">Quantidade: <span class="info-cliente-value">${quantidade}</span></p>
            <p class="info-cliente-key">Preço: <span class="info-cliente-value">${preco}</span></p>
            <p class="info-cliente-key">Data da Compra: <span class="info-cliente-value">${data}</span></p>
            <p class="info-cliente-key">Total: <span class="info-cliente-value">${valorTotal}</span></p>
          </div>
          <div class="info-cliente">
            <p class="info-cliente-key">Cliente: <span class="info-cliente-value">${cliente}</span></p>
            <p class="info-cliente-key">Endereço: <span class="info-cliente-value">${endereco}</span></p>
            <p class="info-cliente-key">Cidade: <span class="info-cliente-value">${cidade}</span></p>
            <p class="info-cliente-key">CEP: <span class="info-cliente-value">${cep}</span></p>
          </div>
        </div>
        
        <div class="status-action">
          <label for="statusPedido" class="info-cliente-key" id="status-pedido-label">Status do pedido:</label>
          <select class="statusPedido" name="statusPedido" onclick="event.stopPropagation()">
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