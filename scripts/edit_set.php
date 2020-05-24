<?php
require_once "connection.php";

$code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$occupation = filter_input(INPUT_POST, 'occupation', FILTER_SANITIZE_STRING);
$salary = filter_input(INPUT_POST, 'salary', FILTER_SANITIZE_NUMBER_INT);
$legalDependents = filter_input(INPUT_POST, 'legalDependents', FILTER_SANITIZE_NUMBER_FLOAT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$sql = "UPDATE users SET 
    nome='$name', 
    cargo='$occupation', 
    salario='$occupation', 
    total_dependentes='$legalDependents', 
    email='$email' 
    WHERE id='$code'
";

$connection = newConnection();
$connection->query($sql);


if($code == NULL) {
    /* !!!!!!!NOTA!!!!!!
    Não consegui implementar corretamnete o tratamento de erro! */
    $location = 'index.php';
    $message = 'Cadastro não alterado';
    $description = 'Voltar à página inicial';
} else {
    $location = 'operation.php?dir=scripts&file=edit';
    $message = 'Alteração realizda com sucesso!';
    $description = 'Voltar à página de edição';
}

echo "<div class='title'>$message<hr /></div><br />";
echo "<a class='bt' href=$location>$description</a>";

$connection->close();