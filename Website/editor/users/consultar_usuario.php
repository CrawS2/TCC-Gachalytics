<?php
  include("../basicos/head.php");
?>
</head>
<?php
  include("../basicos/header.php");
?>
  <h2>Relação de Usuários</h2>
  <br>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">(+) Register User</button>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myPesquisa">Search</button>
    <div class="modal" id="myPesquisa">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Localizar Usuário</h4>
          <button type="button" class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
              <form action="consultar_usuario.php" method="post">
                  <div class="form-group">
                      <label for="nome">Nick:</label>
                      <input type="text" class="form-control" id="nome" name="pesquisa" required>
                  </div>

                  <div class="form-group">
                      <input type="submit" class="btn btn-success" value="Confirmar">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
              </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Novo Usuário</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
              <form action="consultar_usuario.php" method="post">
                  <div class="form-group">
                      <label for="nome">Nick:</label>
                      <input type="text" class="form-control" id="nick" name="nick" required>
                  </div>

                  <div class="form-group">
                    <label for="quantidade">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="50" required>
                  </div>

                  <div class="form-group">
                      <label for="valor">Senha:</label>
                      <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>

                    <div class="form-group">
                      <input type="submit" class="btn btn-success" value="Confirmar">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
              </form>
        </div>
      </div>
    </div>
  </div>
    <table style="margin-top: 3vh; color:white" class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nickname</th>
          <th>Email</th>
          <th>Edit</th>
          <th>Delete </th>
        </tr>
      </thead>
      <tbody>
        <?php
            if(isset($_POST["nick"]))
            {
                $nick       = $_POST["nick"];
                $email      = $_POST["email"];
                $senha      = sha1($_POST["senha"]);

                $sql = "insert into admin (nick_admin,email_admin,senha_admin)
                        values('$nick','$email','$senha')";

                $conexao->query($sql);
                echo "<script> alert('Cadastrado com sucesso!');</script>";
              }
                $filtro = "";
                if(isset($_POST["pesquisa"]))
                {
                  $nome       = $_POST["pesquisa"];
                  $filtro     = "where nick_admin like '%$nome%'";
                }

                $sql = "select * from admin $filtro order by nick_admin";
              $resultado = $conexao->query($sql);
              while($linha = $resultado->fetch_object())
              {
                  echo "<tr>
                          <td>$linha->id_admin</td>
                          <td>$linha->nick_admin</td>
                          <td>$linha->email_admin</td>
                          <td><a style = 'color:white' class='btn btn-warning' href='editar_usuario.php?codigo=$linha->id_admin'>Edit</a></td>
                          <td><a style = 'color:white' class='btn btn-danger' href='excluir_usuario.php?codigo=$linha->id_admin'>Delete</a></td>
                        </tr>";
              }
          ?>
      </tbody>
    </table>
<?php include '../basicos/footer.php'; ?>