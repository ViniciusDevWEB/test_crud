<div class="title">Lista de Usuários<hr /></div><br />
<a class="bt" href="index.php">Voltar à pagina inicial</a><br /><br />


<?php
require_once "connection.php";

$sql = "SELECT id, nome, cargo, data_admissao FROM users";

$connection = newConnection();
$set = $connection->query($sql);

$users_registration = [];

if($set->num_rows > 0) {
    while($row = $set->fetch_assoc()) {
        $users_registration[] = $row;
    }
} elseif($connection->error) {
    echo "Erro: " . $connection->error;
}

$connection->close();
?>

<table>
    <thead>
        <th width=5%>Cod.</th>
        <th width=55%>Nome</th>
        <th style="width: 20%; text-align: center">Cargo</th>
        <th style="width: 20%; text-align: center">Data de Admissao</th>
    </thead>
    <tbody>
        <?php foreach($users_registration as $row_user): ?>
            <tr>
                <td style="text-align: center"><?= $row_user['id'] ?></td>
                <td><?= $row_user['nome'] ?></td>
                <td style="text-align: center"><?= $row_user['cargo'] ?></td>
                <td style="text-align: center"><?= date("d/m/Y", strtotime($row_user['data_admissao'])) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table><br />
<a class="bt" href="index.php">Voltar à pagina inicial</a>