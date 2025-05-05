
function resetButtons() {
    document.querySelectorAll('.filter-button').forEach(function (button) {
        button.classList.remove('ativo');
    });
}


document.getElementById("todos").addEventListener("click", function () {
    resetButtons(); 
    this.classList.add("ativo");
    document.querySelector(".table").classList.remove("hidden"); 
    document.querySelector(".approved").classList.remove("hidden")
    document.querySelector(".repproved").classList.remove("hidden");
});


document.getElementById("aprovado").addEventListener("click", function () {
    resetButtons(); 
    this.classList.add("ativo");
    document.querySelector(".approved").classList.remove("hidden")
    document.querySelector(".repproved").classList.add("hidden"); 
    document.querySelector(".table").classList.remove("hidden"); 
});

document.getElementById("reprovado").addEventListener("click", function () {
    resetButtons(); 
    this.classList.add("ativo");
    document.querySelector(".approved").classList.add("hidden");
    document.querySelector(".repproved").classList.remove("hidden");
    document.querySelector(".table").classList.remove("hidden"); 
});
