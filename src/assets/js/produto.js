import galeriaImg from "./components/galeria-img.js";

let mais = document.getElementById("mais");
let menos = document.getElementById("menos");
let qtd = document.getElementById("quantidade");

var quantidadeProdutos = 1;
qtd.value = quantidadeProdutos;

mais.addEventListener("click", (event)=>{
    quantidadeProdutos++;
    qtd.value = quantidadeProdutos;
});

menos.addEventListener("click", (event)=>{
    if(quantidadeProdutos > 1){
        quantidadeProdutos--;
    }
    qtd.value = quantidadeProdutos;
});
qtd.addEventListener("change", ()=>{
    quantidadeProdutos = Number(qtd.value);
});


const docTag = document.querySelector('galeria-img');

let images = [{
    'image':'../assets/img/tela-produtos/bolsa.png'
}];

images.forEach((image) => {
    docTag.innerHTML += galeriaImg(image)
});