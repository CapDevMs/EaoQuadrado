if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded')
}


const removeProductButton = document.getElementsByClassName('removeProductButton')
for (i = 0; i< removeProductButton.length; i++){
    removeProductButton[i].addEventListener("click", function(event){
        event.target.parentElement.parentElement.parentElement.remove()
    })
}

let subTotalValue = 0
const cartProduct = document.getElementsByClassName('cartProduct')
for (var i = 0; i < cartProduct.length; i++){
    console.log(cartProduct[i])
    const productPrice = cartProduct[i].getElementsByClassName('product-1-2-price')[0].innerText.replace('R$','').replace(',','.')
    console.log(productPrice)
    const productQuantity = cartProduct[i].getElementsByClassName('counter')[0].value
    console.log(productQuantity)

    subTotalValue = productPrice * productQuantity
    subTotalValue = subTotalValue.toFixed(2).replace('.',',')
    console.log(subTotalValue)

    document.querySelector('.subTotal').innerText = 'R$ ' + subTotalValue
}