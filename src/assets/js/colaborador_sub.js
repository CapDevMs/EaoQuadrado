function toggleAccordion(button) {
    var parentAccordion = button.closest('.accordion');
    var content = parentAccordion.querySelector('.accordion-content');
    var paragraph = parentAccordion.querySelector('p');

    if (content.style.display === "block") {
        content.style.display = "none";
        parentAccordion.classList.remove("open");
        paragraph.style.display = "block";
    } else {
        content.style.display = "block";
        parentAccordion.classList.add("open");
        paragraph.style.display = "none";
    }
}