import componenteEstoque from "../components/componente-estoque.js";

const docTagContador = document.querySelector('contadorBtn')
const docTagEstoque = document.querySelector('componenteEstoqueContainer');

let componenteEstoqueInfo = [
  {
      'imagem': '../assets/img/tela-produtos/bolsa.png',
      'nome': 'sla',
      'preco': '23',
      'imagem2': '../assets/img/tela-produtos/bolsa.png',
  },
];

componenteEstoqueInfo.forEach((estoque) => {
  docTagEstoque.innerHTML += componenteEstoque(estoque);
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
