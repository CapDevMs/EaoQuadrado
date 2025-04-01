const permissoesAdm = ({ nome, valor, nomePermissao}) => {
    return `
        <div class="container-permissoes">
            <input type="checkbox" class="input-radio" name="${nome} value="${valor}">
            <label for="${valor}">${nomePermissao}</label>
        </div>
    <br>
    `;
}

export default permissoesAdm;