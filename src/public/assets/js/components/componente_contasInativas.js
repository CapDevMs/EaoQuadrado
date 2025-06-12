function limpaPainel() {

    const painelPrincipal = document.querySelector('.painelPrincipal');
    painelPrincipal.innerHTML = ''

};

const listaSuspensos = ['Empresa sus 1','Empresa sus 2','Empresa sus 3','Empresa sus 4',];
const listaDesativados = ['Empresa des 1','Empresa des 2','Empresa des 3','Empresa des 4',];

function PuxarSuspensas(listaSuspensos) {

    for (let i = 0; i < listaSuspensos.length; i++) {

        const nomeEmpresa = listaSuspensos[i]
        const stats = 'Suspenso'
        const id = `suspensoId${i}`
        const imagem = 'foto-perfil.png'
        const justificativa = 'Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Suspenso para revisão.'

        const modelSuspensa = `
            <acordeonSuspenso class='colum' id='${id}'>
    
                <AcordeonAberto type='button' class='painel painelCentral col-12 centralizar mt-3 acordeonAberto displayNone' onclick="fecharAcordeon('${id}')">
        
                    <div class='painelCinza'>
                        <div class='blocoReativar subBloco0 col-md-2'>
                            <img src="../src/public/assets/img/${imagem}" alt="foto-perfil" class='imagem'>
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
                            <img src="../src/public/assets/img/${imagem}" alt="foto-perfil" class='imagem'>
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
};
function PuxarDesativadas(listaDesativados) {

    for (let i = 0; i < listaDesativados.length; i++) {

        const nomeEmpresa = listaDesativados[i]
        const stats = 'Desativado'
        const id = `DesativadoId${i}`
        const imagem = 'foto-perfil.png'
        const justificativa = 'Justificativa: Grande quantidade de reclamações referente a entrega incorreta de produtos. Desativado como punição.'

        const modelDesativado = `
            <acordeonSuspenso class='colum' id='${id}'>
    
                <AcordeonAberto type='button' class='painel painelCentral col-12 centralizar mt-3 acordeonAberto displayNone' onclick="fecharAcordeon('${id}')">
        
                    <div class='painelCinza'>
                        <div class='blocoReativar subBloco0 col-md-2'>
                            <img src="../src/public/assets/img/${imagem}" alt="foto-perfil" class='imagem'>
                        </div>
                        <div class="blocoNome miniFonte subBloco1">${nomeEmpresa}</div>
                        <div class='col-5  blocoColuna'>
                            <div class="status2 col-xl-1 subBloco0 miniFonte blocoReativar">${stats}</div>
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
                            <div class="status2 col-xl-1 subBloco0 miniFonte blocoReativar">${stats}</div>
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

        inserir.innerHTML += modelDesativado;
    };
};

function todasContasInativas() {
    limpaPainel();
    PuxarSuspensas(listaSuspensos);
    PuxarDesativadas(listaDesativados);
};

function suspensasContasInativas() {
    limpaPainel();
    PuxarSuspensas(listaSuspensos);
};
function desativadasContasInativas() {
    limpaPainel();
    PuxarDesativadas(listaDesativados);
};

todasContasInativas();