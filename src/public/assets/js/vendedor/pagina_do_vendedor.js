import componenteComentario from "../components/componenteComentario.js";
let limpa_cache = Date.now();
let { default: banner_vendedor } = await import( `/EaoQuadrado/assets/js/components/banner_vendedor.js?v=${ limpa_cache }` );
import cardProduto from '../components/card-produto-vendedor.js';


const docTag_banner = document.querySelector('banner_vendedor');

const docTag = document.querySelector("#produtos");

async function renderProdutos() {
  const produtos = await fetch("/vendedor/getProdutos");
  const info = await produtos.json();
  exibirProdutos(info);
}

function exibirProdutos(produtos) {
  let favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];

  produtos.forEach((produto) => {
    docTag.innerHTML += cardProduto(produto);
  });

  const likeBtns = document.querySelectorAll(".like");

  likeBtns.forEach((btn) => {
    const produtoId = btn.dataset.id;

    if (favoritos.includes(produtoId)) {
      btn.classList.remove("fa-regular");
      btn.classList.add("fa-solid");
    }

    btn.addEventListener("click", () => {
      if (btn.classList.contains("fa-solid")) {
        btn.classList.remove("fa-solid");
        btn.classList.add("fa-regular");
        favoritos = favoritos.filter((id) => id !== produtoId);
      } else {
        btn.classList.remove("fa-regular");
        btn.classList.add("fa-solid");
        if (!favoritos.includes(produtoId)) {
          favoritos.push(produtoId);
        }
      }

      localStorage.setItem("favoritos", JSON.stringify(favoritos));
    });
  });
}

renderProdutos();


let banner = [{
    'titulo' : 'Teste',
    'email' : 'Studiocenter@gmail.com',
    'endereco' : 'Av.joão Cassimiro, 628, Tiradentes',
    'telefone' : '(67) 99299-3053'
}]

banner.forEach((titulo, email, endereco, telefone) => {
    docTag_banner.innerHTML += banner_vendedor(titulo, email, endereco, telefone)
});


let comentario = document.querySelector("container-comentarios");

let comentarios = [
        {
        'imgPerfil': '../assets/img/icone_perfil.png',
        'cliente' : 'Alcir Júnior',
        'comentario': 'Chegou tudo certinho, dentro do prazo, a embalagem intacta, o produto com todas as proteções plásticos, isopor.... funciona perfeitamente já fiz o teste e é ótima.'
    },
    {
        'imgPerfil': '../assets/img/icone_perfil.png',
        'cliente' : 'Andrey Silva',
        'comentario': 'Comprei uma chuteira muito boa. Excelente! Podem comprar sem medo. Jogo bola a minha vida inteira e posso afirmar que a chuteira é boa. Não sei a durabilidade, só o tempo vai dizer, mas fica muito boa no pé.'
    }
]

comentarios.forEach((avaliacao) => {
    comentario.innerHTML += componenteComentario(avaliacao)
});