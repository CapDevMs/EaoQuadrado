const buttonCategoria = (categorias) => {
  const categoriasArray = [];

  categorias.forEach((categoria) => {
    categoriasArray.push(`
        <button type="submit" data-id=${categoria["id_categoria"]} class="button categoria col-sm-4 col-md-4 col-lg-2">
            <div class="container-imagem col-sm-12">
                <img class="img-CategoriaButton col-sm-12 pl-1" src="${categoria["imagem_categoria"]}" alt="Ícone de ${categoria["nome"]}">
            </div>
                <p class="nome-categoria">${categoria["nome"]}</p>
        </button>`);
  });

  return '<form action="categoria" method="GET" class="buttonCategoria col-sm-10 row">' + categoriasArray.join("") +"</form>";
};

export default buttonCategoria;
