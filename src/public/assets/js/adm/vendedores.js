import listaVendedores from './lista-de-vendedores.js';

const div = document.querySelector('listaVendedores');


let Vendedores = [
    {
        'imagem': '../../assets/img/cliente/studio_center.svg',
        'email': 'studiocenterpy@gmail.com',
        'categorias': 'Roupas, Camêras, Smartphones, Computadores, Telefones',
        'whatsapp': '3437-7000'
    },
    {
        'imagem': '../../assets/img/cliente/studio_center.svg',
        'email': 'studiocenterpy@gmail.com',
        'categorias': 'Roupas, Camêras, Smartphones, Computadores, Telefones',
        'whatsapp': '3437-7000'
    },
    {
        'imagem': '../../assets/img/cliente/studio_center.svg',
        'email': 'studiocenterpy@gmail.com',
        'categorias': 'Roupas, Camêras, Smartphones, Computadores, Telefones',
        'whatsapp': '3437-7000'
    },
    {
        'imagem': '../../assets/img/cliente/studio_center.svg',
        'email': 'studiocenterpy@gmail.com',
        'categorias': 'Roupas, Camêras, Smartphones, Computadores, Telefones',
        'whatsapp': '3437-7000'
    }
]

Vendedores.forEach(element => {
    div.innerHTML += listaVendedores(element);
});

