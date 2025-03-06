    let buttonCategoria = [
        {           
            'nome': 'Computadores',
            'imagem': '../assets/img/categoria/icone-categoria/computer_icon.svg'
        },
        {           
            'nome': 'Celulares',
            'imagem': '../assets/img/categoria/icone-categoria/cellphone_icon.svg'
        },
        {           
            'nome': 'Games',
            'imagem': '../assets/img/categoria/icone-categoria/games_icon.svg'
        },
        {           
            'nome': 'Fone de ouvido',
            'imagem': '../assets/img/categoria/icone-categoria/headphone_icon.svg'
        },
        {           
            'nome': 'Camera',
            'imagem': '../assets/img/categoria/icone-categoria/camera_icon.svg'
        },
        {           
            'nome': 'Smartwatches',
            'imagem': '../assets/img/categoria/icone-categoria/smartwaches_icon.svg'
        },
        
    ]



document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".buttonCategoria").forEach(button => {
        button.addEventListener("click", (event) => {
            const categoria = event.currentTarget.getAttribute("data-categoria");
            
            window.location.href = `?categoria=${encodeURIComponent(categoria)}`;
        });
    });

    const params = new URLSearchParams(window.location.search);
    const categoriaSelecionada = params.get("categoria");

    if (categoriaSelecionada) {
        carregarProdutos(categoriaSelecionada);
    }
});


function carregarProdutos(categoria) {
    console.log(`Carregando produtos para a categoria: ${categoria}`);
    
}