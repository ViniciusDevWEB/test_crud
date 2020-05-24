<div class="title">Cadastrar Usuário<hr></div><br />
<form method="POST" action="operation.php?dir=scripts&file=data_set">
    <label for="name">Nome:</label><br />
    <input type="text" name="name" id="name" required><br />
    <label for="occupation">Cargo:</label><br />
    <input type="text" name="occupation" id="occupation" required><br />
    <label for="salary">Salário:</label><br />
    <input type="number" name="salary" id="salary" required><br />
    <label for="legalDependents">Total de dependentes:</label><br />
    <input type="number" name="legalDependents" id="legalDependents" required><br />
    <label for="email">E-mail:</label><br />
    <input type="email" name="email" id="email" required><br /><br />
    <button class="bt" type="submit">Cadastrar</button>
    <a class="bt" href="index.php">Voltar à página inicial</a>
</form>