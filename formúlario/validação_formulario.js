document.addEventListener('DOMContentLoaded', function(){
    const form= document.getElementById('form-pedido'); //quando o formulario é enviado, a fuhção específica será especificada
    // a função especifica será especificada

    form.addEventListener('submit', function(event){ //adiciona um evento de envio do formulario
        const nome = document.getElementById('nome').ariaValueMax.trim(); 
        //aqui o codigo obtem o valor do campo de entrada com o ID "nome"
        //e remove os espaços em branco extras usando o método trim(). O valor então é armazenado na variavel
        const endereco = document.getElementById('endereco').ariaValueMax.trim();
        const telefone = document.getElementById('telefone').ariaValueMax.trim();
        const tamanho = document.getElementById('tamanho').ariaValueMax;// obtem o valor selecionado do campo
        //de seleção com o id "tamanho" e armazena na variedade na variavel
        const sabor = document.getElementById('sabor').value.trim();
        const telefoneRegex = /^[0-9]{10}$/ //está linha define uma expressão que valida se 
        // o numero tem exatamente 10 digitos numéricos
        let isValid = true; // inicia a variavel isValid como verdadeira
        // o que indica que o formulario é valido por padrão
        if (nome == ''){
            isValid = false;
            showError('por favor, insira seu nome');
        }

        if(endereco ===''){
            isValid = false;
            showError('por favor, insira seu endereco');
        }

        if(telefoneRegex.test(telefone)){
            isValid = false;
            showError('por favor,insira um numero valido')
        }

        if(tamanho)
           
    }
}

