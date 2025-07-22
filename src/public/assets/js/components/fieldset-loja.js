const fieldsetLoja = ({ image, nomeLoja, linkLoja }) => {
    return `
    <div class="lojaFieldset">
            <fieldset class="loja col-xl-9 col-lg-10 col-sm-11">
                <a class="linkagem-loja col-lg-3 col-sm-4" href="${linkLoja}">
                    <img class='imagem-loja'src="${image}">
                </a>
                <a class="linkagem-loja col-xl-6 col-lg-5 col-sm-6" href="${linkLoja}">
                    <p class="texto-loja"><span style="color: #16A18E;">Loja</span> ${nomeLoja}</p>
                </a>
                
                <div class="icons-loja col-lg-2">
                        <div></div>
                        <img src="assets/img/tela-produtos/Whatsapp.png" id="loja-whats">
                    
                </div>
            </fieldset>
        
    </div>
    `;
}

export default fieldsetLoja;