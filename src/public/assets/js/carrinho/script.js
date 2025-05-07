let arrayLocalStorage = JSON.parse(localStorage.getItem("listaProdutos")) || [];
console.log(arrayLocalStorage);


if (arrayLocalStorage.length == 0) {
    console.log('Carrinho vazio');
} else {
    let conter = 0;
    let image = '';
    let name = '';
    let value = '';


    arrayLocalStorage.forEach(element => {
        if (conter == 0) {
            image = element;
            conter += 1;
            console.log(image, 'image');
        } else if (conter == 1) {
            name = element;
            conter += 1;
            console.log(name, 'name');
        } else if (conter == 2) {
            value = element;
            conter = 0;
            console.log(value, 'value');


            document.getElementById('container').innerHTML += `<div class='product'><div class='productDiv divImagem'><img src='../assets/img/carrinhoImagens/${image}' class='image '></div><div class='productDiv'><span class='nomeProduto'>Nome</span><span class='nomeProduto'>${name}</span></div><div class='productDiv'><span class='nomeProduto'>Preço</span><span class='price nomeProduto'>R$ ${value}</span></div><div class='productDiv counterDiv'><div><span class='nomeProduto product-1-1'>Quantidade</span></div><div><input type="Number" class='counter' min='0' value = 1></div></div><div class='productDiv sumivel'><span class='nomeProduto'>Subtotal</span><span class='subTotal'>...</span></div><div class='productDiv cartProduct-6'><a href='#' class = 'a'><img src='../assets/img/lixeira-icon.png' class='icon removeProductButton'></a></div></div> `;
        }
    });
}

function updateTotal() {
    let totalValue = 0;
    const cartProducts = document.getElementsByClassName('product');

    Array.from(cartProducts).forEach(product => {
        const productPrice = product.querySelector('.price').innerText.replace('R$', '').replace(',', '.');
        const productQuantity = product.querySelector('.counter').value;
        const subTotal = parseFloat(productPrice) * parseInt(productQuantity);

 
        product.querySelector('.subTotal').innerText = `R$ ${subTotal.toFixed(2).replace('.', ',')}`;

        totalValue += subTotal;
    });

    document.querySelector('.total').innerText = 'Total: R$ ' + totalValue.toFixed(2).replace('.', ',');
    document.querySelector('.total2').innerText = 'Total: R$ ' + totalValue.toFixed(2).replace('.', ',');
}


document.querySelectorAll('.counter').forEach(input => {
    input.addEventListener('input', updateTotal);
});


updateTotal();


const removeProductButton = document.getElementsByClassName('removeProductButton');
for (let i = 0; i < removeProductButton.length; i++) {
    removeProductButton[i].addEventListener("click", function (event) {
        event.target.closest('.product').remove();
        updateTotal(); 
    });
}
