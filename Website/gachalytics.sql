-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/12/2024 às 22:44
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gachalytics`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nick_admin` varchar(250) NOT NULL,
  `email_admin` text NOT NULL,
  `senha_admin` text NOT NULL,
  `foto_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `nick_admin`, `email_admin`, `senha_admin`, `foto_admin`) VALUES
(1, 'CrawS2', 'joaoveras2204@gmail.com', 'f49d1fc094fcbe5c4141d85d5831eb283e1b6d12', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `arma`
--

CREATE TABLE `arma` (
  `id_arma` int(11) NOT NULL,
  `jogo_arma` int(11) NOT NULL,
  `nome_arma` varchar(255) NOT NULL,
  `desc_arma` text NOT NULL,
  `foto_arma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `arma`
--

INSERT INTO `arma` (`id_arma`, `jogo_arma`, `nome_arma`, `desc_arma`, `foto_arma`) VALUES
(1, 4, 'Fresh Choco-Mint', '', 'Weapon Airi (Band).png'),
(2, 4, 'Surprise Party', 'The assault rifle used by Asuna. It seems she has forgotten the meaning behind its fun and lively sounding name.', 'Weapon Asuna.png'),
(3, 4, 'Scorpius', 'A submachine gun used by Atsuko. It helps protect the squads summer.', 'Weapon Atsuko (SS).png'),
(4, 4, 'Common Sense', 'Ayanes gun, which she hopes will never be used. However, that wish is always dashed in unexpected ways.', 'Weapon Ayane (SS).png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `bosses`
--

CREATE TABLE `bosses` (
  `id_boss` int(11) NOT NULL,
  `jogo_boss` int(11) NOT NULL,
  `foto_boss` text NOT NULL,
  `nome_boss` varchar(155) NOT NULL,
  `desc_boss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `bosses`
--

INSERT INTO `bosses` (`id_boss`, `jogo_boss`, `foto_boss`, `nome_boss`, `desc_boss`) VALUES
(1, 4, 'Binah.png', 'Decagrammaton: Binah', ''),
(2, 4, 'Shirokuro.png', 'Slumpia: ShiroKuro', ''),
(3, 4, 'Chesed.png', 'Decagrammaton: Chesed', ''),
(4, 4, 'Hieronymus.png', 'Communio Sanctorum: Hieronymus', 'Hieronymus is a single entity boss fight who can be focused down with strong single target damage dealers. However, healers must be brought to this fight to engage with the Relics to get past Hieronymus\'s naturally high DEF and Damage Reductions. The fight itself may be considered simple, but the challenge in Hieronymus is being able to build a team which is capable of sustaining both continuous damage and continuous healing.'),
(5, 4, 'Kaiten.png', 'Kaitenger: KAITEN FX Mk.0', 'This raid boss will have players face the 5 Kaitengers before they retreat and re-engage the player onboard the KAITEN FX Mk.0. Success in the first phase of this fight will require players to bring powerful Explosive AOE damage dealers without sacrificing survivability as the rangers are quite powerful. Success in the second phase of the fight requires strong single-target Explosive damage instead of AOE damage. Due to the drastically different requirements between the first and second phases, players will find difficulty in either phase if they do not carefully plan their teams.'),
(6, 4, 'Perorodzilla.png', 'The Library of Lore: Perorodzilla', 'Unlike other raid bosses Perorodzilla has no distinct phases, and thus the strategies for defeating it are the same across the whole length of the fight. Success in Perorodzilla requires the player to balance their teambuilding around survivability and AOE Mystic damage. Furthermore, an intermediate understanding of the range and timings of student skills will greatly increase your potential in this raid.'),
(7, 4, 'Hod.png', 'Decagrammaton: Hod', 'Hod is a Heavy Armor boss that uses accumulating Crowd Control effect time as its distinctive mechanic. Players are required to have strong CC units (Tsubaki, Hoshino, Fubuki, Chihiro) in order to fight against efficiently. Hod has a very high CRIT RES so your DPS units will be very unlikely to CRIT against him. On the other hand, Hod has a much lower HP pool even at the highest difficulty compared to other bosses.'),
(8, 4, 'Goz.png', 'Slumpia: Goz', ''),
(9, 4, 'Gregorius.png', 'Communio Sanctorum: Gregorius', ''),
(10, 4, 'Wakamo.png', 'Wakamo: Hovercraft', 'Similar to the event battle Abydos Resort Restoration Committee/Wakamo (World Boss), the fight against Wakamo is split into two parts. In the first part, you fight Wakamo on her own, and in the second you fight Wakamo on the hovercraft. In the first part, Wakamo can deal high damage to your frontliners as well as inflicting marks on units hit; if a unit reaches 5 marks, they will immediately be knocked out. Fully filling Wakamo\'s CC gauge with effects like Taunt and Stun will clear all marks and stun Wakamo. In addition, each time her gauge is filled will cause Wakamo to deal slightly more damage but take significantly more damage, up to 3 times. Filling her gauge is essential to not only keeping your party alive but also defeating her quickly, so make sure to bring characters with CC like Stun or Taunt. <li> In the second part, Wakamo will attack your characters from the hovercraft, generally dealing less damage than the first part. However, after about 30 seconds she will retreat, leaving behind a missile relay and start firing missiles across the battlefield; these missiles do no damage to your characters but instead damage a separate health gauge representing the health of the resort if they are not destroyed. If this health gauge is depleted, you will automatically lose. Your characters will usually not target the missiles, so you must either use EX skills against the missiles or use healing skills on the two nearby turrets, which will then shoot down the missiles for you. The missile relay has a separate health bar but forwards all damage taken onto Wakamo. When the missile relay is destroyed, Wakamo will stop firing missiles and return to the battlefield, being stunned for several seconds and taking increased damage. Also, taking large numbers of hits will inflict a stacking debuff on Wakamo that causes her to take more damage; this works on the missile relay as well.</li>'),
(11, 4, 'Kurokage.png', 'One Hundred Ghost Tales: Myouki Kurokage', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `jogo_classe` int(11) NOT NULL,
  `foto_classe` text NOT NULL,
  `nome_classe` varchar(40) NOT NULL,
  `desc_classe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `classe`
--

INSERT INTO `classe` (`id_classe`, `jogo_classe`, `foto_classe`, `nome_classe`, `desc_classe`) VALUES
(1, 4, '../imagens/guias_blue/Icons/Attacker_Icon.png', 'Attacker', 'a'),
(2, 4, '../imagens/guias_blue/Icons/Tank_Icon.png', 'Tank', 'b'),
(3, 4, '../imagens/guias_blue/Icons/Support_Icon.png', 'Support', 'c'),
(4, 4, '../imagens/guias_blue/Icons/Healer_Icon.png', 'Healer', 'd'),
(5, 4, '../imagens/guias_blue/Icons/Tactical_Icon.png', 'Tactical Support', 'e');

-- --------------------------------------------------------

--
-- Estrutura para tabela `elemento`
--

CREATE TABLE `elemento` (
  `id_elemento` int(11) NOT NULL,
  `jogo_elemento` int(11) NOT NULL,
  `foto_elemento` text NOT NULL,
  `nome_elemento` varchar(40) NOT NULL,
  `desc_elemento` text NOT NULL,
  `estilo_elemento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `elemento`
--

INSERT INTO `elemento` (`id_elemento`, `jogo_elemento`, `foto_elemento`, `nome_elemento`, `desc_elemento`, `estilo_elemento`) VALUES
(1, 4, '../imagens/guias_blue/Icons/Explosive_Icon.png', 'Explosive', 'a', '.skill-type{ background-color: #cc2d2d;}.tab{         border-color: #cc2d2d;}strong{color: #ff3639;}'),
(2, 4, '../imagens/guias_blue/Icons/Penetration_Icon.png', 'Penetration', 'b', '.skill-type{ background-color: #e4d127;     }     .tab{         border-color: #e4d127;     }'),
(3, 4, '../imagens/guias_blue/Icons/Mystic_Icon.png', 'Mystic', 'c', '.skill-type{ background-color: #5c92c4;     }     .tab{         border-color: #5c92c4;     }'),
(4, 4, '../imagens/guias_blue/Icons/Sonic_Icon.png', 'Sonic', 'd', '.skill-type{ background-color: #9c8bc4;     }     .tab{         border-color: #9c8bc4;     }');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id_equipamento` int(11) NOT NULL,
  `jogo_equipamento` int(11) NOT NULL,
  `nome_equipamento` varchar(255) NOT NULL,
  `desc_equipamento` text NOT NULL,
  `foto_equipamento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `guias`
--

CREATE TABLE `guias` (
  `id_guia` int(11) NOT NULL,
  `jogo_guia` int(11) NOT NULL,
  `nome_guia` text NOT NULL,
  `desc_guia` text NOT NULL,
  `foto_guia` varchar(255) NOT NULL,
  `data_guia` date NOT NULL,
  `link_guia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `guias`
--

INSERT INTO `guias` (`id_guia`, `jogo_guia`, `nome_guia`, `desc_guia`, `foto_guia`, `data_guia`, `link_guia`) VALUES
(1, 4, 'Introduction: Blue Archive', 'The basics of Blue Archive.', '../imagens/guias_blue/introduction.png', '2024-11-22', 'intro.php'),
(2, 4, 'Team Building Guide', 'Understanding the combat system.', '../imagens/guias_blue/Teambuild.png', '2024-11-11', 'teams.php'),
(3, 4, 'Game modes', 'A summary of everything this game offers.', '../imagens/guias_blue/Modes.png', '2024-12-07', 'modes.php'),
(4, 4, 'Raids and Bosses', 'Analyzing the game\'s hardests challenges!', '../imagens/guias_blue/Raid.png', '2024-12-07', 'bosses.php'),
(5, 4, 'Blue Archive Tier list', 'Showing who is the best of the best for your game performance!.', '../imagens/guias_blue/Tierlist.png', '2024-11-11', ''),
(6, 4, 'Blue Archive Character list', 'A list of all the characters in the game.', '../imagens/guias_blue/Characters.png', '2024-12-08', 'character-list.php');

-- --------------------------------------------------------

--
-- Estrutura para tabela `habilidade`
--

CREATE TABLE `habilidade` (
  `id_habilidade` int(11) NOT NULL,
  `nome_habilidade` varchar(100) NOT NULL,
  `jogo_habilidade` int(11) NOT NULL,
  `tipo_habilidade` int(11) NOT NULL,
  `personagem_habilidade` int(11) NOT NULL,
  `desc_habilidade` text NOT NULL,
  `info_habilidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `habilidade`
--

INSERT INTO `habilidade` (`id_habilidade`, `nome_habilidade`, `jogo_habilidade`, `tipo_habilidade`, `personagem_habilidade`, `desc_habilidade`, `info_habilidade`) VALUES
(1, 'Happy Melody', 4, 1, 1, 'Increases Airi\'s own <strong>Explosive Efficiency</strong> by <b>95.8~182%</b> and enters in \"Sugar Rush\" state for 30 seconds', 'Self-Buff | Cost: <b>2</b>'),
(2, 'Chocomint Musical Stairs', 4, 2, 1, 'Every <b>12</b> attacks, Airi deals <strong>Explosive DMG</strong> equal to <b>710~1349%</b> of her ATK to a single enemy.', 'Single-Target'),
(3, 'Bigger and Further', 4, 3, 1, 'Increases her own Range by <b>100</b> and her Attack Speed by <b>11.2~21.2%</b>.', 'Self-Buff'),
(4, 'Pervasive Feelings', 4, 4, 1, 'While in \"Sugar Rush\", attacks have a fixed 10% chance of decreasing enemy\'s Crit. DMG RES <b>12.8~24.4%</b> for 16 seconds. This skill has a cooldown of 5 seconds.', 'Debuff'),
(5, 'Bigger and Further +', 4, 5, 1, 'Increase Attack by <b>356~675</b>. Increases her own Range by <b>100</b> and her Attack Speed by <b>11.2~21.2%</b>.', 'Self-Buff'),
(11, 'Here I go!', 4, 1, 2, 'After activating the skill increase Evasion by 43.4% and Attack Speed by 30.2~57.3% for 30 seconds.', 'Movement + Self-Buff | Cost: <b>2</b>'),
(12, 'Im gonna fire!', 4, 2, 2, 'Every 20 seconds, deal 219~416% damage to one enemy.', 'Single-Target'),
(13, 'Does that hurt?', 4, 3, 2, 'Increase Critical Damage by 14~26.6%.', 'Self-Buff'),
(14, 'Were gonna speed things up, okay?', 4, 4, 2, 'When EX skill is activated increase Attack Speed by 20.1~38.3% for 30 seconds.', 'Self-Buff'),
(15, 'Does that hurt? +', 4, 5, 2, 'Increase Critical Damage by 2000~3800. Further increase Critical Damage by 14~26.6%.', 'Self-Buff'),
(16, 'Summer memories', 4, 1, 3, 'Recover HP of one ally by 153~290% of Healing.', 'Heal | Cost: <b>2</b>'),
(17, 'This flower for you', 4, 2, 3, 'Every 30 seconds, increase healing received for the ally with the lowest HP by 18.9~36% for 20 seconds.', 'Buff'),
(18, 'Fresh sea breeze', 4, 3, 3, 'Increase Healing by 14~26.6%.', 'Self-Buff'),
(19, 'Beach Princess', 4, 4, 3, 'Increase Attack Speed of all allies by 9.1~17.3%.', 'Team Buff'),
(20, 'Fresh sea breeze +', 4, 5, 3, 'Increase Healing by 1044~1983. Further increase Healing by 14~26.6%.', 'Self-Buff'),
(21, 'Nimbostratus, attacking!', 4, 1, 4, 'Ayane enters the battlefield aboard the Nimbostratus.\r\nNimbostratus additionally inherits 12.5~47.5% of Ayane s Attack and 12.5~32.6% of Critical Rate. (Duration:30 seconds)', 'Tactical Support | Cost: <b>4</b>'),
(22, 'Rainstorm Missile', 4, 2, 4, 'Every 12 seconds, the Nimbostratus will activate its \"Rainstorm Missile\" skill, dealing 297~401% damage to one enemy. (This attack ignores 68~84% of the enemy Defense)', 'Single-Target'),
(23, 'Support from the sky', 4, 2, 4, 'Every 30 seconds, deal 148~215% damage to one enemy. (This attack ignores 60~84% of the enemy Defense)', 'Single-Target'),
(24, 'Automatic targeting', 4, 3, 4, 'Increase Critical Rate by 14~26.6%.', 'Self-Buff'),
(25, 'Understanding the battlefield', 4, 4, 4, 'Increase Critical Damage of all allies by 9.1~17.3%.', 'Team Buff'),
(26, 'Automatic targeting +', 4, 5, 4, 'Increase Critical Rate by 100~190. Further increase Critical Rate by 14~26.6%.', 'Self-Buff');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogo`
--

CREATE TABLE `jogo` (
  `id_jogo` int(11) NOT NULL,
  `nome_jogo` varchar(255) NOT NULL,
  `lancamento` date NOT NULL,
  `desc_jogo` text NOT NULL,
  `jogo_button` text NOT NULL,
  `jogo_link` text NOT NULL,
  `jogo_function` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogo`
--

INSERT INTO `jogo` (`id_jogo`, `nome_jogo`, `lancamento`, `desc_jogo`, `jogo_button`, `jogo_link`, `jogo_function`) VALUES
(1, 'Genshin Impact', '2020-09-28', 'A Open-world RPG developed by HoYoverse', 'genshin.jpg', '', 'HoverGenshin()'),
(2, 'Honkai: Star Rail', '2023-04-26', 'A Turn-based RPG developed by HoYoverse', 'hsr.jpg', '', 'HoverHsr()'),
(3, 'Zenless Zone Zero', '2024-07-04', 'A Action RPG developed by HoYoverse', 'zzz.jpg', '', 'HoverZZZ()'),
(4, 'Blue Archive', '2021-02-04', 'A Strategy RPG developed by Nexon', 'blue.jpg', '../blue/index.php', 'HoverBlue()'),
(5, 'Reverse: 1999', '2023-10-26', '', 'reverse.jpg', '', 'HoverReverse()'),
(6, 'Wuthering Waves', '2024-05-22', 'A Open-world RPG devloped by Kuro Games', 'wuwa.jpg', '', 'HoverWuwa()'),
(7, 'Goddess of Victory: Nikke', '2022-11-04', '', 'nikke.jpg', '', 'HoverNikke()'),
(9, 'Persona 5: The Phantom X', '2024-04-12', '', 'persona.jpg', '', 'HoverPersona()');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modo`
--

CREATE TABLE `modo` (
  `id_modo` int(11) NOT NULL,
  `jogo_modo` int(11) NOT NULL,
  `nome_modo` varchar(255) NOT NULL,
  `desc_modo` text NOT NULL,
  `foto_modo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `modo`
--

INSERT INTO `modo` (`id_modo`, `jogo_modo`, `nome_modo`, `desc_modo`, `foto_modo`) VALUES
(1, 1, 'Spiral Abyss', '', ''),
(2, 1, 'Imaginarium Theater', '', ''),
(3, 1, 'Genius Invokation TCG', '', ''),
(4, 2, 'Forgotten Hall', '', ''),
(5, 2, 'Memory of Chaos', '', ''),
(6, 2, 'Pure Fiction', '', ''),
(7, 2, 'Apocalyptic Shadow', '', ''),
(8, 2, 'Simulated Universe', '', ''),
(9, 2, 'Swarm Disaster', '', ''),
(10, 2, 'Gold and Gears', '', ''),
(11, 2, 'Divergent Universe', '', ''),
(12, 2, 'Calyx', '', ''),
(13, 2, 'Stagnant Shadow', '', ''),
(14, 2, 'Cavern of Corrosion', '', ''),
(15, 2, 'Echo of War', '', ''),
(16, 3, 'Shiyu Defense', '', ''),
(17, 3, 'Hollow Zero', '', ''),
(18, 3, 'Inferno Reap', '', ''),
(19, 3, 'Combat Simulation', '', ''),
(20, 3, 'Expert Challenge', '', ''),
(21, 3, 'Driver Validation', '', ''),
(22, 3, 'Notorius Hunt', '', ''),
(23, 3, 'Hollow Deep Dive', '', ''),
(24, 4, 'Missions', '', ''),
(25, 4, 'Commissions', '', ''),
(26, 4, 'Bounty', '', ''),
(27, 4, 'Scrimmage', '', ''),
(28, 4, 'Joint Firing Drill', '', ''),
(29, 4, 'Tactical Challenge', '', ''),
(30, 4, 'Total Assualt', '', ''),
(31, 4, 'Grand Assault', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `personagem`
--

CREATE TABLE `personagem` (
  `id_personagem` int(11) NOT NULL,
  `nome_personagem` varchar(40) NOT NULL,
  `jogo_personagem` int(11) NOT NULL,
  `classe_personagem` int(11) NOT NULL,
  `elemento_personagem` int(11) NOT NULL,
  `raridade_personagem` int(11) NOT NULL,
  `foto_personagem` text NOT NULL,
  `desc_personagem` text NOT NULL,
  `link_personagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `personagem`
--

INSERT INTO `personagem` (`id_personagem`, `nome_personagem`, `jogo_personagem`, `classe_personagem`, `elemento_personagem`, `raridade_personagem`, `foto_personagem`, `desc_personagem`, `link_personagem`) VALUES
(1, 'Airi (Band)', 4, 1, 1, 1, 'Airi (Band).png', '', 'Airi (Band).php'),
(2, 'Asuna', 4, 1, 3, 1, 'Asuna.png', '', 'Asuna.php'),
(3, 'Atsuko (SS)', 4, 4, 4, 1, 'Atsuko (Swinsuit).png', '', 'Atsuko (SS).php'),
(4, 'Ayane (SS)', 4, 5, 2, 1, 'Ayane (Swinsuit).png', '', 'Ayane (SS).php'),
(5, 'Chinatsu', 4, 4, 2, 1, 'Chinatsu.png', '', 'Chinatsu.php'),
(6, 'Fubuki', 4, 1, 2, 1, 'Fubuki.png', '', 'Fubuki.php'),
(7, 'Haruka', 4, 2, 1, 1, 'Haruka.png', '', 'Haruka.php'),
(8, 'Hasumi (Track)', 4, 1, 3, 1, 'Hasumi (Track).png', '', 'Hasumi (Track).php'),
(9, 'Hibiki (Cheer S.)', 4, 1, 1, 1, 'Hibiki (Cheer S.).png', '', 'Hibiki (Cheer S.).php'),
(10, 'Ibuki', 4, 3, 3, 1, 'Ibuki.png', '', 'Ibuki.php'),
(11, 'Izumi (SS)', 4, 3, 1, 1, 'Izumi (Swinsuit).png', '', 'Izumi (SS).php'),
(12, 'Junko (N. Year)', 4, 1, 3, 1, 'Junko (N. Year).png', '', 'Junko (N. Year).php'),
(13, 'Juri', 4, 3, 1, 1, 'Juri.png', '', 'Juri.php'),
(14, 'Kirino (SS)', 4, 3, 3, 1, 'Kirino (Swinsuit).png', '', 'Kirino (SS).php'),
(15, 'Koharu (SS)', 4, 1, 3, 1, 'Koharu (Swinsuit).png', '', 'Koharu (SS).php'),
(16, 'Kotama', 4, 3, 1, 1, 'Kotama.png', '', 'Kotama.php'),
(17, 'Kotori', 4, 3, 2, 1, 'Kotori.png', '', 'Kotori.php'),
(18, 'Michiru', 4, 1, 3, 1, 'Michiru.png', '', 'Michiru.php'),
(19, 'Mine (Idol)', 4, 2, 1, 1, 'Mine (Idol).png', '', 'Mine (Idol).php'),
(20, 'Miyu (SS)', 4, 1, 1, 1, 'Miyu (Swinsuit).png', '', 'Miyu (SS).php'),
(21, 'Nodoka', 4, 3, 1, 1, 'Nodoka.png', '', 'Nodoka.php'),
(22, 'Pina', 4, 1, 2, 1, 'Pina.png', '', 'Pina.php'),
(23, 'Saten Ruiko', 4, 1, 2, 1, 'Saten Ruiko.png', '', 'Saten Ruiko.php'),
(24, 'Serina', 4, 4, 3, 1, 'Serina.png', '', 'Serina.php'),
(25, 'Shimiko', 4, 3, 1, 1, 'Shimiko.png', '', 'Shimiko.php'),
(26, 'Shizuko (SS)', 4, 3, 3, 1, 'Shizuko (Swinsuit).png', '', 'Shizuko (SS).php'),
(27, 'Suzumi', 4, 3, 1, 1, 'Suzumi.png', '', 'Suzumi.php'),
(28, 'Tomoe', 4, 3, 2, 1, 'Tomoe.png', '', 'Tomoe.php'),
(29, 'Tsurugi (SS)', 4, 1, 3, 1, 'Tsurugi (Swinsuit).png', '', 'Tsurugi (SS).php'),
(30, 'Yoshimi', 4, 1, 2, 1, 'Yoshimi.png', '', 'Yoshimi.php'),
(31, 'Yuzu (Maid)', 4, 1, 1, 1, 'Yuzu (Maid).png', '', 'Yuzu (Maid).php'),
(32, 'Airi', 4, 3, 1, 2, 'Airi.png', '', ''),
(33, 'Akane', 4, 3, 2, 2, 'Akane.png', '', ''),
(34, 'Akari', 4, 1, 1, 2, 'Akari.png', '', ''),
(35, 'Ayane', 4, 4, 2, 2, 'Ayane.png', '', ''),
(36, 'Chise', 4, 1, 3, 2, 'Chise.png', '', ''),
(37, 'Fuuka', 4, 4, 1, 2, 'Fuuka.png', '', ''),
(38, 'Hanae', 4, 4, 1, 2, 'Hanae.png', '', ''),
(39, 'Hanako', 4, 4, 2, 2, 'Hanako.png', '', ''),
(40, 'Hare', 4, 3, 1, 2, 'Hare.png', '', ''),
(41, 'Hasumi', 4, 1, 2, 2, 'Hasumi.png', '', ''),
(42, 'Junko', 4, 1, 2, 2, 'Junko.png', '', ''),
(43, 'Kayoko', 4, 3, 1, 2, 'Kayoko.png', '', ''),
(44, 'Kirino', 4, 3, 1, 2, 'Kirino.png', '', ''),
(45, 'Mari', 4, 3, 3, 2, 'Mari.png', '', ''),
(46, 'Momiji', 4, 1, 4, 2, 'Momiji.png', '', ''),
(47, 'Momoi', 4, 1, 2, 2, 'Momoi.png', '', ''),
(48, 'Mutsuki', 4, 1, 1, 2, 'Mutsuki.png', '', ''),
(49, 'Nonomi', 4, 1, 2, 2, 'Nonomi.png', '', ''),
(50, 'Serika', 4, 1, 1, 2, 'Serika.png', '', ''),
(51, 'Shizuko', 4, 3, 3, 2, 'Shizuko.png', '', ''),
(52, 'Tsubaki', 4, 2, 2, 2, 'Tsubaki.png', '', ''),
(53, 'Utaha', 4, 1, 2, 2, 'Utaha.png', '', ''),
(60, 'Yuuka', 4, 2, 2, 2, 'Yuuka.png', '', ''),
(61, 'Akane (Bunny Girl)', 4, 1, 3, 3, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `personagem_classe`
--

CREATE TABLE `personagem_classe` (
  `id_personagem_classe` int(11) NOT NULL,
  `id_classe_personagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personagem_elemento`
--

CREATE TABLE `personagem_elemento` (
  `id_personagem_elemento` int(11) NOT NULL,
  `id_elemento_personagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `raridades`
--

CREATE TABLE `raridades` (
  `id_raridade` int(11) NOT NULL,
  `jogo_raridade` int(11) NOT NULL,
  `estilo_raridade` text NOT NULL,
  `icon_raridade` text NOT NULL,
  `nome_raridade` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `raridades`
--

INSERT INTO `raridades` (`id_raridade`, `jogo_raridade`, `estilo_raridade`, `icon_raridade`, `nome_raridade`) VALUES
(1, 4, '../imagens/guias_blue/Rarity.png', '../imagens/guias_blue/Icons/ Star_Icon.png', '1-Star'),
(2, 4, '../imagens/guias_blue/Rarity2.png', '../imagens/guias_blue/Icons/ 2-Star_Icon.png', '2-Star'),
(3, 4, '../imagens/guias_blue/Rarity3.png', '../imagens/guias_blue/Icons/ 3-Star_Icon.png', '3-Star');

-- --------------------------------------------------------

--
-- Estrutura para tabela `skill_type`
--

CREATE TABLE `skill_type` (
  `id_type` int(11) NOT NULL,
  `nome_type` varchar(20) NOT NULL,
  `jogo_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `skill_type`
--

INSERT INTO `skill_type` (`id_type`, `nome_type`, `jogo_type`) VALUES
(1, 'EX Skill', 4),
(2, 'Basic Skill', 4),
(3, 'Passive Skill', 4),
(4, 'Sub Skill', 4),
(5, 'Passive Skill +', 4),
(6, 'Basic Skill +', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices de tabela `arma`
--
ALTER TABLE `arma`
  ADD PRIMARY KEY (`id_arma`),
  ADD KEY `jogo_arma` (`jogo_arma`);

--
-- Índices de tabela `bosses`
--
ALTER TABLE `bosses`
  ADD PRIMARY KEY (`id_boss`),
  ADD KEY `jogo_boss` (`jogo_boss`);

--
-- Índices de tabela `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`),
  ADD KEY `jogo_classe` (`jogo_classe`);

--
-- Índices de tabela `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`id_elemento`),
  ADD KEY `jogo_elemento` (`jogo_elemento`);

--
-- Índices de tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id_equipamento`),
  ADD KEY `jogo_equipamento` (`jogo_equipamento`);

--
-- Índices de tabela `guias`
--
ALTER TABLE `guias`
  ADD PRIMARY KEY (`id_guia`),
  ADD KEY `jogo_guia` (`jogo_guia`);

--
-- Índices de tabela `habilidade`
--
ALTER TABLE `habilidade`
  ADD PRIMARY KEY (`id_habilidade`),
  ADD KEY `jogo_habilidade` (`jogo_habilidade`),
  ADD KEY `tipo_habilidade` (`tipo_habilidade`),
  ADD KEY `personagem_habilidade` (`personagem_habilidade`);

--
-- Índices de tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id_jogo`),
  ADD UNIQUE KEY `nome_jogo` (`nome_jogo`);

--
-- Índices de tabela `modo`
--
ALTER TABLE `modo`
  ADD PRIMARY KEY (`id_modo`),
  ADD KEY `jogo_modo` (`jogo_modo`);

--
-- Índices de tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`id_personagem`),
  ADD KEY `jogo_personagem` (`jogo_personagem`),
  ADD KEY `raridade_personagem` (`raridade_personagem`),
  ADD KEY `classe_personagem` (`classe_personagem`),
  ADD KEY `elemento_personagem` (`elemento_personagem`);

--
-- Índices de tabela `personagem_classe`
--
ALTER TABLE `personagem_classe`
  ADD KEY `id_personagem_classe` (`id_personagem_classe`),
  ADD KEY `id_classe_personagem` (`id_classe_personagem`);

--
-- Índices de tabela `personagem_elemento`
--
ALTER TABLE `personagem_elemento`
  ADD KEY `id_personagem_elemento` (`id_personagem_elemento`),
  ADD KEY `id_elemento_personagem` (`id_elemento_personagem`);

--
-- Índices de tabela `raridades`
--
ALTER TABLE `raridades`
  ADD PRIMARY KEY (`id_raridade`),
  ADD KEY `jogo_raridade` (`jogo_raridade`);

--
-- Índices de tabela `skill_type`
--
ALTER TABLE `skill_type`
  ADD PRIMARY KEY (`id_type`),
  ADD KEY `jogo_type` (`jogo_type`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `arma`
--
ALTER TABLE `arma`
  MODIFY `id_arma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `bosses`
--
ALTER TABLE `bosses`
  MODIFY `id_boss` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `elemento`
--
ALTER TABLE `elemento`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `guias`
--
ALTER TABLE `guias`
  MODIFY `id_guia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `habilidade`
--
ALTER TABLE `habilidade`
  MODIFY `id_habilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `modo`
--
ALTER TABLE `modo`
  MODIFY `id_modo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `id_personagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `raridades`
--
ALTER TABLE `raridades`
  MODIFY `id_raridade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `skill_type`
--
ALTER TABLE `skill_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `arma`
--
ALTER TABLE `arma`
  ADD CONSTRAINT `arma_ibfk_1` FOREIGN KEY (`jogo_arma`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `bosses`
--
ALTER TABLE `bosses`
  ADD CONSTRAINT `bosses_ibfk_1` FOREIGN KEY (`jogo_boss`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`jogo_classe`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `elemento_ibfk_1` FOREIGN KEY (`jogo_elemento`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `equipamento`
--
ALTER TABLE `equipamento`
  ADD CONSTRAINT `equipamento_ibfk_1` FOREIGN KEY (`jogo_equipamento`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `guias`
--
ALTER TABLE `guias`
  ADD CONSTRAINT `guias_ibfk_1` FOREIGN KEY (`jogo_guia`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `habilidade`
--
ALTER TABLE `habilidade`
  ADD CONSTRAINT `habilidade_ibfk_1` FOREIGN KEY (`jogo_habilidade`) REFERENCES `jogo` (`id_jogo`),
  ADD CONSTRAINT `habilidade_ibfk_2` FOREIGN KEY (`tipo_habilidade`) REFERENCES `skill_type` (`id_type`),
  ADD CONSTRAINT `habilidade_ibfk_3` FOREIGN KEY (`personagem_habilidade`) REFERENCES `personagem` (`id_personagem`);

--
-- Restrições para tabelas `modo`
--
ALTER TABLE `modo`
  ADD CONSTRAINT `modo_ibfk_1` FOREIGN KEY (`jogo_modo`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `personagem`
--
ALTER TABLE `personagem`
  ADD CONSTRAINT `personagem_ibfk_1` FOREIGN KEY (`jogo_personagem`) REFERENCES `jogo` (`id_jogo`),
  ADD CONSTRAINT `personagem_ibfk_3` FOREIGN KEY (`raridade_personagem`) REFERENCES `raridades` (`id_raridade`),
  ADD CONSTRAINT `personagem_ibfk_6` FOREIGN KEY (`classe_personagem`) REFERENCES `classe` (`id_classe`),
  ADD CONSTRAINT `personagem_ibfk_7` FOREIGN KEY (`elemento_personagem`) REFERENCES `elemento` (`id_elemento`);

--
-- Restrições para tabelas `personagem_classe`
--
ALTER TABLE `personagem_classe`
  ADD CONSTRAINT `personagem_classe_ibfk_1` FOREIGN KEY (`id_personagem_classe`) REFERENCES `personagem` (`id_personagem`),
  ADD CONSTRAINT `personagem_classe_ibfk_2` FOREIGN KEY (`id_classe_personagem`) REFERENCES `classe` (`id_classe`);

--
-- Restrições para tabelas `personagem_elemento`
--
ALTER TABLE `personagem_elemento`
  ADD CONSTRAINT `personagem_elemento_ibfk_1` FOREIGN KEY (`id_personagem_elemento`) REFERENCES `personagem` (`id_personagem`),
  ADD CONSTRAINT `personagem_elemento_ibfk_2` FOREIGN KEY (`id_elemento_personagem`) REFERENCES `elemento` (`id_elemento`);

--
-- Restrições para tabelas `raridades`
--
ALTER TABLE `raridades`
  ADD CONSTRAINT `raridades_ibfk_1` FOREIGN KEY (`jogo_raridade`) REFERENCES `jogo` (`id_jogo`);

--
-- Restrições para tabelas `skill_type`
--
ALTER TABLE `skill_type`
  ADD CONSTRAINT `skill_type_ibfk_1` FOREIGN KEY (`jogo_type`) REFERENCES `jogo` (`id_jogo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
