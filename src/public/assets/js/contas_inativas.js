function fecharAcordeon(idConta) {

    let var1 = document.getElementById(idConta);
    let var2 = var1.querySelector('.acordeonAberto');
    let var3 = var1.querySelector('.acordeonFechado');

    var3.classList.remove('displayNone');
    var2.classList.remove('displayNone');

    var2.classList.add('displayNone');

};

function abrirAcordeon(idConta) {

    let var1 = document.getElementById(idConta);
    let var2 = var1.querySelector('.acordeonAberto');
    let var3 = var1.querySelector('.acordeonFechado');

    var3.classList.remove('displayNone');
    var2.classList.remove('displayNone');

    var3.classList.add('displayNone');

};

function mudarSeletor(chaveSeletor) {


    let removeChave = document.querySelector('.seletorAtivo');

    console.log(removeChave)
    removeChave.classList.remove('seletorAtivo');
    removeChave.classList.remove('seletorInativo');
    removeChave.classList.add('seletorInativo');

    let adicionaChave = document.getElementById(chaveSeletor);
    adicionaChave.classList.remove('seletorAtivo');
    adicionaChave.classList.remove('seletorInativo');
    adicionaChave.classList.add('seletorAtivo');

    


};