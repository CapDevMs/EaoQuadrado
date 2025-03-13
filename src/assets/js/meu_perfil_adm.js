import inserirDados from "./components/inserir_dados.js";

const docTagDados = document.querySelector('inserir_dados');

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
{   'categoria':'Númeo de telefone',
    'tipo':'text',
    'classe':'input-text',
    'exemp':'(67) 99999-9999'
}



];

inputDados.forEach((categoria, tipo, classe, exemp) => {
    docTagDados.innerHTML += inserirDados(categoria, tipo, classe, exemp)
});