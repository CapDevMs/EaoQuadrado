const inserirDados = ({ categoria, tipo, classe, exemp }) => {
    return `
    <div>
        <div class="container-dados">
            <h5>${categoria}</h5>
            <input type="${tipo}" class="${classe}" placeholder="${exemp}">
        </div>
       
    </div><br>
    `;
}

export default inserirDados;