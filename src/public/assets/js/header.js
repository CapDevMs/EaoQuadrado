document.addEventListener("DOMContentLoaded", function () {
    const hamburguer = document.getElementById("hamburguer");
    const menu = document.getElementById("mobileMenu");
  
    hamburguer.addEventListener("click", () => {
      if (menu.classList.contains("open")) {
        menu.classList.remove("open");
        menu.classList.add("close");
        menu.addEventListener("animationend", () => {
          menu.classList.remove("close");
        });
      } else {
        menu.classList.add("open");
      }
    });
  });
  