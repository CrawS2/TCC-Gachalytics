<?php
include '../general/head.php'
?>
<!--Add + coisas-->
<title>Game Introduction | Blue Archive</title>
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
        $sql = "SELECT foto_guia, nome_guia, desc_guia, date_format(data_guia,'%m/%d/%Y') as data_guia FROM guias WHERE id_guia = 1";
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
                <span style = "font-size: 30px"><b>Introduction</b></span>
                <hr>
            </div>
            <div class = content>
                <span style = "font-size: 30px"><b>Gameplay: Students</b></span>
                <hr>
                <li>The <b>Students</b> are the playable characters in the game. They can be obtained via <b>Recruiting</b>, this game's gacha system, or by in-game events and quests. They are divided into two sectors: <span style = "color: #cf4421; font-weight: bold;">Strikers</span> and <span style = "color: #2060e8; font-weight: bold;">Specials</span>.</li>

                <ul>- <span style = "color: #cf4421; font-weight: bold;">Strikers</span> are the characters that enter onto the field and directly attack the enemies. They mostly are Tanks or Damage dealers, but there are exceptions.</ul>

                <ul>- <span style = "color: #2060e8; font-weight: bold;">Specials</span> are the characters that play in the backline, so, they are not visible in combat. Normally they are supports, with some exceptions. </ul>
                <br>
                <span style = "font-size: 20px"><b>Character Stats:</b></span>
                <li><b>HP (Health Points)</b> - Determines how much damage a student can take before being knocked-out.</li>
                <li><b>ATK (Attack)</b> - Determines how much damage a student deals.</li>
                <li><b>DEF (Defense)</b> - Determines how much damage a student can resist the damage it takes.</li>
                <li><b>ACC (Accuracy)</b> - Determines how likely student's will hit a attack.</li>
                <li><b>EVA (Evasion)</b> - Determines how likely student's will dodge incoming hits</li>
                <li><b>CRIT. Rate (Critical Rate)</b> - Determines student's chance of causing a critical hit</li>
                <li><b>CRIT. DMG (Critical Damage)</b> - Determines the damage increase of the critical hit, in comparison to a normal hit.</li>
                <li><b>CRIT. RES (Critical Resistance)</b> - Reduces the chance of being hit by a critical strike.</li>
                <li><b>CRIT. DMG RES (Crit. DMG Resistance)</b> - Reduces the damage of critical strikes.</li>
                <li><b>CC. POWER (Crowd Control Power)</b> - Determines the chance and duration of a Crowd Control status.</li>
                <li><b>CC RES (Crowd Control Resistance)</b> - Reduces the chance and duration of a Crowd Control status.</li>
                <li><b>Healing Power</b> - Determines how powerful is a student's heal.</li>
                <li><b>Incoming Healing</b> - Increases the amount of healing a character receives</li>
                <li><b>Cost Reduction</b> - Determines the EX Special "cooldown".</li>
                <br>
            </div>
            <div class = content>
                <span style = "font-size: 30px"><b>Roles</b></span>
                <hr>
                <li>In <b>Blue Archive</b>, one of the most important aspects of the game is matching your team's attack type, against your enemies armor type. Basically, doing this makes your team do more damage overall. In this game, there are four attack and armor types, explained in the tabel below:</li>

                <li>Also, one aspect that needs to be brought up is the roles that students have, the roles are the following:</li>
                <?php
                    $sql = "SELECT nome_classe, desc_classe FROM classe WHERE jogo_classe = 4";
                    $resultado = $conn->query($sql);
                    while($linha = $resultado->fetch_object())
                    {
                        echo  "<li><b>$linha->nome_classe:</b> $linha->desc_classe</li>";
                    }
                ?>
            </div>
            <div class = content>
                <span style = "font-size: 30px"><b>Attack and Armor types</b></span>
                <hr>
                <li>The most essential aspect of this game's combat is the damage and armor types. This system works like this: the student's damage type has to match the enemies armor type (Example: you should use <span>Mystic</span> attacks againts <span>Special</span>-armored enemies).</li>

                <li>When you are in attack type advantage, the attack gains a 200% damage modifier, while having desavantage makes your attacks have a 50% damage modifier. This mechanic is one of the most impactful throughout the whole game, mainly for damage dealers.</li>

                <li>This table right here shows each damage and armor type, also showing the modifiers:</li>
                <br>
                <table class= table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Normal</th>
                            <th style = "color:#cc2d2d;">Explosive</th>
                            <th style = "color:#e4d127;">Penetration</th>
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
                            <td style = "color:#e4d127;">Heavy Armor</td>
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
            </div>
            <div class = content>
                <span style = "font-size: 30px"><b>Environment Affinity</b></span>
                <hr>
                <li>Each characther in the game has a affinity stat that is related to the three types of Environment (Urban, Outdoor and Indoor).</li>

                <li>This affinity affects the characther's overall damage and also ther chance and effectiveness of hiding behind cover. This means that the characther's perfomance are direcly associated with these environments.</li>

                <li>The table below details these stats:</li>
                <br>

                <table class=table>
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
                            <td><img src="../imagens/guias_blue/Icons/SS_Icon.png" alt="SS Rank"></td>
                            <td>130%</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>S</td>
                            <td><img src="../imagens/guias_blue/Icons/S_Icon.png" alt="S Rank"></td>
                            <td>120%</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td><img src="../imagens/guias_blue/Icons/A_Icon.png" alt="A Rank"></td>
                            <td>110%</td>
                            <td>45%</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td><img src="../imagens/guias_blue/Icons/B_Icon.png" alt="B Rank"></td>
                            <td>100%</td>
                            <td>30%</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td><img src="../imagens/guias_blue/Icons/C_Icon.png" alt="C Rank"></td>
                            <td>90%</td>
                            <td>15%</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td><img src="../imagens/guias_blue/Icons/D_Icon.png" alt="D Rank"></td>
                            <td>80%</td>
                            <td>0%</td>
                        </tr>
                    </tbody>
                 </table>
                 <br>
            </div>
            <div class = content>   
                <span style = "font-size: 30px"><b>Skills</b></span>
                <hr>
                <li>Each student in the game has 4 skills that they can use in combat.</li>
                <br>

                <span style = "font-size: 20px"><b>Sub Skill</b></span><br>
                <li>Sub Skills are passives that increases the team or self performance, this buffs can be focused on damage or survivavility, also, some of them are conditional, needing that effect so that the buff can be applied. These skills are unlocked in the 3-Star Rank (Which will be explained later).</li>

                <span style = "font-size: 20px"><b>Passive Skill</b></span><br>
                <li>As the name implies, these skills are also passive ones. Generally, these skills are self-buffs that increases the student's stats,their effect is applied at all times. These skills are unlock in the 2-Star Rank. Also, these skills can be upgraded by leveling the student's Unique Weapon (which will be explained later).</li>

                <span style = "font-size: 20px"><b>Normal/Basic Skill</b></span><br>
                <li>These skills are auto-skills, that activate upon a certain period of time. This type of skills can do a lot of different things, like: Buffing allies, do damage and also debuff enemies. These skills are one of the two starter skills, being unlocked from 1-Star Rank. Also, these skills can be upgraded by unlocking the student's Unique Accessory.</li>

                <span style = "font-size: 20px"><b>EX Skill</b></span><br>
                <li>These skills are the only ones that need to be activated/used by the player. They are the core skill to use during your gameplay, their effects are really variable, being: A massive damage ability, or a huge buff/debuff to the units on the field. These Skills work like this:</li>
                <img class="imgguide" src="../imagens/guias_blue/Intro/Costbar.png">

                <li>To use the student's Ex Skill, the bar has to match or pass the amount of the skill's cost. and then you select the target that is going to be affected by the skill. Also, while you're aiming at your target, the time is slowed, with this, is actually easier to aim some of the skills, like <span style = "color:#5c92c4;"><b>Haruna's</b></span> EX Skill.</li>
            </div>
            <div class = content>
                    <span style = "font-size: 35px"><b>Progression</b></span>
                    <hr>
                        <li>In <b>Blue Archive</b>, character progression is closely tied to your Account level, which acts as the cap for your student's level. To advance quickly, focus on leveling up your Account. Characters can be enhanced through various means, including leveling up, upgrading skills, and equipping and leveling gear.</li>

                        <li>The main ways of increasing your student's power are:
                            <ul>Increasing student' level;</ul>
                            <ul>Upgrading characther's skills;</ul>
                            <ul>Increasing characther' Relationship Level and unlocking their Unique Equipment;</ul>
                            <ul>Ranking up the student's Star Rank;</ul>
                            <ul>Unlocking and Upgranding Unique Weapons;</ul>
                            <ul>Equipping and leveling gear.</ul>
                        </li>

                    <span style = "font-size: 25px"><b>Student Level</b></span><br>
                    <li>As mentioned before, the student's level is capped by Sensei's level, this means that the characther level ranges from 1 to 90. Based on this, the priority is to level your account before to a certain level and then focus os leveling students. Upgrading your student's level increases their stats and enables them certain equipments, which will be explained later. To increase a characther level, you have to use <b>Activity Reports</b>, that can be acquired through many ways. Their rarity vary between: <span style = "color: #9b9a9a;"><b>Novice</b></span>, <span style = "color: #77b9e6;"><b>Normal</b></span>, <span style = "color: #ecc65d;"><b>Advanced</b></span> and <span style = "color: #f898fc;"><b>Superior</b></span>.</li><br>

                    <table style="height: 300px; width:75%;" class= table>
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Rarity</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="" alt="Novice"></td>
                                <td><img src="" alt="0-Star"></td>
                                <td>Novice Activity Report</td>
                            </tr>
                            <tr>
                                <td><img src="" alt="Normal"></td>
                                <td><img style="width: 15%;" src="../imagens/guias_blue/Icons/Star_Icon.png" alt="1-Star"></td>
                                <td>Normal Activity Report</td>
                            </tr>
                            <tr>
                                <td><img src="" alt="Advanced"></td>
                                <td><img style="width: 30%;" src="../imagens/guias_blue/Icons/2-Star_Icon.png" alt="2-Star"></td>
                                <td>Advanced Activity Report</td>
                            </tr>
                            <tr>
                                <td><img src="" alt="Superior"></td>
                                <td><img style="width: 35%;" src="../imagens/guias_blue/Icons/3-Star_Icon.png" alt="3-Star"></td>
                                <td>Superior Activity Report</td>
                            </tr>
                        </tbody>
                    </table><br>

                    <span style = "font-size: 25px"><b>Skills</b></span><br>
                    <li>Skills can be upgraded by utilizing items such as <b>Tech Notes</b> or <b>Tactical Blu-Rays</b> that are obtained through the shop or the <b>Bounty</b> game mode. These item's rarities also fluctuate between: <span style = "color: #9b9a9a;"><b>Novice</b></span>, <span style = "color: #77b9e6;"><b>Normal</b></span>, <span style = "color: #ecc65d;"><b>Advanced</b></span> and <span style = "color: #f898fc;"><b>Superior</b></span>.</li>

                    <li>Normal, Passive and Sub Skills are upgraded through Tech Notes, and Ex Skills are upgraded through Tactical Blu-Rays. These items are divided among the schools the game has, and the characthers use the ones that belong to their school.</li>

                    <li>Skills upgradable by tech notes can be upgraded to level 10 and Ex Skills can upgrade to a max of level 5, also, this type of skills not only get higher scalings when leveled up, but they can also get new effects, like <span style = "color:#e4d127;"><b>Chinatsu's</b></span> Ex Skill.</li><br>

                    <span style = "font-size: 25px"><b>Relationship and Unique Items</b></span><br>
                    <li>One of the most charming aspects of <b>Blue Archive</b> is the bonding system. As you progress with a character, you can increase their affection level through gifts, that you can give to them in the Cafe, and interactions. Raising affection unlocks more story content, as well as additional bonuses to their performance in battle. High affection levels also unlock special voice lines and deeper lore.</li>

                    <ul><b>*Note:</b> This bonuses are only stat increases, and they only go up to level <b>50</b>, after that, you do not gain any additional bonuses for increasing Relationship level.</ul>

                    <li>In Blue Archive, equipment plays a pivotal role in improving the overall strength and performance of your characters. Among the different types of gear available, Bond equipments are the ones that offer really significant advantages. To unlock the Unique Equipments, you generally need to reach certain character milestones, such as specific student ranks. These pieces often become available once the character reaches a certain affinity level.</li>

                    <li>Unique Equipment usually provides a significant boost in stats like Attack, Defense, or HP, and can also unlock additional effects like increasing the effectiveness of a character's Normal skill.</li><br>

                    <span style = "font-size: 25px"><b>Star Rank</b></span><br>
                    <li>Characters can be ranked from 1 to 5 stars, with each rank unlocking new abilities and enhancing stats. A 1-star character has access to Normal and EX skills, while higher ranks unlock additional skills, this process goes as follows:</li>

                    <ul>1 Star: Basic abilities available; access to Normal and EX skills.</ul>

                    <ul>2 Stars: Unlocks Passive skills, enhancing character performance.</ul>

                    <ul>3 Stars: Grants access to Sub skills, further diversifying character capabilities.</ul>

                    <ul>4 Stars: Significant stat boosts.</ul>

                    <ul>5 Stars: Maximum potential reached, with the best stats and the rank where you unlock your student's Unique Weapon.</ul><br>

                    <li>To level up the student rank, you have to use what is called a Character specific <span style="color: #f898fc;"><b>Eleph</b></span> or<span style="color: #f898fc;"><b>Eligma</b></span>, this items can be obtained through: <b>Lessons</b>, <b>Recruitment</b> (Gacha System) or in the Eligma Shop, if you already have the said student that you want to have the rank increased.</li><br>

                    <span style = "font-size: 25px"><b>Unique Weapons</b></span><br>
                    <li>In Blue Archive, Unique Weapons allow you to further enhance their characters after they reach a 5-star rank. All characters can unlock a Unique Weapon, which provides various stat bonuses and improvements to their Passive Skills. To obtain these weapons, the student has to reach the 5-Star Rank, which can be costly, but it does pay off!</li>

                    <li>These items can be leveled up as well, and they range from level 1 to level 40. Upgrading them not only increases characther's stats, it also upgrades their Passive Skill, by making they give more stats. Sometimes, you'll reach a level breakpoint, to advance further, you'll need to farm more of those student's Elephs, so be prepared to use a lot of your Pyroxenes (Gacha Currency).</li>
                    
                    <ul><b>*Note:</b> To get a charachter to 1 Star to Unique Equipment level 40, you'll need a total of 630 student-specific <span style="color: #f898fc;"><b>Elephs</b></span> </ul>
                </div>
</div>
<?php
include '..\general\footer.php'
?>