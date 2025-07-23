const galeriaImg = ({ image }) => {
    return `
    <div class="grid-image col-sm-12">
        <div class="grid-grande col-lg-10 col-md-10 col-sm-12">
            <div class="col-sm-11 img-large">
                <img src="${image}">
            </div>
        </div>
    </div>
    `;
}

export default galeriaImg;