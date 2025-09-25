<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
  <h2>Games</h2>
  <br>
  <button style="margin-right: 2vh;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">(+) New Game</button>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myPesquisa">Search</button>
    <div style="color: black;" class="modal" id="myPesquisa">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Search Game</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
              <form action="consultar_jogo.php" method="post">
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
          <h4 class="modal-title">New Game</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
              <form action="consultar_jogo.php" method="post">
                  <div class="form-group">
                      <label for="nome">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="quantidade">Launch:</label>
                    <input type="date" class="form-control" id="launch" name="launch" placeholder="XX/XX/XX" required>
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
          <th>Launch Date</th>
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
                $launch      = $_POST["launch"];
                $description      = ($_POST["description"]);
                $sql = "insert into jogo (nome_jogo,lancamento,desc_jogo) values
                ('$name','$launch','$description')";

                $conexao->query($sql);
                echo "<script> alert('Registrado com sucesso!');</script>";
              }
                $filtro = "";
                if(isset($_POST["pesquisa"]))
                {
                  $nome       = $_POST["pesquisa"];
                  $filtro     = "where nome_jogo like '%$nome%'";
                }
              $sql = "select id_jogo, nome_jogo, date_format(lancamento,'%m/%d/%Y') as lancamento, desc_jogo, jogo_button from jogo $filtro order by nome_jogo";
              $resultado = $conexao->query($sql);
              while($linha = $resultado->fetch_object())
              {
                  echo "<tr>
                          <td>$linha->id_jogo</td>
                          <td>$linha->nome_jogo</td>
                          <td>$linha->lancamento</td>
                          <td>$linha->desc_jogo</td>
                          <td>$linha->jogo_button</td>
                          <td><a style = 'color:white' class='btn btn-warning' href='editar_jogo.php?codigo=$linha->id_jogo'>Edit</a></td>
                          <td><a style = 'color:white' class='btn btn-danger' href='excluir_jogo.php?codigo=$linha->id_jogo'>Delete</a></td>
                        </tr>";
              }
          ?>
      </tbody>
    </table>
<?php include '../basicos/footer.php'; ?>