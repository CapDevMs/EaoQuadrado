import inserirDados from "./components/inserir_dados.js";
import permissoesAdm from "./components/permissoes-adm.js";

const docTagDados = document.querySelector('inserir_dados');
const docTagPermissoes= document.querySelector('permissoesAdm')

let inputDados = [{
    'categoria':'Nome',
    'tipo':'text',
    'classe':'input-text',
    'exemp':'John'
},
{   'categoria':'Sobrenome',
    'tipo':'text',
    'classe':'input-text',
    'exemp':'Doe'
},
{   'categoria':'Cargo',
    'tipo':'text',
    'classe':'input-text',
    'exemp':'Supervisão'
},
{   'categoria':'Data de Nascimento',
    'tipo':'date',
    'classe':'input-text',
    'exemp':'dd/mm/aa'
},
{   'categoria':'CPF',
    'tipo':'number',
    'classe':'input-text',
    'exemp':'000.000.000-00'
},
{   'categoria':'Email',
    'tipo':'text',
    'classe':'input-text',
    'exemp':'johndoe@gmail.com'
},
{   'categoria':'Número de telefone',
    'tipo':'text',
    'classe':'input-text',
    'exemp':'(67) 99999-9999'
}
];
let inputPermissoes=[{
    'nome':'validarNovasContas',
    'valor':'validarContas',
    'nomePermissao':'Válidar Novas Contas de Vendedores'
}];


inputDados.forEach((categoria, tipo, classe, exemp) => {
    docTagDados.innerHTML += inserirDados(categoria, tipo, classe, exemp)
});
inputPermissoes.forEach((nome, valor, nomePermissao) => {
    docTagPermissoes.innerHTML += permissoesAdm(nome, valor, nomePermissao)
});