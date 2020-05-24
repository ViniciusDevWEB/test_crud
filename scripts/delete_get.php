<?php
    require_once "connection.php";
    
    $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT * FROM users WHERE id = '$code'";
    
    $connection = newConnection();
    $result = $connection->query($sql);
    $row_user = mysqli_fetch_assoc($result);
    if($row_user == 0) { 
        header('Location: operation.php?dir=scripts&file=delete');
    }
?>

<div class="title">Apagar Dados de Usuário<hr /></div><br />
<form method="POST" action="operation.php?dir=scripts&file=delete_set">
    <label for="code">Código do Usuário:</label><br />
    <input type="number" name="code" id="code" value="<?php echo $row_user['id']; ?>" readonly><br />
    <label for="name">Nome:</label><br />
    <input type="text" name="name" id="name" value="<?php echo $row_user['nome']; ?>" readonly><br />
    <label for="occupation">Cargo:</label><br />
    <input type="text" name="occupation" id="occupation" value="<?php echo $row_user['cargo']; ?>" readonly><br />
    <label for="salary">Salário:</label><br />
    <input type="number" name="salary" id="salary" value="<?php echo $row_user['salario']; ?>" readonly><br />
    <label for="legalDependents">Total de dependentes:</label><br />
    <input type="number" name="legalDependents" id="legalDependents" value="<?php echo $row_user['total_dependentes']; ?>" readonly><br />
    <label for="email">E-mail:</label><br />
    <input type="email" name="email" id="email" value="<?php echo $row_user['email']; ?>" readonly><br /><br />
    <button class="bt bt-danger" type="submit">Excluir Dados</button>
    <a class="bt" href="index.php">Cancelar</a>
</form>

<?php
    $connection->close();
?>