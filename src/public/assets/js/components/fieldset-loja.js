const fieldsetLoja = ({ image, nomeLoja, linkLoja,linkFavorito, linkWpp }) => {
    return `
    <div class="lojaFieldset">
        
            <fieldset class="loja col-sm-9 col-lg-10">
                <a class="linkagem-loja col-sm-3" href="${linkLoja}">
                    <img class='imagem-loja'src="${image}">
                </a>
                <a class="linkagem-loja col-xl-6 col-lg-5" href="${linkLoja}">
                    <p class="texto-loja"><span style="color: #16A18E;">Loja</span> ${nomeLoja}</p>
                </a>
                
                <div class="icons-loja col-sm-2">
                    <a class="" href="${linkFavorito}">
                        <img src="assets/img/coracao-tela-produto.svg" id="loja-coracao">
                    </a>
                    <a class="" href="${linkWpp}">
                        <img src="assets/img/tela-produtos/Whatsapp.png" id="loja-whats">
                    </a>
                </div>
            </fieldset>
        
    </div>
    `;
}

export default fieldsetLoja;