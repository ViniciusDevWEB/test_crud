<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test CRUD - set data base</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="header">
        <h1>Set Data Base</h1>
    </header>
    <main class="main">
        <div class="content">
            <?php
                require_once "scripts/connection.php";

                $connection = newConnection(null);

                $sql_db = 'CREATE DATABASE IF NOT EXISTS test_crud';
                $sql_table = 'CREATE TABLE IF NOT EXISTS users (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    nome VARCHAR(100) NOT NULL,
                    cargo VARCHAR(20) NOT NULL,
                    salario FLOAT NOT NULL,
                    data_admissao DATE NOT NULL,
                    total_dependentes INT(2),
                    email VARCHAR(100)
                )';

                $set_db = $connection->query($sql_db);

                if($set_db) { 
                    $connection = newConnection();
                    $set_table = $connection->query($sql_table); 
                }
                
                if($set_db && $set_table) {
                    echo "<h2>Base de Dados criada com sucesso!</h2>";
                    echo "<hr /><br />";
                    echo "<a class='bt' href='index.php'>ir para aplicação</a>";
                } else {
                    echo "Error: ". $connection->error;
                }

                $connection->close();
            ?>
    </main>
</body>
</html>