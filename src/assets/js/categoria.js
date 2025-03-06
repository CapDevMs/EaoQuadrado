export default function ButtonCategoria({ texto, imagem }) {
    return `
        <button class="categoria-button">
            <img src="${imagem}" alt="${texto}" class="categoria-img">
            <span>${texto}</span>
        </button>
    `;
}
