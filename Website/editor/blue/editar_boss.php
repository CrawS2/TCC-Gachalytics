<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
    <h2>Edit Game</h2>
    <br>
        <form action="editar_boss.php" method="post">
            <?php 

                if(isset($_POST["name"]))
                {
                   $name       = $_POST["name"];
                   $description       = $_POST["description"];
                   $codigo     = $_SESSION["codigo"];
                   $sql = "update bosses set nome_boss ='$name', desc_boss='$description' where id_boss = '$codigo'";
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
                    $sql = "SELECT id_boss, nome_boss, desc_boss, foto_boss FROM bosses WHERE jogo_boss = 4 and id_boss='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"name\">Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"$linha->nome_boss\">
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"description\">Description:</label>
                            <input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" value=\"$linha->desc_boss\">
                          </div>";
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_boss.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>