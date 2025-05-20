const componenteComentario = ({ cliente, comentario }) => {
    return `
    <div class="container-comentarios">
        <div class="comentario pl-2 pb-1 pt-1">
            <div class= "avaliacao-content">
                <img src="assets/img/icone_perfil.png" class="foto" alt="alguem" id="icon-cliente">
                <h1 class="nome-cliente pl-1">${cliente}</h1>
                <img src="assets/img/Four Star.png" class="estrelinha4 pr-1" alt="estrela4" id="estrela-comentario">
            </div>
            <p class="comentario-cliente">${comentario}</p>
            
        </div>
    </div>
    `;

}

export default componenteComentario;