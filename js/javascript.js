document.getElementById('formulario').addEventListener('submit',
function (event) {
 event.preventDefault();
 
 // Obter valores dos campos
 var name = document.getElementById('name').value;
var dataInput = document.getElementById('dataNascimento').value;
 var telefone = document.getElementById('telefone').value;
 var email = document.getElementById('email').value;
 var mensagem = document.getElementById('mensagem').value;

// Verificar cam,pos obrigatórios
if(name === '' || dataInput ==='' || telefone === '' || email === '' || mensagem ==='')
{
    alert('Todos os campos são obrigatórios');
    return;
}
 
// Validação do campo nome 
if(name.trim().length < 2){
    alert('Insira um nome válido.');
    return;
}

// Data de Nascimento e validação

 var dataNascimento = new Date(dataInput);

 if(isNaN(dataNascimento.getTime()))
 {
    alert('Insira uma data de nascimento válida.');
    return;
 }

 var today = new Date();
 var age = today.getFullYear() - dataNascimento.getFullYear();
 var monthDiff = today.getMonth() - dataNascimento.getMonth();

 if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dataNascimento.getDate())) { 
    age--;
 }
 
 if (dataNascimento > today) {
  alert("Data inválida (no futuro)");
  return;
}

 if (age < 18) {
 alert('Você deve ter mais de 18 anos para preencher este formulário.');
 return;
 }
 

// limpar espaços

telefone = telefone.trim().replace(/\s/g, "");

 // Expressões regulares
 var telefoneRegex = /^[9][0-9]{8}$/;
 var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


//Validação telefone
 if (!telefoneRegex.test(telefone)) {
 alert('Por favor, insira um número de telefone válido  com 9 dígitos.');
 return;
 }
  
 //Validação email
 if (!emailRegex.test(email)) { 
  alert('Por favor, insira um endereço de e-mail válido.');
 return;
 }

 //validação de mensagem
 if(mensagem.length < 10 ){
    alert('A mensagem deverá ter no mínimo 10 caracteres');
    return;
 }

 // Simulação de envio de dados
 alert('Dados enviados com sucesso!');
 document.getElementById('formulario').reset();
}); 

// acordeem==on 

$(document).ready(function () {
   $('.faq-question').on('click', function () {
      var resposta = $(this).next('.faq-answer');

      $('.faq-answer').not(resposta).stop(true, true).slideUp();
      resposta.stop(true, true).slideToggle();
   });
});