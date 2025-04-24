  function abrirAcordeon(buttonID) {
    console.log(buttonID);
    const elementos = document.querySelectorAll('.vendedor');
    console.log(elementos);
    const elemento = elementos[buttonID];
    console.log(elemento)
    const elementoSelecionado1 = elemento.querySelector('.acordeonFechado');
    const elementoSelecionado2 = elemento.querySelector('.acordeonAberto');
    console.log(elementoSelecionado1)
    console.log(elementoSelecionado2)

    elementoSelecionado1.classList.add('removedor')
    elementoSelecionado2.classList.add('adicionador')
  }

  function fecharAcordeon(buttonID) {
    console.log(buttonID);
    const elementos = document.querySelectorAll('.vendedor');
    console.log(elementos);
    const elemento = elementos[buttonID];
    console.log(elemento)
    const elementoSelecionado1 = elemento.querySelector('.acordeonFechado');
    const elementoSelecionado2 = elemento.querySelector('.acordeonAberto');
    console.log(elementoSelecionado1)
    console.log(elementoSelecionado2)

    elementoSelecionado1.classList.remove('removedor')
    elementoSelecionado2.classList.add('removedor')
    elementoSelecionado2.classList.remove('adicionador')
  }
