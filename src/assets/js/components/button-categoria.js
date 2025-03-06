class ButtonCategoria extends HTMLElement {
    connectedCallback() {
        const nome = this.getAttribute("nome");
        const imagem = this.getAttribute("imagem");

        this.innerHTML = `
        <div class="container">
            <button class="buttonCategoria" data-categoria="${nome}">
                <div class="button-body">
                    <div class="container-imagem">
                        <img class="img-produto" src="${imagem}" alt="Ícone de ${nome}">
                    </div>
                    <div class="container-nome-produto">
                        <h3 class="nome-produto">${nome}</h3>
                    </div>
                </div>
            </button>
        </div>
        `;
    }
}

// Registrar o componente
customElements.define("button-categoria", ButtonCategoria);

export default ButtonCategoria;
