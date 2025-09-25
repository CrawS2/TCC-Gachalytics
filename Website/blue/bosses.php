<?php
include '../general/head.php'
?>
<!--Add + coisas-->
<title>Raid Analysis | Blue Archive</title>
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
        $sql = "SELECT foto_guia, nome_guia, desc_guia, date_format(data_guia,'%m/%d/%Y') as data_guia FROM guias WHERE id_guia = 4";
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
    <div class= content>
        <span style = "font-size: 35px"><b>Introduction</b></span><hr><br>
        <li>In <b>Blue Archive</b> there is a game mode called <b>Total Assualt</b>, commonly reffered as raids. On this mode, you'll fight this game's bosses in different environments to earn points and increase your rankings on the leaderboard. Each boss has some unique mechanic and strategy to beat them, also, most of them are divided into phases, so be prepared for a long fight.</li>
        <li>There are some characteristics that are shared among all bosses, which are:
        <ul>- Each fight lasts for a max of 4 minutes;</ul>
        <ul>- You have a total of 3 tickets per day to fight them;</ul>
        <ul>- <b>All</b> raids last for 6 days at max;</ul>
        <ul>- The Point rewards for all raids are the same: Artifacts, Activity/EXP reports, Enhancement Stones, Eligmas, and, most importantly, Pyroxenes!</ul>
        <ul>- For Ranking rewards, you'll always get: Total Assualt coins, Rare Total Assualt Coins, Pyroxenes, and a Trophy, that can be placed on your <b>Cafe</b> as decoration. All these rewards vary depending of your final rank.</ul></li>
        <li>Now, here's a list of all the game's bosses:</li>
    </div>
    <?php
        $sql = "SELECT nome_boss, desc_boss, foto_boss FROM bosses WHERE jogo_boss = 4";
        $resultado = $conn->query($sql);
         while($linha = $resultado->fetch_object())
        {
            echo "<div class = 'content'>";
            echo "<span style = 'font-size: 35px'><b>$linha->nome_boss</b></span><hr><br>";
            echo "<img class='imgguide' src='../imagens/guias_blue/Bosses/$linha->foto_boss' alt = '$linha->nome_boss'>";
            echo "<li>$linha->desc_boss</li>";
            echo "</div>";
        }
    ?> 
    
<?php
include '..\general\footer.php'
?>