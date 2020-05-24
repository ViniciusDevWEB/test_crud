<?php
require_once "connection.php";

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$occupation = filter_input(INPUT_POST, 'occupation', FILTER_SANITIZE_STRING);
$salary = filter_input(INPUT_POST, 'salary', FILTER_SANITIZE_NUMBER_INT);
$legalDependents = filter_input(INPUT_POST, 'legalDependents', FILTER_SANITIZE_NUMBER_FLOAT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$sql = "INSERT INTO users 
    (nome, cargo, salario, data_admissao, total_dependentes, email) 
    VALUES 
    ('$name', '$occupation', $salary, NOW(), $legalDependents, '$email')
";

$connection = newConnection();
$set = $connection->query($sql);

if($set) {
    $location = 'operation.php?dir=scripts&file=data_get';
    $message = 'Cadastro realizado com sucesso!';
    $description = 'Voltar à página de cadastros';
} else {
    $location = 'index.php';
    $message = 'Erro ao tentar cadastrar';
    $description = 'Voltar à página inicial';
}

echo "<div class='title'>$message<hr /></div><br />";
echo "<a class='bt' href=$location>$description</a>";

$connection->close();