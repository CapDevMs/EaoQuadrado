/**
 * 
 * @param {HTMLElement} element 
 */
function toggleDetails(element) {
    console.log(element)
    element.children[6].classList.toggle("expanded");
}

import cardHistoricoVendas from "../components/card-historico-vendas.js"


let produtoHistorico = document.getElementsByTagName("cardHistoricoVendas");

let produtosHistorico = [
    {
        'imagem' : '../img/monitor_oled.png',
        'produto': "LCD Monitor",
        'statusPedido' : "Entregue",
        'preco' : "R$ 999,99",
        'cliente' : "Yuri Ferreira",
        'data' : "22/01/2025",
        'quantidade' : "1",
        'endereco' : "Rua Piratininga ,629, Jardim dos Estados Campo Grande",
        'cep' : "79020-240"
    }
    
]

 produtosHistorico.forEach((pedido) => {
    produtoHistorico.innerHTML += cardHistoricoVendas(pedido)
})