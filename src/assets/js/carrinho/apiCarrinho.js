

document.getElementById('MandarCarrinho').addEventListener("click",function(){
    let valor = this.value;
    let valorString = String(valor);
    
    let arraySuporte = valorString.split("|");
    console.log(arraySuporte);

    arraySuporte.forEach(element => {
        console.log(element)
        let arrayLocalStorage = JSON.parse(localStorage.getItem("listaProdutos")) || [];
        arrayLocalStorage.push(element);
        localStorage.setItem("listaProdutos",JSON.stringify(arrayLocalStorage));
        console.log("Array atualizado: ",arrayLocalStorage);
    });



});