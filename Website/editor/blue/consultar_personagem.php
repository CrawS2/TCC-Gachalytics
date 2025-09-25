<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
  <h2>Blue Archive | Characters</h2>
  <br>
  <button style="margin-right: 2vh;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">(+) New Character</button>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myPesquisa">Search</button>
    <div style="color: black;" class="modal" id="myPesquisa">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Search Characters</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
              <form action="consultar_personagem.php" method="post">
                  <div class="form-group">
                      <label for="nome">Name:</label>
                      <input type="text" class="form-control" id="nome" name="pesquisa" required>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-success" value="Confirm">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  <div style="color: black;" class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Character</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
              <form action="consultar_personagem.php" method="post">
                  <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                      <label for="desc">Description:</label>
                      <input type="text" class="form-control" id="description" name="description">
                  </div>
                  <div class="form-group">
                      <label for="rarity">Rarity:</label>
                      <select style="width:12vh" name="rarity" id="rarity">
                          <Option value="1">1-Star</Option>
                          <Option value="2">2-Star</Option>
                          <Option value="3">3-Star</Option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="element">Element:</label>
                      <select style="width:12vh" name="element" id="element">
                          <Option value="1">Explosive</Option>
                          <Option value="2">Penetration</Option>
                          <Option value="3">Mystic</Option>
                          <Option value="4">Sonic</Option>
                      </select>
                  </div>
                  <div class="form-group">
                  <label for="role">Role:</label>
                      <select style="width:12vh" name="role" id="role">
                          <Option value="1">Attacker</Option>
                          <Option value="2">Tank</Option>
                          <Option value="3">Support</Option>
                          <Option value="4">Healer</Option>
                          <Option value="5">Tactical Support</Option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo" id="photo">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Confirm">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>
    <table style="margin-top: 3vh; color:white; width:120%; margin-bottom:0px;" class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Photo</th>
          <th>Rarity</th>
          <th>Element</th>
          <th>Role</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if(isset($_POST["name"]))
            {
                $name       = $_POST["name"];
                $description      = ($_POST["description"]);
                $rarity      = ($_POST["rarity"]);
                $element      = ($_POST["element"]);
                $role      = ($_POST["role"]);
                $photo      = ($_POST["photo"]);
                $sql = "INSERT into personagem (jogo_personagem,nome_personagem,desc_personagem,raridade_personagem,elemento_personagem,classe_personagem,foto_personagem) values
                ('4','$name','$description','$rarity','$element','$role','$photo')";

                $conexao->query($sql);
                echo "<script> alert('Registrado com sucesso!');</script>";
              }
                $filtro = "";
                if(isset($_POST["pesquisa"]))
                {
                  $nome       = $_POST["pesquisa"];
                  $filtro     = "AND personagem.nome_personagem like '%$nome%'";
                }
              $sql = "SELECT personagem.id_personagem, personagem.desc_personagem, personagem.nome_personagem, personagem.foto_personagem, raridades.nome_raridade, elemento.nome_elemento, classe.nome_classe FROM personagem 
                    INNER JOIN raridades ON personagem.raridade_personagem = raridades.id_raridade 
                    INNER JOIN elemento ON personagem.elemento_personagem = elemento.id_elemento 
                    INNER JOIN classe ON personagem.classe_personagem = classe.id_classe 
                    WHERE personagem.jogo_personagem = 4 $filtro order by personagem.id_personagem";
              $resultado = $conexao->query($sql);
              while($linha = $resultado->fetch_object())
              {
                  echo "<tr>
                          <td>$linha->id_personagem</td>
                          <td>$linha->nome_personagem</td>
                          <td>$linha->desc_personagem</td>
                          <td>$linha->foto_personagem</td>
                          <td>$linha->nome_raridade</td>
                          <td>$linha->nome_elemento</td>
                          <td>$linha->nome_classe</td>
                          <td><a style = 'color:white' class='btn btn-warning' href='editar_personagem.php?codigo=$linha->id_personagem'>Edit</a></td>
                          <td><a style = 'color:white' class='btn btn-danger' href='excluir_personagem.php?codigo=$linha->id_personagem'>Delete</a></td>
                        </tr>";
              }
          ?>
      </tbody>
    </table>
<?php include '../basicos/footer.php'; ?>