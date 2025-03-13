const inserirDados = ({ categoria, tipo, classe, exemp }) => {
    return `
    <div class="col-12">
        <div>
            <h5>${categoria}</h5>
            <br>
            <input type="${tipo}" class="${classe}" placeholder="${exemp}">
        </div>
       
    </div>
    `;
}

export default inserirDados;