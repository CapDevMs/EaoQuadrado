import componenteComentario from "../components/componenteComentario.js";

let comentario = document.querySelector("container-comentarios");

let comentarios = [
        {
        'cliente' : "Anna",
        'comentario': "Top!!"
    },
    {
        'cliente' : "João",
        'comentario': "Massa!!"
    }
]

comentarios.forEach((avaliacao) => {
    comentario.innerHTML += componenteComentario(avaliacao)
})