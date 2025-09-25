<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
      <h2>Wish to delete this user?</h2><br>
        <form action="excluir_usuario.php" method="post">
            <?php 
                if(isset($_POST["nome"]))
                {
                   $codigo     = $_SESSION["codigo"];

                   $sql = "delete from admin where id_admin = '$codigo'";

                    $conexao->query($sql);
                    
                    echo "<div class=\"alert alert-success\">
                              <strong>Parabéns!</strong> 
                              Excluido com sucesso!
                          </div>";

                    echo "<script>
                            alert('Excluido com sucesso!');
                          </script>";
                          
                          echo "<div class=\"form-group\">
                          <a href=\"consultar_usuario.php\" class=\"btn btn-primary\">Voltar</a></div>";
                }
                if(isset($_GET["codigo"]))
                {
                    $codigo = $_GET["codigo"];
                    $_SESSION["codigo"] = $codigo;
                    $sql = "select * from admin where id_admin='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Nick:</label> $linha->nick_admin
                            <input type='hidden' name='nome' value=''>
                          </div>";
                    
                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Email:</label> $linha->email_admin
                          </div>";
                  
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_usuario.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>