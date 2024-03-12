function validateForm() {
    var nome = document.getElementById('nome').value;
    var dataNascimento = document.getElementById('dataNascimento').value;
    var genero = document.getElementById('genero').value;
    var endereco = document.getElementById('endereco').value;
    var telefone = document.getElementById('telefone').value;
    var email = document.getElementById('email').value;
    var nomeEscola = document.getElementById('nomeEscola').value;
    var serieAtual = document.getElementById('serieAtual').value;
    var nomeResponsavel = document.getElementById('nomeResponsavel').value;
    var contatoResponsavel = document.getElementById('contatoResponsavel').value;
    var cpf = document.getElementById('cpf').value;
    var rg = document.getElementById('rg').value;
    var isValid = true;

    var cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;

    if (nome === "") {
        showError('nome', 'Por favor, insira seu nome.');
        isValid = false;
    } else {
        hideError('nome');
    }

    // Adicione validações para os outros campos aqui

    if (!isValid) {
        return false;
    }
}

function showError(inputId, errorMessage) {
    var input = document.getElementById(inputId);
    var errorSpan = document.createElement('span');
    errorSpan.className = 'error-message';
    errorSpan.textContent = errorMessage;
    var parent = input.parentNode;
    parent.appendChild(errorSpan);
}

function hideError(inputId) {
    var input = document.getElementById(inputId);
    var parent = input.parentNode;
    var errorSpan = parent.querySelector('.error-message');
    if (errorSpan) {
        parent.removeChild(errorSpan);
    }
}
function showSuccessMessage() {
    var form = document.getElementById('registrationForm');
    var successMessage = document.createElement('p');
    successMessage.textContent = 'Seu cadastro foi realizado com sucesso.';
    successMessage.style.color = 'green';
    form.parentNode.insertBefore(successMessage, form.nextSibling);
}