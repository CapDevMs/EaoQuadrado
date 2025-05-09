import cardHistoricoVendas from "../components/card-historico-vendas.js";

let containerHistoricoVendas = document.querySelector('containerPedidos');

let vendasHistorico = [
  {
    'imagem': './assets/img/monitor_oled.png',
    'produto': "Monitor Gamer AOC Hero 27' 165Hz 1ms Ajuste de Altura 27G2S/BK",
    'statusPedido': "Entregue",
    'preco': "R$ 999,99",
    'valorTotal': "R$ 999,99",
    'cliente': "Yuri Ferreira",
    'data': "22/01/2025",
    'quantidade': "1",
    'endereco': "Rua Piratininga ,629, Jardim dos Estados",
    'cidade': "Campo Grande-MS",
    'cep': "79020-240",
  },
  {
    'imagem': './assets/img/teclado.png',
    'produto': "Teclado Mecânico Gamer HyperX Alloy Origins Core, RGB, Switch HyperX Red, ABNT2 - 4P5P3A2#AC4",
    'statusPedido': "Cancelado",
    'preco': "R$ 599,99",
    'valorTotal': "R$ 1.199,98",
    'cliente': "Paulo Morais",
    'data': "13/09/2024",
    'quantidade': "2",
    'endereco': "Rua Piratininga ,629, Jardim dos Estados",
    'cidade': "Campo Grande-MS",
    'cep': "79020-240",
  }
];

containerHistoricoVendas.innerHTML = vendasHistorico.map(pedido => 
  cardHistoricoVendas(pedido)
).join('');


window.toggleDetails = function (element) {
  element.querySelector('.card-details').classList.toggle("expanded");
};

window.salvarStatus = function(event) {
  alert("Status alterado com sucesso!");
};
