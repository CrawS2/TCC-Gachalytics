<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
    <h2>Edit Character</h2>
    <br>
        <form action="editar_personagem.php" method="post">
            <?php 

                if(isset($_POST["name"]))
                {
                  $name       = $_POST["name"];
                  $description      = ($_POST["description"]);
                  $rarity      = ($_POST["rarity"]);
                  $element      = ($_POST["element"]);
                  $role      = ($_POST["role"]);
                  $codigo     = $_SESSION["codigo"];
                  $sql = "UPDATE personagem set nome_personagem ='$name', desc_personagem='$description', raridade_personagem ='$rarity', elemento_personagem = '$element', classe_personagem = '$role' where jogo_personagem = 4 AND id_personagem = '$codigo'";
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
                if(isset($_GET["codigo"])) 
                {
                    $codigo = $_GET["codigo"];
                    $_SESSION["codigo"] = $codigo;
                    $sql = "SELECT personagem.id_personagem, personagem.desc_personagem, personagem.nome_personagem, personagem.foto_personagem, raridades.nome_raridade, elemento.nome_elemento, classe.nome_classe FROM personagem 
                    INNER JOIN raridades ON personagem.raridade_personagem = raridades.id_raridade 
                    INNER JOIN elemento ON personagem.elemento_personagem = elemento.id_elemento 
                    INNER JOIN classe ON personagem.classe_personagem = classe.id_classe 
                    WHERE personagem.jogo_personagem = 4 and id_personagem='$codigo'";
                    $resultado = $conexao->query($sql);
                    $linha = $resultado->fetch_object();

                    echo "<div class=\"form-group\">
                            <label for=\"name\">Name:</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value=\"$linha->nome_personagem\">
                          </div>";
                    echo "<div class=\"form-group\">
                            <label for=\"description\">Description:</label>
                            <input type=\"text\" class=\"form-control\" id=\"description\" name=\"description\" value=\"$linha->desc_personagem\">
                          </div>";
                    echo "<div class='form-group'>
                              <label for='rarity'>Rarity:</label>
                              <select style='width:12vh' name='rarity' id='rarity'>
                                  <Option value='1'>1-Star</Option>
                                  <Option value='2'>2-Star</Option>
                                  <Option value='3'>3-Star</Option>
                              </select>
                          </div>";
                    echo "<div class='form-group'>
                              <label for='element'>Element:</label>
                              <select style='width:12vh' name='element' id='element'>
                                  <Option value='1'>Explosive</Option>
                                  <Option value='2'>Penetration</Option>
                                  <Option value='3'>Mystic</Option>
                                  <Option value='4'>Sonic</Option>
                              </select>
                          </div>";
                    echo "<div class='form-group'>
                          <label for='role'>Role:</label>
                          <select style='width:12vh' name='role' id='role'>
                              <Option value='1'>Attacker</Option>
                              <Option value='2'>Tank</Option>
                              <Option value='3'>Support</Option>
                              <Option value='4'>Healer</Option>
                              <Option value='5'>Tactical Support</Option>
                          </select>
                      </div>";
                    echo "<div class='form-group'>
                    <label for='photo'>Photo:</label>
                    <input type='file' name='photo' id='photo'>
                  </div>";
                    echo "<div class=\"form-group\">
                          <input style = 'margin-right:2vh;' type=\"submit\" class=\"btn btn-success\" value=\"Confirm\">
                          <a href=\"consultar_personagem.php\" class=\"btn btn-primary\">Back</a>
                        </div>";
                }
            ?>
        </form>
<?php include '../basicos/footer.php'; ?>