<?php
include '../general/head.php'
?>
<!--Add + coisas-->
<title>Gachalytics: Blue Archive</title>
<link rel="stylesheet" href="../general/index.css">
</head>
<?php
include '../general/header.php'
?>
<style>
    .background{
        background-image: url(../imagens/fundos/blue.jpg);
    }
</style>
    <div style="font-size:30px; text-align:center;" class = welcome>
        <h1>Welcome to Gachalytics!</h1>
            <?php
                $sql = "SELECT * FROM jogo WHERE id_jogo = 4";
                $resultado = $conn->query($sql);
                $linha = $resultado->fetch_object();
                echo  "<h2>Gachalytics is a database for $linha->nome_jogo.  $linha->desc_jogo<h2>";
            ?>
    </div><br>
    <div style="text-align: center;" class='atalhos'>
        <span style="font-size:55px;" id="atalho"><b>~Shortcuts~</b></span><hr><br>
        <div class="buttons">
            <?php
            $sql = "SELECT foto_guia, nome_guia, link_guia FROM guias WHERE jogo_guia = 4";
            $resultado = $conn->query($sql);
            while($linha = $resultado->fetch_object())
            {
                echo "<div class='btn'>";
                    echo "<a style ='text-decoration: none;' href='$linha->link_guia'>";
                        echo " <div class='card'>";
                            echo "<div class = 'imgcard'>";
                                echo "<img style = 'height: 100px;' src='$linha->foto_guia'>";
                            echo "</div>";
                            echo "<div class ='cardtext'>";
                                echo "<p class='btntext'>$linha->nome_guia</p>";
                            echo "</div>";
                        echo "</div>";
                echo "</a></div>";
            }
            ?>
        </div>
        <br>
    </div>
<?php
include '../general/footer.php'
?>


