import suporteInfo from './adm/suporte_ao_colaborador.js';

const div = document.querySelector('suporteInfo');


let infoAccordion = [
    {
        'nome' : 'Fernando Abreu', 
        'descricao': 'venho relatar um bug na minha conta na...', 
        'data': '30 de junho, 2024', 
        'status' : 'Visto', 
        'img_perfil' : '../../public/assets/img/icone_perfil.png'
    },
    {
        'nome' : 'Fernando Abreu', 
        'descricao': 'venho relatar um bug na minha conta na...', 
        'data': '30 de junho, 2024', 
        'status' : 'Não Visto', 
        'img_perfil' : '../../public/assets/img/icone_perfil.png'
    }
]

infoAccordion.forEach(element => {
    div.innerHTML += suporteInfo(element);
});

