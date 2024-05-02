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
var user = document.getElementById('usuario');
var usuario = user.value;
var pass = document.getElementById('senha')
var senha = pass.value;
console.log(senha);

if(usuario !== '' && senha !== ''){
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
            console.log(xhr.responseText);
        }
    };
    xhr.send('usuario=' + encodeURIComponent(usuario) + '&senha=' + encodeURIComponent(senha));

}else{
    alert("Usuário ou senha estão vazios")
}


}