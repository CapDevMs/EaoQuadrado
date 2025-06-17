import componenteEstoque from "../components/componente-estoque.js";
import contadorQuantidade from "../components/contador-quantidade.js";

const docTagEstoque = document.querySelector('.componenteEstoqueContainer'); 
if (docTagEstoque) {
    // Your product data
    const componenteEstoqueInfo = [
        {
            'imagem': '../assets/img/tela-produtos/bolsa.png',
            'nome': 'Bolsa',
            'preco': '23',
            'imagem2': '../assets/img/tela-produtos/bolsa.png',
        },
        {
            'imagem': '../assets/img/tela-produtos/tenis.png',
            'nome': 'Tênis',
            'preco': '55',
            'imagem2': '../assets/img/tela-produtos/tenis.png',
        },
    ];

    // 1. Build the HTML for all products and add it to the page
    let htmlEstoque = '';
    componenteEstoqueInfo.forEach((estoque) => {
        htmlEstoque += componenteEstoque(estoque);
    });
    docTagEstoque.innerHTML = htmlEstoque;

    // 2. Now that the products are on the page, find ALL counter containers
    const todosContadores = document.querySelectorAll('.contador-container');

    // 3. Loop through each container to give it a counter and make it work
    todosContadores.forEach(container => {
        // Add the counter HTML to this specific container
        container.innerHTML = contadorQuantidade();

        // Find the buttons and input INSIDE this container
        const mais = container.querySelector(".btn-mais");
        const menos = container.querySelector(".btn-menos");
        const qtd = container.querySelector(".input-quantidade");

        let quantidadeProdutos = 1;

        mais.addEventListener("click", () => {
            quantidadeProdutos++;
            qtd.value = quantidadeProdutos;
        });

        menos.addEventListener("click", () => {
            if (quantidadeProdutos > 1) {
                quantidadeProdutos--;
            }
            qtd.value = quantidadeProdutos;
        });
    });
}