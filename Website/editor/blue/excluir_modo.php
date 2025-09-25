<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
      <h2>Wish to delete this Game mode?</h2><br>
        <form action="excluir_modo.php" method="post">
            <?php 
                if(isset($_POST["nome"]))
                {
                   $codigo     = $_SESSION["codigo"];

                   $sql = "delete from modo where id_modo = '$codigo'";

                    $conexao->query($sql);
                    
                    echo "<div class=\"alert alert-success\">
                              <strong>Parabéns!</strong> 
                              Excluido com sucesso!
                          </div>";

                    echo "<script>
                            alert('Excluido com sucesso!');
                          </script>";
                          
                          echo "<div class=\"form-group\">
                          <a href=\"consultar_modo.php\" class=\"btn btn-primary\">Back</a></div>";
                }
                if(isset($_GET["codigo"]))
                {
                    $codigo = $_GET["codigo"];
                    $_SESSION["codigo"] = $codigo;
                    $sql = "SELECT id_modo, nome_modo, desc_modo, foto_modo FROM modo WHERE jogo_modo = 4 and id_modo='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Id:</label> $linha->id_modo
                            <input type='hidden' name='nome' value=''>
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Name:</label> $linha->nome_modo
                            <input type='hidden' name='nome' value=''>
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Description:</label> $linha->desc_modo
                          </div>";
                    echo "<div class=\"form-group\">
                          <label for=\"nome\">Photo:</label> $linha->foto_modo
                        </div>";
                  
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_modo.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>