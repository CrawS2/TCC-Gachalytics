<?php
include '../general/database.php';
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['search'])) {
    $search = trim($_POST['search']);
    $sql = "SELECT personagem.nome_personagem, personagem.foto_personagem, personagem.link_personagem, raridades.estilo_raridade, elemento.foto_elemento, classe.foto_classe
            FROM personagem 
            INNER JOIN raridades ON personagem.raridade_personagem = raridades.id_raridade 
            INNER JOIN elemento ON personagem.elemento_personagem = elemento.id_elemento 
            INNER JOIN classe ON personagem.classe_personagem = classe.id_classe 
            WHERE personagem.jogo_personagem = 4";
    if (!empty($search)) {
        $sql .= " AND personagem.nome_personagem LIKE ?";
        $stmt = $conn->prepare($sql);
        $searchTerm = "%$search%";
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $resultado = $stmt->get_result();
    } else {
        $resultado = $conn->query($sql);
    }
    if ($resultado && $resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='character-card'>";
            echo "<a class='character-link' href='characters/". htmlspecialchars($row['link_personagem']) ."'>";
            echo "<span class='character-name'>" . htmlspecialchars($row['nome_personagem']) . "</span>";
            echo "<img class='rarity-card' src='" . htmlspecialchars($row['estilo_raridade']) . "' alt='Rarity Style'>";
            echo "<img class='character-pic' src='../../../Gachalytics/imagens/guias_blue/Characters/" . htmlspecialchars($row['foto_personagem']) . "' alt='Character Picture'>";
            echo "<img class='icon-class' src='" . htmlspecialchars($row['foto_classe']) . "' alt='Class Icon'>";
            echo "<img class='icon-element' src='" . htmlspecialchars($row['foto_elemento']) . "' alt='Element Icon'>";
            echo "</a>";
            echo "</div>";
        }
    } else {
        echo "<span style='font-size:45px;'>No Results</span>";
    }
    exit;
}
include '../general/head.php';
?>
<title>Character List | Blue Archive</title>
<link rel="stylesheet" href="../general/character-list.css">
<script src="../general/search.js"></script>
</head>
<?php
include '../general/header.php';
?>
<style>
    .background{
        background-image: url(../imagens/fundos/blue.jpg);
    }
</style>
<div id="pageheader">
    <?php
    $sql = "SELECT foto_guia, nome_guia, desc_guia, date_format(data_guia,'%m/%d/%Y') as data_guia FROM guias WHERE id_guia = 6";
    $resultado = $conn->query($sql);
    $linha = $resultado->fetch_object();
    ?>
    <img id="headericon" src="<?= htmlspecialchars($linha->foto_guia); ?>">
    <div>
        <h2 class="headertext"><?= htmlspecialchars($linha->nome_guia); ?></h2>
        <p class="headertext"><?= htmlspecialchars($linha->desc_guia); ?></p>
        <p class="headertext">Last update on: <b><?= htmlspecialchars($linha->data_guia); ?></b></p>
    </div>
</div>
<div class="content">
    <span style="font-size: 55px;"><b>~~Characters~~</b></span><hr><br>
    <form action="characters.php" method="post" onsubmit="return false;">
        <input type="text" name="search" id="Search" placeholder="Search characters..." oninput="searchCharacters()">
    </form><br>
    <div id="results-container" style="display: flex; flex-wrap: wrap; flex-direction: row; gap: 30px;">

    </div>
</div>
<?php
include '../general/footer.php'
?>
