const products = [
    {
        id: 1,
        name: 'ASUS Notebook Gamer',
        price: 700.00,
        category: 'computadores',
        rating: 5,
        image: 'path/to/image.jpg'
    },
    // Adicione mais produtos aqui
];

// Estado da aplicação
const state = {
    currentCategory: 'all',
    currentPage: 1,
    priceRange: {
        min: null,
        max: null
    },
    selectedRating: null,
    searchTerm: '',
    itemsPerPage: 9
};

// Filtrar produtos
function filterProducts() {
    let filtered = [...products];

    // Filtro por categoria
    if (state.currentCategory !== 'all') {
        filtered = filtered.filter(product => product.category === state.currentCategory);
    }

    // Filtro por preço
    if (state.priceRange.min !== null) {
        filtered = filtered.filter(product => product.price >= state.priceRange.min);
    }
    if (state.priceRange.max !== null) {
        filtered = filtered.filter(product => product.price <= state.priceRange.max);
    }

    // Filtro por avaliação
    if (state.selectedRating) {
        filtered = filtered.filter(product => product.rating >= state.selectedRating);
    }

    // Filtro por termo de busca
    if (state.searchTerm) {
        filtered = filtered.filter(product => 
            product.name.toLowerCase().includes(state.searchTerm.toLowerCase())
        );
    }

    return filtered;
}

// Renderizar produtos
function renderProducts() {
    const filtered = filterProducts();
    const startIndex = (state.currentPage - 1) * state.itemsPerPage;
    const endIndex = startIndex + state.itemsPerPage;
    const productsToShow = filtered.slice(startIndex, endIndex);

    const container = document.querySelector('.products-container');
    container.innerHTML = '';

    productsToShow.forEach(product => {
        const productElement = createProductElement(product);
        container.appendChild(productElement);
    });

    updatePagination(filtered.length);
}

// Criar elemento de produto
function createProductElement(product) {
    const div = document.createElement('div');
    div.className = 'product-card';
    div.innerHTML = `
        <img src="${product.image}" alt="${product.name}" class="product-image">
        <h3 class="product-title">${product.name}</h3>
        <p class="product-price">R$${product.price.toFixed(2)}</p>
        <div class="product-actions">
            <button class="btn-primary add-to-cart" data-id="${product.id}">
                Comprar
            </button>
            <button class="btn-favorite favorite-toggle" data-id="${product.id}">
                ❤️
            </button>
        </div>
    `;
    return div;
}

// Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    // Categorias
    document.querySelectorAll('.categoria button').forEach(button => {
        button.addEventListener('click', (e) => {
            const category = e.currentTarget.querySelector('img').id.replace('Categoria-', '');
            state.currentCategory = category;
            state.currentPage = 1;
            renderProducts();
            
            // Update active state
            document.querySelectorAll('.categoria button').forEach(btn => {
                btn.classList.remove('active');
            });
            button.classList.add('active');
        });
    });

    // Filtro de preço
    const minInput = document.getElementById('minimo');
    const maxInput = document.getElementById('maximo');

    function updatePriceFilter() {
        state.priceRange.min = minInput.value ? parseFloat(minInput.value) : null;
        state.priceRange.max = maxInput.value ? parseFloat(maxInput.value) : null;
        state.currentPage = 1;
        renderProducts();
    }

    minInput.addEventListener('change', updatePriceFilter);
    maxInput.addEventListener('change', updatePriceFilter);

    // Avaliações
    document.querySelectorAll('.checkbox-container input').forEach(checkbox => {
        checkbox.addEventListener('change', (e) => {
            const rating = parseInt(e.target.getAttribute('data-rating'));
            state.selectedRating = checkbox.checked ? rating : null;
            state.currentPage = 1;
            renderProducts();
        });
    });

    // Busca
    const searchInput = document.querySelector('.search-bar-marcas');
    searchInput.addEventListener('input', (e) => {
        state.searchTerm = e.target.value;
        state.currentPage = 1;
        renderProducts();
    });

    // Favoritos
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('favorite-toggle')) {
            e.target.classList.toggle('active');
            // Adicione aqui a lógica para salvar favoritos
        }
    });

    // Carrinho
    document.addEventListener('click', (e) => {
        if (e.target.classList.contains('add-to-cart')) {
            const productId = e.target.getAttribute('data-id');
            // Adicione aqui a lógica do carrinho
        }
    });

    // Inicializar
    renderProducts();
});

// Atualizar paginação
function updatePagination(totalItems) {
    const totalPages = Math.ceil(totalItems / state.itemsPerPage);
    const paginationContainer = document.querySelector('.pagination');
    
    let paginationHTML = '';
    for (let i = 1; i <= totalPages; i++) {
        paginationHTML += `
            <button class="page-btn ${i === state.currentPage ? 'active' : ''}" 
                    data-page="${i}">
                ${i}
            </button>
        `;
    }
    
    paginationContainer.innerHTML = paginationHTML;
}

// Local Storage
const storage = {
    saveFavorites(favorites) {
        localStorage.setItem('favorites', JSON.stringify(favorites));
    },
    
    getFavorites() {
        return JSON.parse(localStorage.getItem('favorites')) || [];
    },
    
    saveCart(cart) {
        localStorage.setItem('cart', JSON.stringify(cart));
    },
    
    getCart() {
        return JSON.parse(localStorage.getItem('cart')) || [];
    }
};