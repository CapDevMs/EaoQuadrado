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
            img.style.objectFit = 'cover';
            container.appendChild(img);
        }
        reader.readAsDataURL(files[i]);
    }
});

// pop-up de sucesso
document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const popup = document.getElementById('popup-sucesso');
    const fecharBtn = document.getElementById('fechar-popup');

    if (popup && urlParams.get('sucesso') === '1') {
        popup.classList.remove('oculto');

        // remove sucesso=1 da URL
        const novaUrl = window.location.origin + window.location.pathname;
        window.history.replaceState({}, document.title, novaUrl);
    }

    if (fecharBtn && popup) {
        fecharBtn.addEventListener('click', () => {
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
        {
            id: 'preco-produto',
            regex: /^\d{1,6}([.,]\d{1,2})?$/,
            mensagem: 'Preço inválido. Exemplo válido: 1234,56'
        },
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
// regex para o preço do produto

document.addEventListener('DOMContentLoaded', function () {
    const precoInput = document.getElementById('preco-produto');

    precoInput.addEventListener('input', function (e) {
        let valor = e.target.value;

        // Remove tudo que não for número
        valor = valor.replace(/\D/g, '');

        // Formata para real (ex: 2900 -> 29,00)
        valor = (parseInt(valor, 10) / 100).toFixed(2);

        // Exibe com R$ e ponto como separador milhar
        e.target.value = 'R$ ' + valor.replace('.', ',');
    });

    // Isso para remover R$ e enviar tratado para o banco de dados
    const form = document.getElementById('form-cadastro-produto');
    form.addEventListener('submit', function () {
        let raw = precoInput.value.replace(/\D/g, '');
        precoInput.value = (parseInt(raw, 10) / 100).toFixed(2); // ex: "2900" → "29.00"
    });
});

