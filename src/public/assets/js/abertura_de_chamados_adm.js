document.getElementById('salvar').addEventListener('click', function(event) {
    event.preventDefault(); 
    document.getElementById('modalImagem').style.display = "block";
});


document.querySelector('.fechar').addEventListener('click', function() {
    document.getElementById('modalImagem').style.display = "none";
});


window.onclick = function(event) {
    if (event.target == document.getElementById('modalImagem') || event.target.tagName === 'IMG') {
        document.getElementById('modalImagem').style.display = "none";
    }
};
