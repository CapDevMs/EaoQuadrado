import filtroComponent from "./components/filtro-categoria.js";
import filtro from "./components/filtro-categoria.js";
async function carregarPagina() {
    let limpa_cache = Date.now();

    // 1 Importa e monta os botões de categoria
    let { default: buttonCategoria } = await import(`./components/button-categoria.js?v=${limpa_cache}`);

    const docTag = document.querySelector('.button-categoria');

    const categorias = [
        {
            imagem: 'assets/img/categoria/icone-categoria/camera_icon.svg',
            nome: 'Camera',
            link: '#'
        },
        {
            imagem: 'assets/img/categoria/icone-categoria/cellphone_icon.svg',
            nome: 'Celulares',
            link: '#'
        },
        {
            imagem: 'assets/img/categoria/icone-categoria/computer_icon.svg',
            nome: 'Computador',
            link: '#'
        },
        {
            imagem: 'assets/img/categoria/icone-categoria/games_icon.svg',
            nome: 'Games',
            link: '#'
        },
        {
            imagem: 'assets/img/categoria/icone-categoria/headphone_icon.svg',
            nome: 'Fone de Ouvido',
            link: '#'
        },
        {
            imagem: 'assets/img/categoria/icone-categoria/smartwatches_icon.svg',
            nome: 'Smartwatch',
            link: '#'
        }
    ];

    if (docTag) {
        categorias.forEach((categoria) => {
            docTag.innerHTML += buttonCategoria(categoria);
        });
    } else {
        console.error("Elemento .button-categoria não encontrado.");
    }

    // 2 Depois importa e exibe os produtos
    let { default: cardProduto } = await import(`./components/card-produto.js?v=${limpa_cache}`);

    const docTagProdutos = document.querySelector('.card-produto');

    const produtos = [
        {
            id: 1,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca1.png',
            preco: '99,90',
            link: './produto.php'
        },
        {
            id: 2,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca2.png',
            preco: '119,90',
            link: './produto.php'
        },
        {
            id: 3,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca1.png',
            preco: '99,90',
            link: './produto.php'
        },
        {
            id: 4,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca3.png',
            preco: '119,90',
            link: './produto.php'
        },
        {
            id: 5,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca2.png',
            preco: '119,90',
            link: './produto.php'
        },
        {
            id: 6,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca3.png',
            preco: '99,90',
            link: './produto.php'
        },
        {
            id: 7,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca2.png',
            preco: '119,90',
            link: './produto.php'
        },
        {
            id: 8,
            titulo: 'Caneca especial Programador',
            imagem: 'assets/img/caneca1.png',
            preco: '119,90',
            link: './produto.php'
        }
    ];

    if (docTagProdutos) {
        produtos.forEach((produto) => {
            docTagProdutos.innerHTML += cardProduto(produto);
        });
    } else {
        console.error("Elemento .card-produto não encontrado.");
    }

    // 3 Ativa botões de like
    const likeBtns = document.querySelectorAll('i.like');
    likeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            alert('Produto favoritado com sucesso!');
        });
    });
}

const docTagFiltro = document.querySelector("#filtro");
const filtroElement = document.createElement("div");
docTagFiltro.innerHTML = filtroComponent();



//  Executa tudo na ordem
carregarPagina();
