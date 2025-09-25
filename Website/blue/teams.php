<?php
include '../general/head.php'
?>
<!--Add + coisas-->
<title>Team Building Guide | Blue Archive</title>
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
                $sql = "SELECT foto_guia, nome_guia, desc_guia, date_format(data_guia,'%m/%d/%Y') as data_guia FROM guias WHERE id_guia = 2";
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
            <div class="content">
                <span style = "font-size: 30px"><b>Introduction</b></span>
                <hr>
                <li>As a Strategy RPG, team building is a essential gameplay factor of Blue Archive. In this guide, we'll tell you the recommendations and tips to effectively build a team in Blue Archive. You can check the characters that you want to get on your teams by looking in the Character's page for more details about them. </li>
                <br>
                <li>When building a team, you have to consider these following factors:
                    <ul>- Synergy</ul>
                    <ul>- Occasions</ul>
                    <ul>- Characther's Rank</ul>
                    <ul>- Environment Affinity</ul>
                    <ul>- Attack and Armor types</ul>
                </li>
            </div>
            <div class="content">
                <span style = "font-size: 30px"><b>Team Synergy</b></span>
                <hr>
                <li>The first thing you want to check is the synergy between your characters. A lot of skills in this game, mainly Sub skills, are focused on buffing other allies on the party, so, you want to see other characther that synergize with these buffs and how can you get the most value of them. With you have a good team synergy, you can enhance your combat capabilities to a really high level.</li>  
            </div>
            <div class="content">
                <span style = "font-size: 30px"><b>Occasions</b></span>
                <hr>
                <li>In Blue Archive, you have game modes that focus on different ways of combat, for example, missions focus more on AoE scenarios, while Total/Grand Assault focus on Single-Target scenarios, so, you really want to analyze which scenario you are so that the combat goes smoothly. The three scenarios that you'll see the most are:
                    <ul>- <b>Single-Target Combat:</b> In this occasion, you normally have a boss enemy that you'll encounter. The ideal team for this scenario is a Hyper-Carry team, that focus all your buffs to one DPS, so that he can deal a TON of damage to the boss.</ul>
                    <ul><b>- AoE Combat:</b>: On this one, there will be a lot of enemies on the screen, and for that, you'll need a way to deal damage to every single one of them, and, of course, a buffer that can amplify your whole team overall performance. Normally, you won't see debuffers, since there are not much students that have significant negative effects in AoE, also, Tanks are really valuable in this moments, since your damage dealers can't be vulnerable to taking hits in this game.</ul>
                    <ul><b>- Defensive Combat:</b> And the last scenario is really unique, this one is mostly seen on the PvP mode, in it, tanks are really the queens of the game, most teams are made around them and trying to stall the game to the max, just to see who's gonna lose their units first, making them lose the game.</ul>
                </li>
            </div>
            <div class="content">
                <span style = "font-size: 30px"><b>Character Rank</b></span>
                <hr>
                <li>All characters in Blue Archive have ranks, that scale from 1 to 3 stars and all can be upgraded to 5-Star rank, in which you unlock the student's unique weapon.</li>
                <li>Ranking up not only increases the student's stats, but also unlocks them new skills that they can use. The skill obtaining order is as follows:</li>
                <ul>- 1-Star Rank starts with: <b>EX Skill</b> and <b>Normal Skill</b></ul>
                <ul>- 2-Star Rank unlocks: <b>Passive Skill</b></ul>
                <ul>- 3-Star Rank unlocks: <b>Sub Skill</b></ul>
                <li>So, having characthers with higher ranks are the priorities when building your teams.</li>
            </div>
            <div class="content">
                <span style = "font-size: 30px"><b>Environment Affinity</b></span>
                <hr>
                <li>Each characther in the game has a affinity stat that is related to the three types of Environment (Urban, Outdoor and Indoor).</li>
                <li>This affinity affects the characther's overall damage and also ther chance and effectiveness of hiding behind cover. This means that the characther's perfomance are direcly associated with these environments.</li>
                <li>The table below details these stats:</li>
                <br>
                <table class="table" style = "width: 40%;">
                    <thead>
                        <tr>
                            <th>Affinity Rank</th>
                            <th>Icon</th>
                            <th>DMG Modifier</th>
                            <th>Cover effectiveness</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SS</td>
                            <td><img src="" alt="SS Rank"></td>
                            <td>130%</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td><img src="" alt="S Rank"></td>
                            <td>120%</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td><img src="" alt="A Rank"></td>
                            <td>110%</td>
                            <td>45%</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td><img src="" alt="B Rank"></td>
                            <td>100%</td>
                            <td>30%</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td><img src="" alt="C Rank"></td>
                            <td>90%</td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td><img src="" alt="D Rank"></td>
                            <td>80%</td>
                            <td>0%</td>
                        </tr>
                    </tbody>
                 </table>
                 <br>
                <li><b>*Note:</b> These informations are taken from: <a href="https://bluearchive.wiki/wiki/Combat_basics">https://bluearchive.wiki/wiki/Combat_basics;</a></li>
                <li><b>*Note 2:</b>The <b>SS Rank</b> does not appear in the beginning, and is reached by upgranding characther's unique weapons</li>
            </div>
            <div class="content">
                <span style = "font-size: 30px"><b>Attack and Armor type</b></span>
                <hr>
                <li>The most essential aspect of this game's combat is the damage and armor types. This system works like this: the student's damage type has to match the enemies armor type (Example: you should use <span>Mystic</span> attacks againts <span>Special</span>-armored enemies).</li>
                <li>When you are in attack type advantage, the attack gains a 200% damage modifier, while having desavantage makes your attacks have a 50% damage modifier. This mechanic is one of the most impactful throughout the whole game, mainly for damage dealers.</li>
                <li>This table right here shows each damage and armor type, also showing the modifiers:</li>
                <br>
                <table class="table" style = "width: 50%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Normal</th>
                            <th style = "color:#cc2d2d;">Explosive</th>
                            <th style = "color:#d4d453;">Penetration</th>
                            <th style = "color:#5c92c4;">Mystic</th>
                            <th style = "color:#9c8bc4;">Sonic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style = "color:#cc2d2d;">Light Armor</td>
                            <td>100%</td>
                            <td>200%</td>
                            <td><i>50%</i></td>
                            <td>100%</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td style = "color:#d4d453;">Heavy Armor</td>
                            <td>100%</td>
                            <td>100%</td>
                            <td>200%</td>
                            <td><i>50%</i></td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td style = "color:#5c92c4;">Special Armor</td>
                            <td>100%</td>
                            <td><i>50%</i></td>
                            <td>100%</td>
                            <td>200%</td>
                            <td>150%</td>
                        </tr>
                        <tr>
                            <td style = "color:#9c8bc4;">Elastic Armor</td>
                            <td>100%</td>
                            <td><i>50%</i></td>
                            <td>100%</td>
                            <td>100%</td>
                            <td>200%</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <li><b>*Note:</b> Most enemies deal <b>Normal</b> damage, so don't be concerned about your student's armor!</li>
            </div>
</div>
<?php
include '..\general\footer.php'
?>
