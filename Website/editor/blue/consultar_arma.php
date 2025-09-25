<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
  <h2>Blue Archive | Guns</h2>
  <br>
  <button style="margin-right: 2vh;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">(+) New Gun</button>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myPesquisa">Search</button>
    <div style="color: black;" class="modal" id="myPesquisa">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Search Gun:</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
              <form action="consultar_arma.php" method="post">
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
          <h4 class="modal-title">New Gun</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
              <form action="consultar_arma.php" method="post">
                  <div class="form-group">
                      <label for="nome">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                      <label for="valor">Description:</label>
                      <input type="text" class="form-control" id="description" name="description" required>
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
                $sql = "insert into arma (jogo_arma,nome_arma,desc_arma) values
                ('4','$name','$description')";

                $conexao->query($sql);
                echo "<script> alert('Registrado com sucesso!');</script>";
              }
                $filtro = "";
                if(isset($_POST["pesquisa"]))
                {
                  $nome       = $_POST["pesquisa"];
                  $filtro     = "AND nome_arma like '%$nome%'";
                }
              $sql = "SELECT id_arma, nome_arma, desc_arma, foto_arma FROM arma WHERE jogo_arma = 4 $filtro order by id_arma";
              $resultado = $conexao->query($sql);
              while($linha = $resultado->fetch_object())
              {
                  echo "<tr>
                          <td>$linha->id_arma</td>
                          <td>$linha->nome_arma</td>
                          <td>$linha->desc_arma</td>
                          <td>$linha->foto_arma</td>
                          <td><a style = 'color:white' class='btn btn-warning' href='editar_arma.php?codigo=$linha->id_arma'>Edit</a></td>
                          <td><a style = 'color:white' class='btn btn-danger' href='excluir_arma.php?codigo=$linha->id_arma'>Delete</a></td>
                        </tr>";
              }
          ?>
      </tbody>
    </table>
<?php include '../basicos/footer.php'; ?>