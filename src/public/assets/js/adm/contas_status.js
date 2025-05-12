import validation from './aprovados_reprovados.js';

const div = document.querySelector('validacao');


let contas_validacao = [
    {
        'nome': 'Carlos Santana da Silva',
        'email': 'carlos_silva@gmail.com',
        'icon': 'icon-checkbox.png',
        'foto': 'foto-perfil.png',
        'status': 'Aprovado',
        'data': '27/09/2020'
    }
]

contas_validacao.forEach(element => {
    div.innerHTML += validation(element);
});

