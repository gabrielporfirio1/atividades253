<?php
$anodenasc = $_POST['anodenasc'];
$nomefuncionario = $_POST['nomefuncionario'];
$salariofuncionario = $_POST['salariofuncionario'];

$sql = "INSERT INTO funcionario(nome_funcionario,ano_nasc_funcionario,salario_funcionario) VALUES('$anodenasc','$nomefuncionario','$salariofuncionario')";
$inserir = $conexao->query($sql);
   if ($inserir){
    header('Location:funcionario');
   }
?>