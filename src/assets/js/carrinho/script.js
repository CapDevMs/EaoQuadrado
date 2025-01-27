console.log('Eu tenho medo do comedor')
const removeProductButton = document.getElementsByClassName('removeProductButton')

for (i = 0; i< removeProductButton.length; i++){
    removeProductButton[i].addEventListener("click", function(event){
        event.target.parentElement.parentElement.parentElement.remove()
    })
}
function updateSubTotal(){


let subTotalAmounth = 0
const cartProducts = document.getElementsByClassName('cartProduct')
for (i = 0; i < cartProducts.length; i++){
    const productPrice = cartProducts[i].getElementsByClassName('product-1-2-price')[0].innerText.replace('R$','').replace(',','.')
    console.log(productPrice)
    const productQuantity = cartProducts[i].getElementsByClassName('counter')[0].value

    
    console.log(productQuantity)

    subTotalAmounth += (productPrice * productQuantity)
    console.log(subTotalAmounth)

    subTotalAmounth = subTotalAmounth.toFixed(2)
    subTotalAmounth = subTotalAmounth.replace('.',',')

    document.querySelector('.subTotal').innerText = 'R$ ' + subTotalAmounth
}}


