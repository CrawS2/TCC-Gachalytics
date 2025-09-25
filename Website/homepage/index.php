<?php
include '../general/head.php'
?>
<!--Add + coisas-->
<title>Gachalytics | Homepage</title>
<script src="home.js"></script>
<link rel="stylesheet" href="home.css">
</head>
<?php
include '../general/header.php'
?>
<div class="welcome"><br>
    <h1>Welcome to Gachalytics!</h1>
    <h2>This is a website for gacha games like: Genshin Impact, Honkai: Star Rail, Zenless Zone Zero and more!</h2>
</div>
<br>
<div class="buttons">
    <div>
        <p style="font-size: 45px; text-align: center;"><b>Popular Games:</b></p>
        <div class="popular-games">
            <div class="game-button">
                <a style='text-decoration:none; max-height:240px; max-width:440px;' href=''>
                    <img class='game-img' src='../imagens/buttons/genshin.jpg' alt='Genshin Impact' onmouseenter= HoverGenshin()>
                    <span class='game-name'>Genshin Impact</span>
                </a>
            </div>
            <div class="game-button">
                <a style='text-decoration:none; max-height:240px; max-width:440px;' href=''>
                    <img class='game-img' src='../imagens/buttons/hsr.jpg' alt='Genshin Impact' onmouseenter= HoverHsr()>
                    <span class='game-name'>Honkai: Star Rail</span>
                </a>
            </div>
            <div class="game-button">
                <a style='text-decoration:none; max-height:240px; max-width:440px;' href=''>
                    <img class='game-img' src='../imagens/buttons/zzz.jpg' alt='Genshin Impact' onmouseenter= HoverZZZ()>
                    <span class='game-name'>Zenless Zone Zero</span>
                </a>
            </div>
            <div class="game-button">
                <a style='text-decoration:none; max-height:240px; max-width:440px;' href=''>
                    <img class='game-img' src='../imagens/buttons/wuwa.jpg' alt='Genshin Impact' onmouseenter= HoverWuwa()>
                    <span class='game-name'>Wuthering Waves</span>
                </a>
            </div>
        </div>
    </div>
    <div>
        <p style="font-size: 45px; text-align:center;"><b>All Games:</b></p>
        <div class="all-games">
            <?php
                $sql = "SELECT nome_jogo, jogo_button, jogo_link, jogo_function FROM jogo";
                $resultado = $conn->query($sql);
                while($linha = $resultado->fetch_object())
                {
                    echo "<div class='game-button'>";
                    echo "<a style='text-decoration:none; max-height:240px; max-width:440px;' href='$linha->jogo_link'>";
                    echo "<img class='game-img' src='../imagens/buttons/$linha->jogo_button' alt='$linha->nome_jogo' onmouseenter= $linha->jogo_function>";
                    echo "<span class='game-name'>$linha->nome_jogo</span></a></div>";
                }
            ?>
        </div>
    </div>
</div>
<?php
include '..\general\footer.php';
?>