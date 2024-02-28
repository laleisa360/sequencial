document.addEventListener("DOMContentLoaded", function(){
    const decreseFontSizeButton = document.getElementById(decreseFontSizeButton);
    const inscreseFontSizeButton = document.getElementById(inscreseFontSizeButton);
    const changeColorButton = document.getElementById(changeColorButton);
    let currentFontSize = 26; // Tamanho da fonte inicial
    let colorsChanged = false; // Estado das Cores

    decreseFontSizeButton.addEventListener("click",function() {
        adjustFontSize(-2); //diminuir o tamanho da fonte para 2pixels
    }
    });

    inscreseFontSizeButton.addEventListener("click", function() {
        adjustFontSize(-2); //aumentar o tamanho da fonte
    });

    changeColorButton.addEventListener("click")