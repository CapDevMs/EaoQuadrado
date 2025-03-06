document.addEventListener("DOMContentLoaded", () => {
    const categorias = [
        { nome: "Computadores", imagem: "../assets/img/categoria/icone-categoria/computer_icon.svg" },
        { nome: "Celulares", imagem: "../assets/img/categoria/icone-categoria/cellphone_icon.svg" },
        { nome: "Games", imagem: "../assets/img/categoria/icone-categoria/games_icon.svg" },
        { nome: "Fone de ouvido", imagem: "../assets/img/categoria/icone-categoria/headphone_icon.svg" },
        { nome: "Camera", imagem: "../assets/img/categoria/icone-categoria/camera_icon.svg" },
        { nome: "Smartwatches", imagem: "../assets/img/categoria/icone-categoria/smartwaches_icon.svg" }
    ];

    // Elemento onde os botões serão inseridos
    const containerCategorias = document.getElementById("categorias");

    // Criar os botões dinamicamente
    categorias.forEach(categoria => {
        const botao = document.createElement("button-categoria");
        botao.setAttribute("nome", categoria.nome);
        botao.setAttribute("imagem", categoria.imagem);
        containerCategorias.appendChild(botao);
    });

    // Lidar com o clique nos botões e redirecionamento
    document.querySelectorAll(".buttonCategoria").forEach(button => {
        button.addEventListener("click", (event) => {
            const categoria = event.currentTarget.getAttribute("data-categoria");
            window.location.href = `?categoria=${encodeURIComponent(categoria)}`;
        });
    });

    // Capturar parâmetro da URL e carregar produtos
    const params = new URLSearchParams(window.location.search);
    const categoriaSelecionada = params.get("categoria");

    if (categoriaSelecionada) {
        carregarProdutos(categoriaSelecionada);
    }
});

function carregarProdutos(categoria) {
    console.log(`Carregando produtos para a categoria: ${categoria}`);
}
