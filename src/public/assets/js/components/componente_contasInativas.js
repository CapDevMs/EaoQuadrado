function limpaPainel() {

    const painelPrincipal = document.querySelector('.painelPrincipal');
    painelPrincipal.innerHTML = ''

};

function PuxarInativas(listaSuspensos) {
    lista.forEach(conta => {
    
                const nomeEmpresa = conta.nome_empresa
                let stats = conta.status
                if (stats == 0){
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
                                <div class="status1 col-xl-1 subBloco${conta.status} miniFonte blocoReativar">${stats}</div>
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
                                    <div class="status${conta.status} col-xl-1 subBloco0 miniFonte blocoReativar">${stats}</div>
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

function todasContasInativas(lista) {
    limpaPainel();
    PuxarInativas(lista);
    console.log('OI')
};

function suspensasContasInativas(lista) {
    limpaPainel();
    PuxarInativas(lista);
    console.log('OI')
};
function desativadasContasInativas(lista) {
    limpaPainel();
    PuxarInativas(lista);
    console.log('OI')
};

