<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test CRUD - operation</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="header">
        <h1>Test CRUD</h1>
        <h2>Cadastro de Usuários</h2>
    </header>
    <main class="main">
        <div class="content overflow_y">
            <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
</body>
</html>