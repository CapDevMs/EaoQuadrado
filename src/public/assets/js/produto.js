import galeriaImg from "./components/galeria-img.js";
import contadorQuantidade from "./components/contador-quantidade.js";

const docTag = document.querySelector("galeria-img");
const docTagContador = document.querySelector("#contadorBtn");

let images = [
    {
        'image': 'http://localhost/EaoQuadrado/src/public/assets/img/tela-produtos/bolsa.png',
    },
];

images.forEach((image) => {
    docTag.innerHTML += galeriaImg(image);
});

const contadorElement = document.createElement("div");
contadorElement.innerHTML = contadorQuantidade();
docTagContador.appendChild(contadorElement);


let mais = document.getElementById("mais");
let menos = document.getElementById("menos");
let qtd = document.getElementById("quantidade");

if (mais && menos && qtd) {
    var quantidadeProdutos = 1;

    mais.addEventListener("click", (event) => {
        quantidadeProdutos++;
        qtd.value = quantidadeProdutos;
    });

    menos.addEventListener("click", (event) => {
        if (quantidadeProdutos > 1) {
            quantidadeProdutos--;
        }
        qtd.value = quantidadeProdutos;
    });

    qtd.addEventListener("change", () => {
        quantidadeProdutos = Number(qtd.value);
    });
} else {
    console.error("Elementos 'mais', 'menos' ou 'quantidade' não encontrados no DOM.");
}
