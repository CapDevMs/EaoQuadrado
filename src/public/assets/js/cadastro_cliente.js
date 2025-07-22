const input = document.getElementById('imgProfileInput');
const preview = document.getElementById('imgPrev');

preview.addEventListener('click', function () {
    input.click();
});

input.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function () {
            preview.src = reader.result;
        };

        reader.readAsDataURL(file);
    }
});

function fecharPopup(event) {
    if (event && event.target.className !== 'popup-overlay') return;

    const popup = document.querySelector('.popup-overlay');
    if (popup) {
    popup.style.display = 'none';
    }
}