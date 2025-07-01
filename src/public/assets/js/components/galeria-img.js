const galeriaImg = ({ image }) => {
    return `
    <div class="grid-image col-sm-12">
        <div class="grid-lateral col-lg-2 col-md-2 col-sm-3">
            <div class="img-small col-sm-12 ">
                <img src="${image}" >
            </div>
            <div class="img-small col-sm-12">
                <img src="${image} " >
            </div>
            <div class="img-small col-sm-12">
                <img src="${image}" >
            </div>
            <div class="img-small col-sm-12">
                <img src="${image}" >
            </div>
        </div>
        <div class="grid-grande col-lg-10 col-md-10 col-sm-12">
            <div class="col-sm-11 img-large">
                <img src="${image}">
            </div>
        </div>
    </div>
    `;
}

export default galeriaImg;