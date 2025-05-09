document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.btn-status');

    buttons.forEach(button => {
        button.addEventListener('click', () => {

            buttons.forEach(btn => btn.classList.remove('ativo'));

            button.classList.add('ativo');
        });
    });
});
