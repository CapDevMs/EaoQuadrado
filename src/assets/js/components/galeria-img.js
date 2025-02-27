const galeriaImg = ({ image }) => {
    return `
    <div class="col-12">
        <div class="col-2 col-md-hidden">
            <div class="img-small col-12 col-md-hidden">
                <img src="${image}" >
            </div>
            <div class="img-small col-12 col-md-hidden">
                <img src="${image} " >
            </div>
            <div class="img-small col-12 col-md-hidden">
                <img src="${image}" >
            </div>
            <div class="img-small col-12 col-md-hidden">
                <img src="${image}" >
            </div>
        </div>
        <div class="col-10 col-md-12">
            <div class="img-large">
                <img src="${image}">
            </div>
        </div>
    </div>
    `;
}

export default galeriaImg;