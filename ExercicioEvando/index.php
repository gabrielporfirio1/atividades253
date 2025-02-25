<?php
  include_once("./processos/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Funcionário</title>
</head>
<body>
    <h1>Cadastro de Funcionário</h1>
    <form method="POST" action="cadastrofuncionario">
        <label for="nome">Nome do Funcionário:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="ano_nascimento">Ano de Nascimento:</label><br>
        <input type="number" id="ano_nascimento" name="ano_nascimento" min="1900" max="2025" required><br><br>

        <label for="salario">Salário:</label><br>
        <input type="number" id="salario" name="salario" step="0.01" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    <?php
    if(!isset($_GET['url'])){
    $_GET['url'] = "cadastrofuncionario";
  }
  if($_GET){
    $url = explode("/",$_GET['url']);
    $pagina = $url[0];
    switch($pagina){
      case "principal":
        include_once("./processos/cadastrofuncionario.php");
      break;
    }
} 
      ?>

</body>
</html>
