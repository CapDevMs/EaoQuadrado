// Obtém o modal
var modal = document.getElementById("modalCadastrar");

// Obtém o botão que abre o modal
var btn = document.getElementById("abrirModal");

// Obtém o elemento <span> que fecha o modal (o 'x')
var span = document.getElementsByClassName("fechar")[0];

// Obtém o botão "Fechar" na parte inferior do modal
var btnFecharInferior = document.getElementsByClassName("botao-fechar-inferior")[0];

// Quando o usuário clicar no botão, abre o modal
btn.onclick = function() {
    modal.style.display = "flex"; // Usamos 'flex' para centralizar
}

// Quando o usuário clicar no <span> (x), fecha o modal
span.onclick = function() {
    modal.style.display = "none";
}

// Quando o usuário clicar no botão "Fechar" inferior, fecha o modal
btnFecharInferior.onclick = function() {
    modal.style.display = "none";
}

// Quando o usuário clicar em qualquer lugar fora do modal, fecha-o
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}