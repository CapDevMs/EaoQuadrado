var listaProdutos = ['acer_nitro.png','Accer Nitro V5','4650','caneca1-removebg.png','Caneca Programadora com nome irritantemente grande','99,90','logo.png','Logo ilegal','1000']

var conter = 0
var image = ''
var name = ''
var value = ''
listaProdutos.forEach(element => {
    if (conter == 0){
        image = element
        conter += 1
        console.log(image, 'image')
    } 
    else if (conter == 1) {
        name = element
        conter += 1
        console.log(name,'name')
    } 
    else if (conter == 2){
        value = element
        conter = 0
        console.log(value,'value')

        document.getElementById('container').innerHTML += `<div class='product'><div class='productDiv'><img src='../assets/img/carrinhoImagens/${image}' class='image '></div><div class='productDiv'><span class=''>Nome do produto</span><span class='nomeProduto'>${name}</span></div><div class='productDiv'><span class=''>Preço</span><span class='price nomeProduto'>R$ ${value}</span></div><div class='productDiv counterDiv'><div><span class='product-1-1'>Quantidade</span></div><div><input type="Number" class='counter' min='0' value = 1></div></div><div class='productDiv'><span class=''>Subtotal</span><span class='subTotal'>...</span></div><div class='productDiv cartProduct-6'><a href='#' class = 'a'><img src='../assets/img/lixeira-icon.png' class='icon removeProductButton'></a></div></div> `
    }

});

// document.getElementById('container').innerHTML = "<div class='product'><div class='productDiv'><img src='../assets/img/acer_nitro.png' class='image '></div>  <div class='productDiv'><span class=''>Nome do produto</span><span class=''>Acer nitro V5</span>         </div><div class='productDiv'><span class=''>Preço</span><span class='price'>R$ 4690,00</span></div><div class='productDiv counterDiv'>    <div>    <span class='product-1-1'>Quantidade</span>    </div>    <div>    <input type="Number" class='counter' min='0' value = 1>    </div>           </div><div class='productDiv'>  <span class=''>Subtotal</span><span class='subTotal'>...</span> </div><div class='productDiv cartProduct-6'><a href='#' class = 'a'><img src='../assets/img/lixeira-icon.png' class='icon removeProductButton'></a></div></div>";
// console.log('adicionado')



const removeProductButton = document.getElementsByClassName('removeProductButton')
for (i = 0; i< removeProductButton.length; i++){
    removeProductButton[i].addEventListener("click", function(event){
        event.target.parentElement.parentElement.parentElement.remove()
    })
}

// let subTotalValue = 0
// const cartProduct = document.getElementsByClassName('product')
// for (var i = 0; i < cartProduct.length; i++){
//     console.log(cartProduct[i])
//     const productPrice = cartProduct[i].getElementsByClassName('price')[0].innerText.replace('R$','').replace(',','.')
//     console.log(productPrice)
//     const productQuantity = cartProduct[i].getElementsByClassName('counter')[0].value
//     console.log(productQuantity)

//     subTotalValue = productPrice * productQuantity
//     subTotalValue = subTotalValue.toFixed(2).replace('.',',')
//     console.log(subTotalValue)

//     document.querySelector('.subTotal').innerText = 'R$ ' + subTotalValue
// }