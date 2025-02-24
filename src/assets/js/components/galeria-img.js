const galeriaImg = ({ image }) => {
    return `
    <div class="galeria-grid">
        <div class="grid-small">
            <div class="img-small">
                <img src="${image}" >
            </div>
            <div class="img-small">
                <img src="${image}" >
            </div>
            <div class="img-small">
                <img src="${image}" >
            </div>
            <div class="img-small">
                <img src="${image}" >
            </div>
        </div>
        <div>
            <div class="img-large">
                <img src="${image}">
            </div>
        </div>
    </div>
    `;
}

export default galeriaImg;