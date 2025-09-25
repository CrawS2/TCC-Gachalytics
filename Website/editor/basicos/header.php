<body>
  <style>
    html{
      margin: 0;
    }
    body{
      margin: 0;
      overflow-x: hidden;
      background-color: #333;
    }
    .nav-item{
      margin-right: 2vh;
    }
    #corpo{
      background-size: cover;
      background-position: center;
      padding-top: 5vh;
      color: white;
    }
    th{
      font-size: 20px;
    }
    td{
      font-size: 18px;
    }
  </style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="width:100%">
  <a class="navbar-brand" href="../inicio.php">Home</a>
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="../../../Gachalytics/editor/users/consultar_usuario.php">Usuários</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../../../Gachalytics/editor/games/consultar_jogo.php">Jogos</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Blue Archive</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="../../../Gachalytics/editor/blue/consultar_personagem.php">Characters</a>
        <a class="dropdown-item" href="../../../Gachalytics/editor/blue/consultar_arma.php">Guns</a>
        <a class="dropdown-item" href="../../../Gachalytics/editor/blue/consultar_boss.php">Bosses</a>
        <a class="dropdown-item" href="../../../Gachalytics/editor/blue/consultar_modo.php">Modes</a>
      </div>
    </li>
    <li class="nav-item">
      <a style="position:relative; left: 136vh;" class="nav-link" href="sair.php">Sair</a>
    </li>
    <li class="nav-item">
      <a style="position:relative; left: 110vh;" class="nav-link" href="../../../Gachalytics/homepage/index.php">Go to Main Page</a>
    </li>
  </ul>
</nav>
<div id="corpo">
<div class="container">
