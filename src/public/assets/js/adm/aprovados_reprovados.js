const validation = ({ nome, email, icon, foto, status, data}) => {
    return`
    <div class="table col-sm-12 row">
        <div class="interior row container col-sm-9 col-md-10"> 
            <div class="perfil col-sm-12 mlr-1" id="${status}">
                <div class="foto-container col-sm-12 col-md-2">
                    <img src="src/public/assets/img/${foto}" alt="foto-perfil">
                </div>
                <div class="nome-email col-sm-12 col-md-6 col-xl-5 ">
                    <h1>${nome}</h1>
                    <p>${email}</p>
                </div>
                <div class="aprovado col-sm-12 col-md-4 col-xl-5">
                    <img src="src/public/assets/img/icons/${icon}" alt="">
                    <p>${status} em ${data}</p>
                </div>
            </div>
        </div>

        <div class="visualizar col-sm-3 col-md-2">
            <div class="btn-perfil col-sm-12 ml-1 container">
                <a>Visualizar Perfil</a>
            </div>
            
        </div>


    </div>`
}

export default validation;