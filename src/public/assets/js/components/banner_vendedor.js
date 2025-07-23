const banner_vendedor = ({ titulo, email, endereco, telefone }) => {
    return `
    <div class="card vendedor-card">
        <div class="vendedor-body">
            <div class="vendedor-left">
                <img src="../assets/img/cliente/studio_center.svg" alt="Logo" class="vendedor-avatar" />
            </div>
            <div class="vendedor-center">
                <h2>${titulo}</h2>
                <a href="mailto:${email}">${email}</a>
                <p>${endereco}</p>
                <p>Campo Grande - MS</p>
            </div>
            <div class="vendedor-right">
                <div class="vendedor-avaliacao">
                    <span>Avaliações:</span>
                    <span class="estrelas">★★★★★</span>
                </div>
                <div class="vendedor-whatsapp">
                    <img src="../assets/img/icons/whatsapp.svg" alt="WhatsApp" class="whatsapp-icon" />
                    <a target="_blank" href="https://wa.me/${telefone.replace(/\D/g, '')}">(${telefone})</a>
                </div>
            </div>
        </div>
    </div>`;
}

export default banner_vendedor;
