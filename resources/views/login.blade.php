<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>

<body>
  <h1>Login</h1>
  <a href="/cadastrar">criar conta</a>
  <form action="" method="post">
    @csrf
    <label for="email">Email</label><br>
    <input type="text" name="email"><br>
    <label for="senha">Senha</label><br>
    <input type="text" name="senha"><br>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Continuar conectado</label><br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>
