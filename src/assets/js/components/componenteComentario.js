const componenteComentario = ({ cliente, comentario }) => {
    return `
    <div class="container-comentarios">
        <div class="comentario">
            <img src="../../assets/img/icone_perfil.png" class="foto" alt="alguem">
            <h1>${cliente}</h1>
            <img src="../../assets/img/Four Star.png" class="estrelinha4" alt="estrela4">
            <p>${comentario}</p>
        </div>
    </div>
    `;

}

export default componenteComentario;