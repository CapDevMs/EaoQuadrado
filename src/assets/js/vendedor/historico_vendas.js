import cardHistoricoVendas from "../components/card-historico-vendas.js";

let containerHistoricoVendas = document.querySelector('containerPedidos');

let vendasHistorico = [
  {
    'imagem': '../../assets/img/monitor_oled.png',
    'produto': "LCD Monitor",
    'statusPedido': "Entregue",
    'preco': "R$ 999,99",
    'cliente': "Yuri Ferreira",
    'data': "22/01/2025",
    'quantidade': "1",
    'endereco': "Rua Piratininga ,629, Jardim dos Estados Campo Grande",
    'cep': "79020-240",
  },
  {
    'imagem': '../../assets/img/teclado.png',
    'produto': "Teclado Gamer",
    'statusPedido': "Cancelado",
    'preco': "R$ 599,99",
    'cliente': "Paulo Morais",
    'data': "13/09/2024",
    'quantidade': "1",
    'endereco': "Rua Piratininga ,629, Jardim dos Estados Campo Grande",
    'cep': "79020-240",
  }
];

containerHistoricoVendas.innerHTML = vendasHistorico.map(pedido => 
  cardHistoricoVendas(pedido)
).join('');

// vendasHistorico.forEach((pedido) => {
//   historicoVendas.innerHTML += cardHistoricoVendas(pedido)
// })


window.toggleDetails = function (element) {
  element.querySelector('.card-details').classList.toggle("expanded");
};

window.salvarStatus = function(event) {
  alert("Status alterado com sucesso!");
};
