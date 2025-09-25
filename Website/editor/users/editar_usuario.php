<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
    <h2>Edit User</h2>
    <br>
        <form action="editar_usuario.php" method="post">
            <?php 

                if(isset($_POST["nick"]))
                {
                   $nick       = $_POST["nick"];
                   $email = $_POST["email"];
                   $codigo     = $_SESSION["codigo"];
                   $sql = "update admin set nick_admin ='$nick', email_admin='$email' where id_admin = '$codigo'";
                  $conexao->query($sql);
                    echo "<div class=\"alert alert-success\">
                              <strong>Parabéns!</strong> 
                              Atualizado com sucesso!
                          </div>";
                    echo "<script>
                            alert('Atualizado com sucesso!');
                          </script>";
                    $_GET["codigo"] = $codigo;
                }
                if(isset($_GET["codigo"])) //verifica se o codigo esta na url
                {
                    $codigo = $_GET["codigo"];
                    $_SESSION["codigo"] = $codigo; //coloca o codigo na sessão
                    $sql = "select * from admin where id_admin='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Nick:</label>
                            <input type=\"text\" class=\"form-control\" id=\"nick\" name=\"nick\" value=\"$linha->nick_admin\">
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"quantidade\">Email:</label>
                            <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\" maxlength=\"5\" value=\"$linha->email_admin\">
                          </div>";
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_usuario.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>