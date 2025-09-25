<?php
include '../general/head.php'
?>
<!--Add + coisas-->
<title>Game modes | Blue Archive</title>
<link rel="stylesheet" href="../general/guides.css">
</head>
<?php
include '../general/header.php'
?>
<style>
    .background{
        background-image: url(../imagens/fundos/blue.jpg);
    }
</style>
    <div id="pageheader">
        <?php
        // Carregar informações do guia
        $sql = "SELECT foto_guia, nome_guia, desc_guia, date_format(data_guia,'%m/%d/%Y') as data_guia FROM guias WHERE id_guia = 3";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_object();
        ?>
        <img id="headericon" src="<?= htmlspecialchars($linha->foto_guia); ?>">
        <div>
            <h2 class="headertext"><?= htmlspecialchars($linha->nome_guia); ?></h2>
            <p class="headertext"><?= htmlspecialchars($linha->desc_guia); ?></p>
            <p class="headertext">Last update on: <b><?= htmlspecialchars($linha->data_guia); ?></b></p>
        </div>
    </div><br>
        <div class = content>
            <span style = "font-size: 35px"><b>Introduction</b></span><hr><br>
            <li>Since the game does not have a overworld exploration system, <b>Blue Archive</b> offers a lot of game modes. They can give you resources to level up your characther's, skills or equipment. Playing these game modes require you to spend your AP <img style = "height: 24px;" src="../imagens/guias_blue/Modes.png" title="AP"> (This game's "Energy/Resin"), exclusive tickets, or even both!</li>
        </div>
        <?php
            $sql = "SELECT nome_modo, desc_modo, foto_modo FROM modo WHERE jogo_modo = 4";
            $resultado = $conn->query($sql);
            while($linha = $resultado->fetch_object())
            {
                echo "<div class = 'content'>";
                echo "";
                echo "<span style = 'font-size: 35px'><b>$linha->nome_modo</b></span><hr><br>";
                echo "<li>$linha->desc_modo</li>";
                echo "</div>";
            }
        ?> 
<?php
include '..\general\footer.php'
?>