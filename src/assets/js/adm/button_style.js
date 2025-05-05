document.getElementById("todos").addEventListener("click", function () {
    this.classList.toggle("ativo");
    document.querySelector(".perfil").classList.remove("hidden");
});

document.getElementById("aprovado").addEventListener("click", function () {
    this.classList.toggle("ativo");
    document.querySelector(".perfil").classList.remove("hidden"); // ou condicional, se quiser esconder dependendo do status
});

document.getElementById("reprovado").addEventListener("click", function () {
    this.classList.toggle("ativo");
    document.querySelector(".perfil").classList.add("hidden");
});
