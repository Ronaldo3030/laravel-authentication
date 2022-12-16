<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro</title>
</head>

<body>
  <h1>Cadastro</h1>
  <a href="/">voltar</a>
  <form action="" method="post">
    @csrf
    <label for="nome">Nome</label><br>
    <input type="text" name="nome"><br>
    <label for="email">Email</label><br>
    <input type="text" name="email"><br>
    <label for="senha">Senha</label><br>
    <input type="text" name="senha"><br>
    <input type="submit" value="Cadastrar">
  </form>
</body>

</html>
