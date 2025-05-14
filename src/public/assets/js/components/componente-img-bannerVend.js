// componente imagem banner do vendedor
const imgLoja = ({ imagem }) => {
    return `
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pb-3">
                    <img class = "imagem-loja" src="${imagem}" alt="Banner da Loja" style="border-radius: 1.5rem">
                </div>
            </div>
        </div>
    `;
};

export default imgLoja;

