<?php
require_once "connection.php";

$code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_NUMBER_INT);
$sql_delete = "DELETE FROM users WHERE id='$code'";

$connection = newConnection();
$connection->query($sql_delete);

$sql_select = "SELECT * FROM users WHERE id = '$code'";
$result = $connection->query($sql_select);

$row_user = mysqli_fetch_assoc($result);
if($row_user == 0 && $code != NULL) { 
    $location = 'operation.php?dir=scripts&file=delete';
    $message = 'Cadastro excluido com sucesso!';
    $description = 'Voltar à página de excluir cadastros';
} else {
    $location = 'index.php';
    $message = 'Erro ao tentar excluir cadastro';
    $description = 'Voltar à página inicial';
}

echo "<div class='title'>$message<hr /></div><br />";
echo "<a class='bt' href=$location>$description</a>";

$connection->close();