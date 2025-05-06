

document.getElementById('MandarCarrinho').addEventListener("click",function(){
    console.log('Clicou')
    let valor = this.value;
    let valorString = String(valor);
    
    let arraySuporte = valorString.split("|");

    if (arraySuporte == []){console.log('Array vazio')}
    arraySuporte.forEach(element => {
        console.log(element)
        let arrayLocalStorage = JSON.parse(localStorage.getItem("listaProdutos")) || [];
        arrayLocalStorage.push(element);
        localStorage.setItem("listaProdutos",JSON.stringify(arrayLocalStorage));
        console.log("Array atualizado: ",arrayLocalStorage);
    });

});