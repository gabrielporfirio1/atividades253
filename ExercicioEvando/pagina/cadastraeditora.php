<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Livro</title>
	<style>
	.custom-div {
    width: 500px;
    height:300px;
    background-color: lightblue;
	padding: 20px;
} 
</style>
</head>
<body>

<div class="custom-div mx-auto">
    <form method ="POST" action="cadastraeditorabanco">
	<h2 class="mb-4">Cadastro de Editora</h2>
        <div class="mb-3">
            <label for="nomeeditora" class="form-label">Nome Editora</label>
            <input type="text" class="form-control" name="nomeeditora" id="nomeeditora" placeholder="Digite nome Editora" required>
        </div>
        <div class="mb-3">
            <label for="paiseditora" class="form-label">País Editora</label>
            <input type="text" class="form-control" name="paiseditora" id="paiseditora" placeholder="Digite País Editora" required>
        </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
</body>
</html>
