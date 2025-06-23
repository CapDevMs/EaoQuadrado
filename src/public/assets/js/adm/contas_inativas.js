function limpaPainel() {

    const painelPrincipal = document.querySelector('.painelPrincipal');
    painelPrincipal.innerHTML = ''

};

function PuxarInativas(listaSuspensos) {

    listaSuspensos.forEach(conta => {

        const nomeEmpresa = conta.nome_empresa
        let stats = conta.status
        if (stats == 0) {
            stats = 'Desativado'
        } else if (stats == 1) {
            stats = 'Suspenso'
        };

        const id = `idInativo${conta.id_contaInativa}`
        const imagem = 'foto-perfil.png'
        const justificativa = conta.justificativa

        const modelSuspensa = `
                <acordeonSuspenso class='colum' id='${id}'>
                
                <AcordeonAberto type='button' class='painel painelCentral col-12 centralizar mt-3 acordeonAberto displayNone' onclick="fecharAcordeon('${id}')">
                
                            <div class='painelCinza'>
                                <div class='blocoReativar subBloco0 col-md-2'>
                                <img src="../src/public/assets/img/${imagem}" alt="foto-perfil" class='imagem'>
                                </div>
                                <div class="blocoNome miniFonte subBloco1">${nomeEmpresa}</div>
                                <div class='col-5  blocoColuna'>
                                <div class="status${conta.status} col-xl-1 subBloco${conta.status} miniFonte blocoReativar">${stats}</div>
                                    <div class='blocoReativar subBloco1'>
                                    <botaoReativar type='button' class="botao miniFonte">Reativar</botaoReativar>
                                    </div>
                                    </div>
                            </div>
                            <hr>
                            <div class='campoTexto'>
                                <div class='TextBox miniFonte'>${justificativa}</div>
                            </div>
                        </AcordeonAberto>
            
                        <AcordeonFechado type="button" class='painel painelCentral col-12 centralizar mt-3 acordeonFechado' onclick="abrirAcordeon('${id}')">
                            <div class='painelCinza'>
                            <div class='blocoReativar subBloco0 col-md-2'>
                            <img src="../src/public/assets/img/${imagem}" alt="foto-perfil" class='imagem'>
                            </div>
                            <div class=" blocoNome miniFonte subBloco1">${nomeEmpresa}</div>
                                <div class='col-5 blocoColuna'>
                                    <div class="status${conta.status} col-xl-1 subBloco${conta.status} miniFonte blocoReativar">${stats}</div>
                                    <div class='blocoReativar subBloco1'>
                                        <botaoReativar type='button' class="botao miniFonte">Reativar</botaoReativar>
                                    </div>
                                </div>
                                </div>
                            <hr>
                            <div class='campoTexto2'>
                                <div class='TextBox miniFonte'>${justificativa}</div>
                                </div>
                                
                        </AcordeonFechado>
                        
                </acordeonSuspenso>
                `

        const inserir = document.querySelector('.painelPrincipal');

        inserir.innerHTML += modelSuspensa;
    });
};

function puxarContasInativas(listaContas) {
    limpaPainel();
    PuxarInativas(listaContas);
    console.log('puxarContasInativas:')
    console.log(listaContas)
};

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

function mudarSeletor(chaveSeletor, listaInativa) {

    let removeChave = document.querySelector('.seletorAtivo');

    removeChave.classList.remove('seletorAtivo');
    removeChave.classList.remove('seletorInativo');
    removeChave.classList.add('seletorInativo');

    let adicionaChave = document.getElementById(chaveSeletor);
    adicionaChave.classList.remove('seletorAtivo');
    adicionaChave.classList.remove('seletorInativo');
    adicionaChave.classList.add('seletorAtivo');

    console.log('mudarSeletor:')
    console.log(listaInativa)
    puxarContasInativas(listaInativa)

};
