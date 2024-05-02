<?php
include_once' \controller\login_controller.php';
// Configurações de conexão
$host = 'localhost';
$nome_banco = 'myhometeacher';
$usuario = 'root';
$senha = ''; // Senha vazia

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

try {
    // Cria uma conexão PDO com o banco de dados MySQL
    $conn = new PDO("mysql:host=$host;dbname=$nome_banco", $usuario, $senha);
    
    // Configura o PDO para lançar exceções em caso de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Exibe uma mensagem de sucesso se a conexão for bem-sucedida
    echo "Conexão bem-sucedida!";
} catch(PDOException $e) {
    // Exibe uma mensagem de erro em caso de falha na conexão
    echo "Erro na conexão: " . $e->getMessage();
}

// Consulta o banco de dados para verificar se o usuário e a senha são válidos
$sql = "SELECT * FROM usuarios WHERE nome = '$usuario' AND senha = SHA1('$senha')";
$resultado = $conn->query($sql);

if ($resultado->$num_rows > 0) {
    echo json_encode(array('autenticado' => true));
} else {
    echo json_encode(array('autenticado' => false));
}

// Fecha a conexão com o banco de dados
$conn->close();


