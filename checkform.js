// Quando o botão Enviar é clicado, o método validate () é invocado. Verifica
// se os dados são inseridos corretamente nas respectivas caixas de texto. O documento.
// O método getElementById () é usado para pesquisar um formulário da web para um objeto com o
// ID especificado. O objeto colocado em qualquer lugar no formulário com o ID fornecido é pesquisado por
// este método. Instrução


function validate(userForm) {
  // #1 pesquisa um elemento no formulário da web com um ID de emailmsg
  // e atribui ao objeto chamado div (pode ser qualquer nome)
  div = document.getElementById("emailmsg"); // #1

  // Instrução # 2 define o conteúdo
  // que será exibido no local designado pelo ID do emailmsg como vermelho.
  div.style.color = "red"; // #2

  // O método hasChildNodes () na instrução # 3 verifica se uma mensagem já foi
  // exibido no local de ID do emailmsg. Se uma mensagem de erro já tiver sido exibida,
  // é removido através do método removeChild () na instrução # 4.
  if (div.hasChildNodes()) { // #3
    div.removeChild(div.firstChild); // #4
  }

  // A expressão regular
  // na declaração # 5 verifica se há um endereço de e-mail válido. Se o usuário digitar um e-mail inválido
  // endereço, O appendChild ()
  // O método é para anexar o nó fornecido ao documento. Lembre-se, um nó nunca
  // aparece na janela do navegador até que, e a menos que seja anexado ao documento usando o
  // método appendChild (). O nó filho pode ser anexado a qualquer elemento.
  // Como um endereço de e-mail inválido foi inserido, o usuário é solicitado a inseri-lo novamente
  // fazendo com que o cursor fique na caixa de endereço de e-mail através do método focus () aplicado
  // através da declaração # 7.
  // A instrução nº 8 retorna false para que o formulário não possa ser enviado.
  // O formulário pode ser enviado com êxito somente quando o método validate () retorna true
  // e isso é possível somente quando os dados são inseridos corretamente em todos os campos desejados.
  regex = /(^\w+\@\w+\.\w+)/; // #5
  match = regex.exec(userForm.emailaddress.value);
  if (!match) {
    div.appendChild(document.createTextNode("Invalid Email")); // #6
    userForm.emailaddress.focus(); // #7
    return false; // #8
  }
  div = document.getElementById("passwdmsg");
  div.style.color = "red";
  if (div.hasChildNodes()) {
    div.removeChild(div.firstChild);
  }

  // Declaração # 9 garante que o comprimento da senha digitada não seja menor que cinco.
  if (userForm.password.value.length <= 5) // #9
  {
  div.appendChild(document.createTextNode("The password should be of at least size 6 "));
    userForm.password.focus();
    return false;
  }
  div = document.getElementById("repasswdmsg"); div.style.color = "red";
  if (div.hasChildNodes()) {
    div.removeChild(div.firstChild);
  }
  // Declaração # 10 garante que as senhas inseridas na senha e ReType Password
  // caixas de texto são exatamente as mesmas. Se essas senhas não corresponderem, "As duas senhas
  // não corresponde "mensagem de erro é exibida no local que é representado pelo
  // ID repasswdmsg
  if (userForm.password.value != userForm.repassword.value) // #10
  {
    div.appendChild(document.createTextNode("The two passwords don't match"));
    userForm.password.focus();
    return false;
  }

  var div = document.getElementById("usrmsg"); div.style.color = "red";
  if (div.hasChildNodes()) {
    div.removeChild(div.firstChild);
  }

  // A instrução nº 11 garante que o usuário não deixe a caixa de texto completa do nome
  // em branco.
  if (userForm.complete_name.value.length == 0) // #11
  {
    div.appendChild(document.createTextNode("Name cannot be blank"));
    userForm.complete_name.focus();
    return false;
  }

  // Se alguma das verificações de validação falhar, o método validate () retornará false. Se o
  // caixas de texto desejadas passam por diferentes verificações de validação com sucesso, a validação
  // método retorna verdadeiro, conseqüentemente o formulário é enviado e os dados inseridos são
  // transferido para o script addcustomer.php para salvar na tabela do banco de dados.
  return true;
}
