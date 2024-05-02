///Recebe o valor digitado na senha e converte para exibir a senha
function mostraSenha(){
    var x = document.getElementById("senha");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

//Capturar o valor de usuário e senha para enviar para o Model;
function conectar(){
    // Cria um objeto de dados para enviar via AJAX
    var dados = {
        usuario: usuario,
        senha: senha
    };

    // Faz uma requisição AJAX para o script PHP
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'connect.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Resposta recebida do servidor
            var resposta = JSON.parse(xhr.responseText);
            
            // Verifica se o usuário foi autenticado com sucesso
            if (resposta.autenticado) {
                // Redireciona para home.php
                window.location.href = 'home.php';
            } else {
                // Redireciona para contato.php
                window.location.href = 'not-found.php';
            }
        }
    };
    xhr.send('usuario=' + encodeURIComponent(usuario) + '&senha=' + encodeURIComponent(senha));

}