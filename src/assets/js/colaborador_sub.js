document.querySelectorAll(".accordion button").forEach(button => {
    button.addEventListener("click", function () {
        let content = this.parentElement.querySelector("div");

        content.classList.toggle("ativo");
        content.style.height = content.classList.contains("ativo") ? content.scrollHeight + "px" : "0px";
    });
});
