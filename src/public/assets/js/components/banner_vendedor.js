const banner_vendedor = ({ titulo, email, endereco, telefone }) => {
    return`
    <div class="card">
    <div class="card-body justify-content-center ptb-2">
        <div class="col-2 justify-content-center">
            <div class="avatar">
                <img src="../assets/img/cliente/studio_center.svg" alt="" class="figure-img img-fluid">
            </div>
        </div>
        <div class="col-7">
            <div class="row">
                <div class="col-12">
                    <h2>${titulo}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="mailto:studiocenterpy@gmail.com">${email}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>${endereco}</p>
                    <p>Campo Grande - MS</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12 text-right stars">
                    <p class="mr-1">Avaliações: </p>
                    <p class="card_estrela_texto estrela_35">★★★★★</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right">
                    <img class="whatsapp" src="../assets/img/icons/whatsapp.svg" alt="">
                    <a target="_blank" href="https://wa.me/556734377000">${telefone}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 icone float-right">
                    <img src="../assets/img/icons/coracao.svg" alt="" class="icone_selecionado">
                </div>
            </div>
        </div>
    </div>
    </div>`;
}

document.getElementById('btn-favoritar').addEventListener('click', function () {
    this.classList.toggle('favoritado');
    this.classList.toggle('fa-regular');
    this.classList.toggle('fa-solid');
  });
  
export default banner_vendedor;