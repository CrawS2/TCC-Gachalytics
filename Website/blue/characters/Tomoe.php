<?php
include '../../general/head.php';
?>
<title>Airi (Band) Guide | Blue Archive</title>
<link rel="stylesheet" href="../../general/character.css">
<script src="../../general/tabs.js"></script>
</head>
<?php
include '../../general/header.php';
?>
<style>
    .background{
        background-image: url(../../imagens/fundos/blue.jpg);
    }
    .character-banner{
        background-image: url(../../imagens/guias_blue/blue_banner.png);
    }
    <?php
        $sql ="SELECT estilo_elemento from elemento where id_elemento = 2";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_object();
        echo "$linha->estilo_elemento";
    ?>
</style>
<div class="character-banner">
    <div class="left-object">
        <?php
            $sql = 'SELECT nome_personagem, foto_personagem, desc_personagem FROM personagem WHERE id_personagem = 28';
            $resultado = $conn->query($sql);
            $linha = $resultado->fetch_object();
        ?>
    <h1 class="character-name"><?= htmlspecialchars($linha->nome_personagem); ?></h1>
    <span class="sub-title">Overview: Skills, Stats and Teams</span>
    </div>
    <div class="character-img">
        <img style="height: 22vh;" src="<?= htmlspecialchars($linha->foto_personagem); ?>" alt="character-image">
    </div>
</div>
<div class="character-intro">
    <h2 class="content-title">Introduction</h2><hr><br>
    <span class="content-text"><?= htmlspecialchars($linha->desc_personagem); ?></span>
</div>
<div class="tabs">
    <button class="tab active" onclick="openTab(event, 'aba1')">Overall</button>
    <button class="tab" onclick="openTab(event, 'aba2')">Review and Usage</button>
    <button class="tab" onclick="openTab(event, 'aba3')">Teams</button>
</div>
<div class="tab-content" id="aba1" style="display: block;">
    <h2 class="content-title">Skills</h2><hr><br><br>
    <div class='skills'>
        <?php
            $sql ="SELECT habilidade.nome_habilidade, habilidade.tipo_habilidade, habilidade.desc_habilidade, habilidade.info_habilidade, skill_type.nome_type, skill_type.id_type FROM habilidade RIGHT JOIN skill_type ON habilidade.tipo_habilidade = skill_type.id_type WHERE habilidade.personagem_habilidade = 28 AND habilidade.tipo_habilidade not in ('5','6')";
            $resultado = $conn->query($sql);
            while($linha = $resultado->fetch_object())
            {
                echo"<div class='skill-box'>
            <div class='skill-header'>
                <div class='skill-type'><span style='font-weight:600; position:relative; top: 35%'>$linha->nome_type</span></div>
                <div class='skill-info'>
                    <span class='skill-name'>$linha->nome_habilidade</span><br>
                    <span class='skill-add'>$linha->info_habilidade</span></div></div>
                <div class='skill-desc'>$linha->desc_habilidade<span></span></div>
            </div>";
            }
        ?>
    </div>
    <h2 class="content-title">Weapon</h2><hr><br>
    <div class="weapon">
        <?php
            $sql = "SELECT nome_arma, foto_arma, desc_arma from arma where id_arma = 28";
            $resultado = $conn->query($sql);
            $linha = $resultado->fetch_object();
            echo "<img class='weapon-img' src='$linha->foto_arma'>
            <div class='weapon-info'>
                <span class='weapon-name'>$linha->nome_arma</span><br><br>
                <span class='weapon-desc'>$linha->desc_arma</span>
            </div>";
        ?>
        <div class="weapon-skill">
            <?php
                $sql ="SELECT habilidade.nome_habilidade, habilidade.tipo_habilidade, habilidade.desc_habilidade, habilidade.info_habilidade, skill_type.nome_type, skill_type.id_type FROM habilidade RIGHT JOIN skill_type ON habilidade.tipo_habilidade = skill_type.id_type WHERE habilidade.personagem_habilidade = 28 AND habilidade.tipo_habilidade = 5";
                $resultado = $conn->query($sql);
                while($linha = $resultado->fetch_object())
                {
                    echo"<div class='skill-box'>
                <div class='skill-header'>
                    <div class='skill-type'><span style='font-weight:600; position:relative; top: 35%'>$linha->nome_type</span></div>
                    <div class='skill-info'>
                        <span class='skill-name'>$linha->nome_habilidade</span><br>
                        <span class='skill-add'>$linha->info_habilidade</span></div></div>
                    <div class='skill-desc'>$linha->desc_habilidade<span></span></div>
                </div>";
                }
            ?>
        </div>
    </div>
    
</div>
<div class="tab-content" id="aba2" style="display: none;">
    <h2 class="content-title" >Review</h2><hr><br>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
</div>
<div class="tab-content" id="aba3" style="display: none;">
    <h2 class="content-title" >Team Analysis</h2><hr><br>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
    <p class="content-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat in voluptatum enim, tempora hic culpa porro illo eligendi voluptas et, laudantium minima amet, temporibus voluptatibus earum rerum impedit quia? Vitae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet soluta rem, sequi ut veritatis corporis nobis tenetur commodi ipsum et dicta numquam optio mollitia, id nisi quibusdam neque. Consequuntur, enim.</p>
</div>
<?php
include '../../general/footer.php'
?>