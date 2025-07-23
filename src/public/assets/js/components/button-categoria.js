const buttonCategoria = (categorias) => {
  const categoriasArray = [];

  categorias.forEach((categoria) => {
    categoria["imagem_categoria"] = categoria["imagem_categoria"].replace("src/public/", "");
    
    categoriasArray.push(`
        <a type="submit" data-id=${categoria["id_categoria"]} class="button col-sm-4 col-md-4 col-lg-2" href = "categoria?id=${categoria["id_categoria"]}">
            <div class="container-imagem col-sm-12">
                <img class="img-CategoriaButton col-sm-12 pl-1" src="${categoria["imagem_categoria"]}" alt="Ícone de ${categoria["nome"]}">
            </div>
                <p class="nome-categoria">${categoria["nome"]}</p>
        </a>`);
  });

  return '<form action="categoria" method="GET" class="col-sm-10 row categoria_button_forms">' + categoriasArray.join("") +"</form>";
};

export default buttonCategoria;
