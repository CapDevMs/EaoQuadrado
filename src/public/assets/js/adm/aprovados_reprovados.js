const validation = ({ nome, email, icon, foto, status, data}) => {
    return`
    <div class="table col-sm-12 row">
        <div class="interior container col-sm-10"> 
            <div class="perfil col-sm-12 mlr-1" id="${status}">
                <div class="foto-container col-sm-12 col-xl-2">
                    <img src="src/public/assets/img/${foto}" alt="foto-perfil">
                </div>
                <div class="col-sm-12 col-xl-5 ">
                    <h1>${nome}</h1>
                    <p>${email}</p>
                </div>
                <div class="aprovado col-sm-12 col-xl-5">
                    <img src="src/public/assets/img/icons/${icon}" alt="">
                    <p>${status} em ${data}</p>
                </div>
            </div>
        </div>

        <div class="visualizar col-sm-2">
            <div class="btn-perfil col-sm-10 ml-1 container">
                <a>Visualizar Perfil</a>
            </div>
            
        </div>


    </div>`
}

export default validation;