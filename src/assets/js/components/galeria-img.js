const galeriaImg = ({ image }) => {
    return `
    <div class="grid-image col-12">
        <div class="col-2 col-md-hidden col-sm-hidden">
            <div class="img-small col-12">
                <img src="${image}" >
            </div>
            <div class="img-small col-12">
                <img src="${image} " >
            </div>
            <div class="img-small col-12">
                <img src="${image}" >
            </div>
            <div class="img-small col-12">
                <img src="${image}" >
            </div>
        </div>
        <div class="col-10 col-md-12">
            <div class="col-11 img-large">
                <img src="${image}">
            </div>
        </div>
    </div>
    `;
}

export default galeriaImg;