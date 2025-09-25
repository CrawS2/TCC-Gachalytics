<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
      <h2>Wish to delete this Game?</h2><br>
        <form action="excluir_jogo.php" method="post">
            <?php 
                if(isset($_POST["nome"]))
                {
                   $codigo     = $_SESSION["codigo"];

                   $sql = "delete from jogo where id_jogo = '$codigo'";

                    $conexao->query($sql);
                    
                    echo "<div class=\"alert alert-success\">
                              <strong>Parabéns!</strong> 
                              Excluido com sucesso!
                          </div>";

                    echo "<script>
                            alert('Excluido com sucesso!');
                          </script>";
                          
                          echo "<div class=\"form-group\">
                          <a href=\"consultar_jogo.php\" class=\"btn btn-primary\">Back</a></div>";
                }
                if(isset($_GET["codigo"]))
                {
                    $codigo = $_GET["codigo"];
                    $_SESSION["codigo"] = $codigo;
                    $sql = "select id_jogo, nome_jogo, date_format(lancamento,'%m/%d/%Y') as lancamento, desc_jogo from jogo where id_jogo='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Name:</label> $linha->nome_jogo
                            <input type='hidden' name='nome' value=''>
                          </div>";
                    
                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Launch Date:</label> $linha->lancamento
                          </div>";
                    
                    echo "<div class=\"form-group\">
                          <label for=\"nome\">Description:</label> $linha->desc_jogo
                        </div>";
                  
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_jogo.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>