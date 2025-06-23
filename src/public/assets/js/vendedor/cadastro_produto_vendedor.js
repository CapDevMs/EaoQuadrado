// tratamento de imagem
document.getElementById('arquivo').addEventListener('change', function(event) {
    const files = event.target.files;
    const container = document.querySelector('.previas');
    container.innerHTML = '';

    for (let i = 0; i < files.length; i++) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = 'Imagem ' + (i + 1);
            img.style.width = '200px';
            img.style.height = '300px';
            img.style.objectFit = 'contain';
            img.style.backgroundColor = '#f8f8f8'; //caso a imagem não preencha 100%

            container.appendChild(img);
        }
        reader.readAsDataURL(files[i]);
    }
});

// pop-up de sucesso
document.addEventListener('DOMContentLoaded', function () {
  const urlParams = new URLSearchParams(window.location.search);
  const popup = document.getElementById('popupSucesso');
  const okBtn = document.getElementById('botao-ok');

  if (popup && urlParams.get('sucesso') === '1') {
    popup.classList.remove('oculto');

    // remove sucesso=1 da URL
    const novaUrl = window.location.origin + window.location.pathname;
    window.history.replaceState({}, document.title, novaUrl);
  }

  if (okBtn) {
    okBtn.addEventListener('click', () => {
      popup.classList.add('oculto');
    });
  }
});



// validação com regex em tempo real

document.addEventListener('DOMContentLoaded', function () {
    const campos = [
        {
            id: 'nome-produto',
            regex: /^[A-Za-zÀ-ÿ0-9\s\-().,:®°™]+$/u,
            mensagem: 'O nome deve ter entre 3 e 100 caracteres, apenas letras e números.'
        },
       {
            id: 'marca-produto',
            regex: /^[A-Za-zÀ-ÿ0-9\s]{2,50}$/,
            mensagem: 'A marca deve ter entre 2 e 50 caracteres, apenas letras e números.'
        },
       {
            id: 'modelo-produto',
            regex: /^[A-Za-zÀ-ÿ0-9\s\-().\/]{2,100}$/,
            mensagem: 'O modelo deve ter entre 2 e 100 caracteres.'
        },
        // {
        //     id: 'preco-produto',
        //     regex: /^\d{1,6}([.,]\d{1,2})?$/,
        //     mensagem: 'Preço inválido. Exemplo válido: 1234,56'
        // },
        {
            id: 'descricao-produto',
            regex: /^[A-Za-zÀ-ÿ0-9\s.,;:()\-"–\n]{10,1000}$/,
            mensagem: 'A descrição deve ter entre 10 e 1000 caracteres.'
        }
    ];

    campos.forEach(campo => {
        const input = document.getElementById(campo.id);
        if (input) {
            const aviso = document.createElement('div');
            aviso.style.color = 'red';
            aviso.style.fontSize = '12px';
            aviso.style.display = 'none';
            input.parentNode.appendChild(aviso);

            input.addEventListener('input', function () {
                if (campo.regex.test(input.value.trim())) {
                    aviso.style.display = 'none';
                    input.style.borderColor = '';
                } else {
                    aviso.textContent = campo.mensagem;
                    aviso.style.display = 'block';
                    input.style.borderColor = 'red';
                }
            });
        }
    });
});

// máscara para preço do produto + validação de regex
document.addEventListener('DOMContentLoaded', function () {
  const precoInput = document.getElementById('preco-produto');

  precoInput.addEventListener('input', function (e) {
    let valor = e.target.value.replace(/\D/g, ''); // Remove tudo que não for número

    if (valor.length === 0) {
      e.target.value = '';
      return;
    }

    valor = (parseInt(valor, 10) / 100).toFixed(2).replace('.', ','); // Formata
    e.target.value = 'R$ ' + valor;

    // Validação (usando vírgula como separador brasileiro)
    const valorValidar = e.target.value.replace(/[^\d,]/g, ''); // Ex: "R$ 48,93" → "4893"
    const regex = /^\d{1,6},\d{2}$/;
    const avisoExistente = precoInput.parentNode.querySelector('.aviso-validacao');

    if (!regex.test(valorValidar)) {
      if (!avisoExistente) {
        const aviso = document.createElement('div');
        aviso.textContent = 'Preço inválido. Exemplo válido: 1234,56';
        aviso.classList.add('aviso-validacao');
        aviso.style.color = 'red';
        aviso.style.fontSize = '12px';
        precoInput.parentNode.appendChild(aviso);
      }
      precoInput.style.borderColor = 'red';
    } else {
      if (avisoExistente) avisoExistente.remove();
      precoInput.style.borderColor = '';
    }
  });

  // Ao submeter, converte para o formato 1234.56 (ponto, para banco)
  const form = document.getElementById('form-cadastro-produto');
  form.addEventListener('submit', function () {
    let raw = precoInput.value.replace(/[^\d]/g, ''); // Apenas números
    precoInput.value = (parseInt(raw, 10) / 100).toFixed(2); // Ex: "4893" → "48.93"
  });
});
