import suporteInfo from './adm/suporte_ao_colaborador.js';

const div = document.querySelector('suporteInfo');


let infoAccordion = [
    {
        'nome' : 'Fernando Abreu', 
        'descricao': 'Venho relatar um bug na minha conta na página inicial do sistema. Ao tentar acessar minha área de usuário, percebo que a página demora muito para carregar, ou, em alguns casos, fica totalmente em branco.', 
        'data': '30 de junho, 2024', 
        'status' : 'Visto', 
        'img_perfil' : 'src/public/assets/img/icone_perfil.png'
    },
    {
        'nome' : 'Fernando Abreu', 
        'descricao': 'Venho relatar um bug na minha conta na página inicial do sistema. Ao tentar acessar minha área de usuário, percebo que a página demora muito para carregar, ou, em alguns casos, fica totalmente em branco.', 
        'data': '30 de junho, 2024', 
        'status' : 'Não Visto', 
        'img_perfil' : 'src/public/assets/img/icone_perfil.png'
    }
]

infoAccordion.forEach(element => {
    div.innerHTML += suporteInfo(element);
});

