<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
    <h2>Edit Game</h2>
    <br>
        <form action="editar_jogo.php" method="post">
            <?php 

                if(isset($_POST["name"]))
                {
                   $name       = $_POST["name"];
                   $launch = $_POST["launch"];
                   $description       = $_POST["description"];
                   $codigo     = $_SESSION["codigo"];
                   $sql = "update jogo set nome_jogo ='$name', lancamento='$launch', desc_jogo='$description' where id_jogo = '$codigo'";
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
                    $sql = "select id_jogo, nome_jogo, date_format(lancamento,'%m/%d/%Y') as lancamento, desc_jogo, jogo_button from jogo where id_jogo='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"name\">Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"$linha->nome_jogo\">
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"launch\">Launch Date:</label>
                            <input type=\"date\" class=\"form-control\" id=\"launch\" name=\"launch\" placeholder=\"XX/XX/XX\" value=\"$linha->lancamento\">
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"description\">Description:</label>
                            <input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" value=\"$linha->desc_jogo\">
                          </div>";
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_jogo.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>