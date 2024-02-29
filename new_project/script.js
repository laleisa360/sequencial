document.addEventListener("DOMContentLoaded", function() {
    const decreaseFontSizeButton = document.getElementById("decreaseFontSizeButton");
    const increaseFontSizeButton = document.getElementById("increaseFontSizeButton");
    const changeColorButton = document.getElementById("changeColorButton");
    let currentFontSize = 16; // Tamanho de fonte inicial
    let colorsChanged = false; // Estado das cores

    decreaseFontSizeButton.addEventListener("click", function() {
        adjustFontSize(-2); // Diminuir o tamanho da fonte em 2 pixels
    });

    increaseFontSizeButton.addEventListener("click", function() {
        adjustFontSize(2); // Aumentar o tamanho da fonte em 2 pixels
    });

    changeColorButton.addEventListener("click", function() {
        const body = document.querySelector("body");
        const header = document.querySelector("header");
        const footer = document.querySelector("footer");

        if (!colorsChanged) {
            // Cores vivas
            body.style.backgroundColor = " #rgb(252, 142, 142)"; // Amarelo
            header.style.backgroundColor = "#ff6666"; // Rosa
            footer.style.backgroundColor = "#66ccff"; // Azul claro
            colorsChanged = true;
            changeColorButton.textContent = "Cores Originais";
        } else {
            // Cores originais (preto e branco)
            body.style.backgroundColor = "#f8f9fa"; // Branco
            header.style.backgroundColor = "#343a40"; // Cinza escuro
            footer.style.backgroundColor = "#343a40"; // Cinza escuro
            colorsChanged = false;
            changeColorButton.textContent = "Cores Vivas";
        }
    });

    function adjustFontSize(change) {
        const body = document.querySelector("body");
        
        // Atualizar o tamanho da fonte
        currentFontSize += change;
        body.style.fontSize = currentFontSize + "px";
    }
});