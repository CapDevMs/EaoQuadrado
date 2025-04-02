import componenteComentario from "../components/componenteComentario.js";

let comentario = document.querySelector("container-comentarios");

let comentarios = [
        {
        'cliente' : "Alcir Júnior",
        'comentario': "Chegou tudo certinho, dentro do prazo, a embalagem intacta, o produto com todas as proteções plásticos, isopor.... funciona perfeitamente já fiz o teste e é ótima."
    },
    {
        'cliente' : "Andrey Silva",
        'comentario': "Comprei uma chuteira muito boa. Excelente! Podem comprar sem medo. Jogo bola a minha vida inteira e posso afirmar que a chuteira é boa. Não sei a durabilidade, só o tempo vai dizer, mas fica muito boa no pé."
    }
]

comentarios.forEach((avaliacao) => {
    comentario.innerHTML += componenteComentario(avaliacao)
})