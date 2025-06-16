import componenteEstoque from "../components/componente-estoque.js";

let containerComponenteEstoque = document.querySelector('containerPedidos');

containerComponenteEstoque.innerHTML = vendasHistorico.map(pedido => 
  cardHistoricoVendas(pedido)
).join('');
