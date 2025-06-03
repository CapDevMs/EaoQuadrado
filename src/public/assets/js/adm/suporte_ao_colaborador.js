const suporteInfo = ({ nome, descricao, data, status, img_perfil }) => {
  return `

  <div class="accordion col-sm-11" id="${status}">
    <div class="table">
      <img src="${img_perfil}" alt="Imagem do Produto">
      <div class="user-info">
        <button id="nome" onclick="toggleAccordion(this)">${nome}</button>
        <p id="texto">${descricao}</p>
        <p id="data">${data}</p>
        <p id="status">${status}</p>
      </div>
    </div>
    <div class="accordion-content" id="nonViewd">
      <hr>
      <p>${descricao}</p>
        <div class="buttons-container">
          <label class="file-container">
              <input type="file" class="file-input">
              <span class="file-label">
                <img src="../../public/assets/img/image_icon.png" alt="Ícone de Upload">
                <a>Carregar Imagem</a>
              </span>
          </label>
            
          <button class="submit-button" id="submitId">
            <a href="#">
            <img src="../../public/assets/img/send_icon2.png" alt="Ícone de Envio">
            <a>Responder</a>
          </button>
        </a>
      </div>
    </div>
  </div>

`;
};

export default suporteInfo;
