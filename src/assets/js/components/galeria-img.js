const galeriaImg = ({ image }) => {
    return `
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
    `;
}

export default galeriaImg;