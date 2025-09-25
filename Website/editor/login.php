<?php
  if(isset($_POST["usuario"]))
  {
      $usuario = $_POST["usuario"];
      $senha   = $_POST["senha"];
      include '../editor/basicos/conexao.php';

      $sql = "select * from admin where nick_admin='$usuario'";

      //echo "$sql";

      $resultado = $conexao->query($sql);

      if($resultado->num_rows == 1)
      {
            $linha   = $resultado->fetch_object();
            $senhaBD = $linha->senha_admin;
            $nick      = $linha->nick_admin;
            $id      = $linha->id_admin;

            if($senhaBD == sha1($senha))
            {

                session_start();
                $_SESSION["logado"] = "S";
                $_SESSION["nick"]   = $nick;
                $_SESSION["id"]     = $id;

                header("Location: inicio.php");
            }
            else
            {
                include("msg_erro.php");
            }
      }
      else
      {
          include("msg_erro.php");
      }



  }
  else
  {
?>
<style>
 #corpo{
  padding-top: 25vh;
  width: 100%;
  height: 100vh;
  background-color: #333;
  color: white;
 }
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Tela de Login</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
  <body>
    <div id="corpo">
      <div class="container">
        <h2>Welcome!</h2>
          <form action="login.php" method="post">
                <div class="form-group">
                  <label for="email">Username/Nickname:</label>
                  <input type="text" class="form-control" id="usuario" placeholder="Username..." name="usuario">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="senha" placeholder="Password..." name="senha">
                </div>
                <button style="background-color: purple; border-color:white" type="submit" class="btn btn-success">Enter</button>
          </form>
      </div>
    </div>
  </body>
</html>
<?php
}
?>
