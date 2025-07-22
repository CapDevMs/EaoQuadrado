function fecharPopup(event) {
  if (event && event.target.className !== 'popup-overlay') return;

  const popup = document.querySelector('.popup-overlay');
  if (popup) {
    popup.style.display = 'none';
  }
}
