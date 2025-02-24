import galeriaImg from "./components/galeria-img";

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

let image = [{
    'image':'../assets/img/tela-produtos/bolsa.png'
}];

image.forEach((image) => {
    docTag.innerHTML += galeriaImg(image)
});