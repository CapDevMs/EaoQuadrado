const banner_vendedor = ({ titulo, email, endereco, telefone }) => {
    return`
    <div class="container">
    <div class="row">
        <div class="col-sm-12 pb-3">
            <img src="<?= get_base_url(); ?>assets/img/Banner_loja.png" class="img banner_loja" alt="Banner da Loja">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 pb-4">
            <div class="card position-relative"> <!-- necessário para que o ícone seja posicionado em relação ao card -->
                <div class="card-body ptb-2">
                    <div class="row align-items-center">
                        <!-- Avatar -->
                        <div class="col-2 text-center">
                            <div class="avatar">
                                <img src="../assets/img/cliente/studio_center.svg" alt="imagem loja" class="figure-img img-fluid">
                            </div>
                        </div>

                        <!-- Informações da loja -->
                        <div class="col-7">
                            <h2>${titulo}</h2>
                            <a href="mailto:studiocenterpy@gmail.com">${email}</a>
                            <p>${endereco}</p>
                            <p>Campo Grande - MS</p>
                        </div>

                        <!-- Avaliações e WhatsApp -->
                        <div class="col-3 text-right">
                            <p class="mr-1">Avaliações: </p>
                            <p class="card_estrela_texto estrela_35">★★★★★</p>
                         <img class="whatsapp" src="../assets/img/icons/whatsapp.svg" alt="">
                            <a target="_blank" href="https://wa.me/556734377000">${telefone}</a>
                        </div>
                    </div>
                </div>

                <!-- Ícone de coração no canto inferior direito -->
                <div class="position-icone-favoritar mb-2 mr-4 pr-2">
                    <i class="fa-regular fa-heart icone-favoritar" alt="Favoritar" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>
`;
}

document.addEventListener('DOMContentLoaded', function() {
    const iconeFavoritar = document.getElementById('icone-favoritar');
    if (iconeFavoritar) {
        iconeFavoritar.addEventListener('click', function() {
            this.classList.toggle('favoritado');
            this.classList.toggle('fa-regular');
            this.classList.toggle('fa-solid');
        });
    } else {
        console.error('Elemento com ID "icone-favoritar" não encontrado.');
    }
});
export default banner_vendedor;