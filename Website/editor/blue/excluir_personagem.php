<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
      <h2>Wish to delete this Character?</h2><br>
        <form action="excluir_personagem.php" method="post">
            <?php 
                if(isset($_POST["nome"]))
                {
                   $codigo     = $_SESSION["codigo"];

                   $sql = "delete from personagem where id_personagem = '$codigo'";

                    $conexao->query($sql);
                    
                    echo "<div class=\"alert alert-success\">
                              <strong>Parabéns!</strong> 
                              Excluido com sucesso!
                          </div>";

                    echo "<script>
                            alert('Excluido com sucesso!');
                          </script>";
                          
                          echo "<div class=\"form-group\">
                          <a href=\"consultar_personagem.php\" class=\"btn btn-primary\">Back</a></div>";
                }
                if(isset($_GET["codigo"]))
                {
                    $codigo = $_GET["codigo"];
                    $_SESSION["codigo"] = $codigo;
                    $sql = "SELECT personagem.id_personagem, personagem.desc_personagem, personagem.nome_personagem, personagem.foto_personagem, raridades.nome_raridade, elemento.nome_elemento, classe.nome_classe FROM personagem 
                    INNER JOIN raridades ON personagem.raridade_personagem = raridades.id_raridade 
                    INNER JOIN elemento ON personagem.elemento_personagem = elemento.id_elemento 
                    INNER JOIN classe ON personagem.classe_personagem = classe.id_classe 
                    WHERE personagem.jogo_personagem = 4 and personagem.id_personagem = '$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Id:</label> $linha->id_personagem
                            <input type='hidden' name='nome' value=''>
                          </div>";

                    echo "<div class=\"form-group\">
                            <label for=\"nome\">Name:</label> $linha->nome_personagem
                            <input type='hidden' name='nome' value=''>
                          </div>";
    
                    echo "<div class=\"form-group\">
                          <label for=\"nome\">Description:</label> $linha->desc_personagem
                        </div>";

                    echo "<div class=\"form-group\">
                          <label for=\"nome\">Element:</label> $linha->nome_elemento
                        </div>";

                    echo "<div class=\"form-group\">
                        <label for=\"nome\">Rarity:</label> $linha->nome_raridade
                      </div>";

                    echo "<div class=\"form-group\">
                      <label for=\"nome\">Role:</label> $linha->nome_classe
                    </div>";
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_personagem.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>