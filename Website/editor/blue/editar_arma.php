<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
    <h2>Edit Gun</h2>
    <br>
        <form action="editar_arma.php" method="post">
            <?php 

                if(isset($_POST["name"]))
                {
                   $name       = $_POST["name"];
                   $description       = $_POST["description"];
                   $codigo     = $_SESSION["codigo"];
                   $sql = "update arma set nome_arma ='$name', desc_arma='$description' where id_arma = '$codigo'";
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
                    $sql = "SELECT id_arma, nome_arma, desc_arma, foto_arma FROM arma WHERE jogo_arma = 4 and id_arma='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"name\">Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"$linha->nome_arma\">
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"description\">Description:</label>
                            <input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" value=\"$linha->desc_arma\">
                          </div>";
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_arma.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>