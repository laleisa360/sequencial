// Selecionando os botões pelo ID
const botao1 = document.getElementById("botao1");

// Adicionando event listeners para cada botão
botao1.addEventListener("click", function() {
    // Exibindo mensagem de alerta com o nome do botão
    alert("Você clicou no botão: " + this.textContent);
});
botao2.addEventListener("click", function() {
    // Exibindo mensagem de alerta com o nome do botão
    alert("Você clicou no botão: " + this.textContent);
});

botao3.addEventListener("click", function() {
    // Exibindo mensagem de alerta com o nome do botão
    alert("Você clicou no botão: " + this.textContent);
});