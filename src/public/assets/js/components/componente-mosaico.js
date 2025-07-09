const mosaicoComp = ({nome, descricao}) => {
    return `
        <div class="mosaico">
            <div class="itens1" id="item1">
                <div class="texto">
                    <h1>${nome}</h1>
                    <p>${descricao}</p>
                </div>
            </div>
            <div class="itens2" id="item2" onclick="window.location.href='<?= get_base_url(); ?>produto'">
                <div class="texto">
                    <h1>${nome}</h1>
                    <p>${descricao}<p>
                </div>
            </div>
            <div class="itens3-4">
                <div class="itens3" id="item3" onclick="window.location.href='<?= get_base_url(); ?>produto'">
                    <div class="texto">
                        <h1>${nome}</h1>
                        <p>${descricao}</p>

                    </div>
                </div>

                <div class="itens4" id="item4" onclick="window.location.href='<?= get_base_url(); ?>produto'">
                    <div class="texto">
                        <h1>${nome}</h1>
                        <p>${descricao}</p>
                    </div>
                </div>
            </div>
        </div>
    `;
};

export default mosaicoComp;