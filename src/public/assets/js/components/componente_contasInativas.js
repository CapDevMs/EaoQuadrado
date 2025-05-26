




// categorias


function limpaPainel() {

    const painelPrincipal = document.querySelector('.painelPrincipal')

};

function todasContasInativas() {
    console.log('todas');
};

function suspensasContasInativas() {

    const listaSuspensos = ['luta','de','verdade']

    for (let i = 0; i <listaSuspensos.length; i++ ) {

        const nomeEmpresa = 'Nome da empresa'
        const stats = 'Suspenso'
        const id = `suspensoId${i}`
        const imagem = 'foto-perfil.png'
        const justificativa = 'Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Suspenso para revisão.'
    
        const modelSuspensa = `
            <acordeonSuspenso class='colum' id='${id}'>
    
                <AcordeonAberto type='button' class='painel painelCentral col-12 centralizar mt-3 acordeonAberto displayNone' onclick="fecharAcordeon('${id}')">
        
                    <div class='painelCinza'>
                        <div class='blocoReativar subBloco0 col-md-2'>
                            <img src="src/public/assets/img/${imagem}" alt="foto-perfil" class='imagem'>
                        </div>
                        <div class="blocoNome miniFonte subBloco1">${nomeEmpresa}</div>
                        <div class='col-5  blocoColuna'>
                            <div class="status1 col-xl-1 subBloco0 miniFonte blocoReativar">${stats}</div>
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
                            <img src="src/public/assets/img/${imagem}" alt="foto-perfil" class='imagem'>
                        </div>
                        <div class=" blocoNome miniFonte subBloco1">${nomeEmpresa}</div>
                        <div class='col-5 blocoColuna'>
                            <div class="status1 col-xl-1 subBloco0 miniFonte blocoReativar">${stats}</div>
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
    };
    console.log(modelSuspensa);
};
function desativadasContasInativas() {
    console.log('desativadas');
};