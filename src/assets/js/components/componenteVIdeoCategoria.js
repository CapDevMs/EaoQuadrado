// Ao abrir a tela o componente deve identificar em qual categoria o componente se encontra procurando a classe da categoria selecionada.
// O componente deve pelo id da classe ou pelo nome da classe tornar o nome da classe em uma variavel
// O componente devera adicionar o nome da classe no modelo const video = '<?php get_base_url(); ?>/assets/videos/videoBannerClasses_${nomeClasse}.mp4'
// O componente deve então adicionar a uma variavel o modelo html completo que será inserido (segue exemplo)

// const video = ({ video }) => {
//     return `
//         <div class="video-celular">
//             <video autoplay muted loop>
//                 <source src="../assets/videos/${video}" type="video/mp4">        
//             </video>
//         </div>
//     `;
// }

// O componente deve inserir o arquvio no html da pagina Categoria respectiva

console.log('iniciado Componente video');

function pegarvideo() {
    let videoComponente = document.getElementsByClassName('container-video');

    console.log(videoComponente);
};

function criarLink() {
    console.log(`link iniciado`);

    let categoria = document.getElementsByClassName('categoriabutton');

    for (let i = 0; i < categoria.length; i++){
        console.log('passo');
        console.log(i);
    };

    console.log(`link finalizado`)
};

window.onload = function() {
    pegarvideo();
    criarLink();
}