-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 10:29 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `builds`
--

CREATE TABLE `builds` (
  `id` int(10) NOT NULL,
  `acct_id` int(10) DEFAULT NULL,
  `build_name` varchar(255) NOT NULL DEFAULT 'None',
  `build_description` varchar(255) NOT NULL DEFAULT 'None',
  `build_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `builds`
--

INSERT INTO `builds` (`id`, `acct_id`, `build_name`, `build_description`, `build_date`) VALUES
(11, 5, 'Git Gud!', 'The ultimate #GitGud guide as a mage.', '2017-07-04'),
(19, 1, 'Dodging Bullets All Day', 'Just when you think you can\'t get more dodge. #miss anyone?', '2017-07-04'),
(21, 7, 'Prototype Archer', 'An up and coming hunter. Work in progress.', '2017-07-06'),
(22, 1, 'test', 'test', '2017-07-10'),
(23, 13, 'test', 'test', '2017-07-10'),
(24, 11, 'Super Novice', 'Well, we all start from somewhere', '2017-07-10'),
(25, 11, 'Boss Hunter v5.2a', 'Hunting bosses is like eating breakfast... smooth and easy.', '2017-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `build_comments`
--

CREATE TABLE `build_comments` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `build_id` int(11) DEFAULT NULL,
  `commenter_id` int(11) DEFAULT NULL,
  `comment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `build_comments`
--

INSERT INTO `build_comments` (`id`, `comment`, `build_id`, `commenter_id`, `comment_date`) VALUES
(1, 'test', NULL, 1, '2017-07-04'),
(2, 'lol', NULL, 1, '2017-07-04'),
(3, 'imba', NULL, 1, '2017-07-04'),
(4, 'eeeee', NULL, 1, '2017-07-04'),
(16, 'test', 19, 1, '2017-07-06'),
(17, '123', 19, 1, '2017-07-06'),
(18, 'gg', 19, 1, '2017-07-06'),
(19, '4444', 19, 1, '2017-07-06'),
(20, 'ddd', 19, 1, '2017-07-06'),
(21, 'sdfd', 19, 1, '2017-07-06'),
(22, 'sdfdggggg', 19, 1, '2017-07-06'),
(23, '123', 19, 1, '2017-07-06'),
(24, 'new comment', 19, 1, '2017-07-06'),
(25, 'dsfd', NULL, 1, '2017-07-06'),
(26, 'Something new, eh? /gg', NULL, 5, '2017-07-06'),
(27, 'asdasd', 19, 1, '2017-07-07'),
(28, '111111111111111111111', 19, 1, '2017-07-07'),
(29, '111111111111111111111', 19, 1, '2017-07-07'),
(30, 'amazing! /no1', 21, 10, '2017-07-08'),
(31, 'testing. leaving a comment.', 21, 1, '2017-07-10'),
(32, 'astig!', 21, 1, '2017-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `msg`, `date`) VALUES
(12, 1, 'test', '2017-07-13 03:20:01'),
(13, 1, 'test', '2017-07-13 03:21:43'),
(14, 13, 'Hello, world!', '2017-07-13 03:29:51'),
(15, 13, 'sup?', '2017-07-13 03:32:16'),
(16, 1, 'Hey hey', '2017-07-13 03:32:24'),
(17, 1, 'hello', '2017-07-13 04:24:48'),
(18, 13, 'ui', '2017-07-13 04:25:41'),
(19, 13, 'test', '2017-07-13 04:25:57'),
(20, 13, 'hello', '2017-07-13 04:27:29'),
(21, 13, 'asdasd', '2017-07-13 04:28:06'),
(22, 13, 'o', '2017-07-13 04:28:42'),
(23, 1, 'hello', '2017-07-13 04:33:40'),
(24, 13, 'i', '2017-07-13 04:35:05'),
(25, 13, 'asdasd', '2017-07-13 04:37:45'),
(26, 1, '123', '2017-07-13 04:38:54'),
(27, 1, '123123', '2017-07-13 04:39:01'),
(28, 1, 'dddddd', '2017-07-13 04:39:23'),
(29, 1, 'r', '2017-07-13 04:41:02'),
(30, 1, 'asdas', '2017-07-13 04:47:09'),
(31, 1, 'asdsad', '2017-07-13 04:48:07'),
(32, 11, 'hey there mate!', '2017-07-13 06:00:16'),
(33, 11, 'hello there!', '2017-07-13 06:32:56'),
(34, 1, 'Hey they my man!', '2017-07-13 06:34:51'),
(35, 11, 'Hello, friend!', '2017-07-13 06:40:45'),
(36, 1, 'yes', '2017-07-13 06:43:49'),
(37, 1, 'a', '2017-07-13 06:44:49'),
(38, 11, 'pssssttt', '2017-07-13 06:53:17'),
(39, 1, 'Heeelllloooooo!!!!!!', '2017-07-13 06:53:39'),
(40, 11, 'Kain na!', '2017-07-13 06:54:04'),
(41, 1, 'Heelllo', '2017-07-13 06:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(10) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `class_icon`) VALUES
(5, 'Acolyte', 'images/acolyte.gif'),
(4, 'Archer', 'images/archer.gif'),
(3, 'Magician', 'images/magician.gif'),
(6, 'Merchant', 'images/merchant.gif'),
(1, 'Novice', 'images/novice.gif'),
(2, 'Swordsman', 'images/swordsman.gif'),
(7, 'Thief', 'images/thief.gif');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) NOT NULL,
  `build_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `required_for` varchar(255) NOT NULL DEFAULT 'None',
  `max_level` int(10) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `quest_skill` varchar(255) NOT NULL DEFAULT 'No',
  `unlock_requirements` varchar(255) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `description`, `class`, `required_for`, `max_level`, `icon`, `quest_skill`, `unlock_requirements`) VALUES
(1, 'Basic Skill', 'Enable to apply Basic Interface Skills.', 'Novice', 'All first job skills.', 9, 'ro_skill_icons/nv_basic.svg', 'No', 'None'),
(2, 'First Aid', 'Heal yourself for 5 HP. Not a crazy powerful skill, but mages seem to like it for saving money on healing items.', 'Novice', 'None', 1, 'ro_skill_icons/nv_firstaid.svg', 'Yes', 'None'),
(3, 'Trick Dead', 'You lay on the ground like you were dead and aggressive monsters won\'t target you. You can\'t recover HP or SP while pretending to be dead. You can Trick Dead as long as you want.\r\nCasting Trick Dead a second time cancels it, letting you move again. Once you choose another Job, you lose the ability to use this skill.', 'Novice', 'None', 1, 'ro_skill_icons/nv_trickdead.svg', 'Yes', 'None'),
(4, 'Sword Mastery', 'Increases damage with Daggers and Swords (1-handed only) by 4*SkillLV. This damage ignores modification from Armor and VIT defense, but not from Elemental and Card modifiers and applies to all hits for multi hit attacks. ', 'Swordsman', 'Two-Handed Sword Mastery (Lv 1)', 10, 'ro_skill_icons/sm_sword.svg', 'No', 'None'),
(5, 'Two-Handed Sword Mastery', 'Increases damage with Two-Handed Swords by 4*SkillLV. This damage ignores modification from Armor and VIT defense, but not from Elemental and Card modifiers and applies to all hits for multi hit attacks.', 'Swordsman', 'Two-Hand Quicken (Lv 1, Knight), Auto Counter (Lv 1, Knight), Bowling Bash (Lv 5, Knight), Parrying (Lv 10, Lord Knight), Aura Blade (Lv 5, Lord Knight)', 10, 'ro_skill_icons/sm_twohand.svg', 'No', 'Sword Mastery Lv 1'),
(6, 'Increase Recuperative Power', 'Heals ((5*SkillLV) + (Maximum HP*0.002*SkillLV)) HP per 10 full seconds spent standing on one cell. Increases the effect of healing items by (10*SkillLV)% (cumulative with the increase from VIT).', 'Swordsman', 'Concentration (Lv 5, Lord Knight), Tension Relax (Lv 10, Lord Knight)', 10, 'ro_skill_icons/sm_recovery.svg', 'No', 'None'),
(7, 'Bash', 'A melee attack with ATK equal to (100+30*SkillLV)%. There is a HIT bonus of 5*SkillLV. If the character has the Fatal Blow skill as well, levels 6-10 will add a chance to Stun of 5%*(Bash SkillLV - 5) plus a bonus depending on BaseLV.', 'Swordsman', 'Magnum Break (Lv 5), Bowling Bash (Lv 10, Knight)', 10, 'ro_skill_icons/sm_bash.svg', 'No', 'None'),
(8, 'Provoke', 'Lowers the enemy DEF and VIT DEF by (5+5*SkillLV)% and increases their ATK by (2+3*SkillLV)%. Undead property and Boss monsters are not affected. ', 'Swordsman', 'Endure (Lv 5), Tension Relax (Lv 5, Lord Knight), Parrying (Lv 5, Lord Knight)', 10, 'ro_skill_icons/sm_provoke.svg', 'No', 'None'),
(9, 'Magnum Break', '5x5 cells, Fire property splash attack with ATK of (100+20*SkillLV)% and a +10*SkillLV bonus to HIT. Enemies hit by the attack are pushed back 2 cells. Drains 15 HP per use, but cannot kill character.\r\nAfter usage, it adds a 20% Fire-elemental bonus to ATK that lasts for 10 seconds. After the cast the attack sequence is not interrupted.', 'Swordsman', 'Bowling Bash (Lv 3, Knight), Aura Blade (Lv 5, Lord Knight)', 10, 'ro_skill_icons/sm_magnum.svg', 'No', 'Bash Lv 5'),
(10, 'Endure', 'Makes character skip \"flinch\" animation when hit, thus preventing \"stun lock\". You still take full damage from hits, but you keep on doing whatever you were doing without pause.\r\nA sitting character does not stand up when hit while affected by Endure.\r\nThe effect cancels out after 7 monster hits. However there is NO maximum for Players hitting the caster. Provides a +1*SkillLV bonus to MDEF.\r\nAfter the first cast you have to wait 10 seconds to cast this skill again.\r\nThe Endure effect doesn\'t work during War of Emperium. You only get MDEF bonus.', 'Swordsman', 'Riding (Lv 1, Knight), Riding (Lv 1, Crusader), Tension Relax (Lv 3, Lord Knight), Sacrifice (Lv 1, Paladin), Pressure (Lv 5, Paladin)', 10, 'ro_skill_icons/sm_endure.svg', 'No', 'Provoke Lv 5'),
(11, 'Moving HP Recovery', 'Character regenerates HP while walking. Rate is 50% of standing recovery, and not affected by Increase Recuperative Power skill. ', 'Swordsman', 'None', 1, 'ro_skill_icons/sm_movingrecovery.svg', 'Yes', 'None'),
(12, 'Fatal Blow', 'Adds chance of causing stun on target when using Bash level 6 or above. Base Stun Chance is 5%*(Bash SkillLV - 5) with a further modifier from character BaseLV and a minimum chance of 0%.', 'Swordsman', 'None', 1, 'ro_skill_icons/sm_fatalblow.svg', 'Yes', 'None'),
(13, 'Auto Berserk', 'When your HP goes below 25%, you gain the effect of Provoke L10 on yourself. That means +32% ATK and -55% VIT DEF. The effect lasts until the character returns to more than 25% HP. The skill can be set to activate or not. The skill will even function after it has drained all your SP.', 'Swordsman', 'None', 1, 'ro_skill_icons/sm_autoberserk.svg', 'Yes', 'None'),
(14, 'Increase Spiritual Power', 'Recovers (Maximum SP/500 + 3)*SkillLV SP per 10 full seconds when standing still and increases the efficiency of SP recovering items by +2% per SkillLV.', 'Magician', 'Magic Crasher (Lv 1, High Wizard), Soul Drain (Lv 5, High Wizard), Health Conversion (Lv 1, Professor), Mind Breaker (Lv 3, Professor)', 10, 'ro_skill_icons/mg_srecovery.svg', 'No', 'None'),
(15, 'Sight', 'Nullifies the Hide, Tunnel Drive and Cloaking effects within range.', 'Magician', 'Fire Wall (Lv 1), Sightrasher (Lv 1, Wizard)', 1, 'ro_skill_icons/mg_sight.svg', 'No', 'None'),
(16, 'Napalm Beat', 'Hits every Enemy in a 3x3 area around the target for an MATK of (70+10*SkillLV)% using Ghost Element. This damage is spread equally between all targets. For example, if 3 monsters are hit, then each takes 1/3rd of the damage a single target would take.', 'Magician', 'Safety Wall (Lv 7), Soul Strike (Lv 4), Jupitel Thunder (Lv 1, Wizard), Napalm Vulcan (Lv 5, High Wizard)', 10, 'ro_skill_icons/mg_napalmbeat.svg', 'No', 'None'),
(17, 'Safety Wall', 'Creates a Safety Wall effect in 1 cell. The effect will protect anyone standing on that cell from 1+SkillLV Physical attacks. The attacks do not have to hit to count against the total number of protected hits. Multiple Safety Walls do not stack on one cell.\r\nSkills from monsters closer than 4 cells are considered as melee attacks.', 'Magician', 'None', 10, 'ro_skill_icons/mg_safetywall.svg', 'No', 'Napalm Beat Lv 7, Soul Strike Lv 5'),
(18, 'Soul Strike', 'Hits the target with (1+SkillLV/2) bolts for 1*MATK using Ghost Element. Does extra 5% damage per SkillLV to Undead property Monsters.', 'Magician', 'Safety Wall (Lv 5), Soul Drain (Lv 7, High Wizard)', 10, 'ro_skill_icons/mg_soulstrike.svg', 'No', 'Napalm Beat Lv 4'),
(19, 'Cold Bolt', 'Hits the targeted enemy with 1 Water property Bolt per SkillLV for 1*MATK damage each.', 'Magician', 'Frost Diver (Lv 5), Water Ball (Lv 1, Wizard), Frost Weapon (Lv 1, Sage)', 10, 'ro_skill_icons/mg_coldbolt.svg', 'No', 'None'),
(20, 'Frost Diver', 'Hits the target for an MATK of (100+10*SkillLV)% Water Element. In addition, has a (35+3*SkillLV)% chance of causing the Frozen status to the target. Undead property and Boss monsters cannot be Frozen. Water and Fire element monsters have a greatly reduced chance of being Frozen. The MDEF of the target affects the success chance and status duration.\r\nWhile frozen, the target cannot move, attack or use skill and counts as having Water1 element. Lex Aeterna cannot be used on such a target. The Frozen status lasts until the target receives any damage or the duration ends.', 'Magician', 'Ice Wall (Lv 1, Wizard), Storm Gust (Lv 1, Wizard)', 10, 'ro_skill_icons/mg_frostdiver.svg', 'No', 'Cold Bolt Lv 5'),
(21, 'Stone Curse', 'Has a (20+4*SkillLV)% chance of causing the Stone Curse effect to the targeted enemy. The Stone Curse effect changes the targets element into Earth 1, gives +25% MDEF and -50% Def and reduces the targets HP by 1% of Maximum HP every 5 seconds (cannot drop below 25% of Maximum HP).\r\nBoss monsters cannot be Stone Cursed. Lex Aeterna and Steal cannot be used on a Stone Cursed target. Range is 2!! cells. From LV 6 on it no longer uses up a Gemstone if it fails.', 'Magician', 'Ice Wall (Lv 1, Wizard), Earth Spike (Lv 1, Wizard), Seismic Weapon (Lv 1, Sage)', 10, 'ro_skill_icons/mg_stonecurse.svg', 'No', 'None'),
(22, 'Fire Ball', 'Hits every enemy in a 5x5 area around the target with an MATK of (70+10*SkillLV)% and Fire Element. After SkillLV 6, it has a reduced cast / after-Cool Down.', 'Magician', 'Fire Wall (Lv 5)', 10, 'ro_skill_icons/mg_fireball.svg', 'No', 'Fire Bolt Lv 4'),
(23, 'Fire Wall', 'Creates 3 cells of the Fire Wall effect in a line perpendicular to the line between the caster and the targeted cell. Each cell can deliver up to 4+SkillLV Fire Element hits at MATK*0.5 before its effect is drained. When cast diagonal a wall of two rows cells will appear with 3 cells in the first and 2 cells in the last row.', 'Magician', 'Fire Pillar (Lv 1, Wizard)', 10, 'ro_skill_icons/mg_firewall.svg', 'No', 'Fire Ball Lv 5, Sight Lv 1'),
(24, 'Fire Bolt', 'Hits the targeted enemy with 1 Fire Element Bolt per SkillLV for 1*MATK each.', 'Magician', 'Fire Ball (Lv 4), Flame Launcher (Lv 1, Sage)', 10, 'ro_skill_icons/mg_firebolt.svg', 'No', 'None'),
(25, 'Lightning Bolt', 'Hits the targeted enemy with 1 Wind Element Bolt per SkillLV for 1*MATK each.', 'Magician', 'Thunder Storm (Lv 4), Sightrasher (Lv 1, Wizard), Jupitel Thunder (Lv 1, Wizard), Water Ball (Lv 1, Wizard), Lightning Loader (Lv 1, Sage)', 10, 'ro_skill_icons/mg_lightningbolt.svg', 'No', 'None'),
(26, 'Thunder Storm', 'Hits every Enemy in a 5x5 area around the targeted cell with 1 Wind Element Bolt per level at a rate of 1 bolt every 0.2 seconds. Each bolt does 0.8*MATK Wind element damage.', 'Magician', 'Meteor Storm (Lv 1, Wizard), Lord of Vermillion (Lv 1, Wizard)', 10, 'ro_skill_icons/mg_thunderstorm.svg', 'No', 'Lightning Bolt Lv 4'),
(27, 'Energy Coat', 'Reduces damage from Physical attacks (punching, weapons and skills using weapons) by draining SP. Damage reduction is better and SP lost is higher with higher SP, according to the following table: % of SP Remaining, % of Damage Reduction, % of SP Used.', 'Magician', 'None', 1, 'ro_skill_icons/mg_energycoat.svg', 'Yes', 'None'),
(28, 'Owl\'s Eye', 'Increases DEX by 1*SkillLV.', 'Archer', 'Vulture\'s Eye (Lv 3), True Sight (Lv 10, Sniper)', 10, 'ro_skill_icons/ac_owl.svg', 'No', 'None'),
(29, 'Vulture\'s Eye', 'Increases range with bows by 1*SkillLV cells and increases HIT by 1 per SkillLV.', 'Archer', 'Attention Concentrate (Lv 1), True Sight (Lv 10, Sniper), Falcon Assault (Lv 5, Sniper)', 10, 'ro_skill_icons/ac_vulture.svg', 'No', 'Owl\'s Eye Lv 3'),
(30, 'Attention Concentrate', 'Increases DEX and AGI of the casting character by (2+1*SkillLV)%. Only affects DEX/AGI from base stat, job bonus, armor and Owl\'s Eye. Does not include cards. Detects hidden and cloaked characters within a 3 cells range. ', 'Archer', 'Detecting (Lv 1, Hunter), True Sight (Lv 10, Sniper), Sharp Shooting (Lv 10, Sniper), Wind Walk (Lv 9, Sniper), Tarot Card of Fate (Lv 10, Clown), Wand of Hermode (Lv 10, Clown), Marionette Control (Lv 5, Clown), Moonlit Water Mill (Lv 5, Clown), Tarot Ca', 10, 'ro_skill_icons/ac_concentration.svg', 'No', 'Vulture\'s Eye Lv 1'),
(31, 'Double Strafing', 'Ranged attack, that fires two arrows and hits with an ATK of (180+20*SkillLV)%. Requires an equipped bow. Only 1 arrow is consumed. ', 'Archer', 'Arrow Shower (Lv 5), Beast Strafing (Lv 10, Hunter), Sharp Shooting (Lv 5, Sniper), Arrow Vulcan (Lv 5, Clown), Arrow Vulcan (Lv 5, Gypsy)', 10, 'ro_skill_icons/ac_double.svg', 'No', 'None'),
(32, 'Arrow Shower', '3x3 cells, ranged splash attack with an ATK of (75+5*SkillLV)%. Enemies hit by the attack are pushed back 2 cells. Requires an equipped bow. Only 1 arrow is consumed.', 'Archer', 'Arrow Vulcan (Lv 5, Clown), Arrow Vulcan (Lv 5, Gypsy)', 10, 'ro_skill_icons/ac_shower.svg', 'No', 'Double Strafing Lv 5'),
(33, 'Making Arrow', 'Creates arrows from an item. Different items give different amounts and types of arrows. Cannot be used if above 50% weight. ', 'Archer', 'None', 1, 'ro_skill_icons/ac_makingarrow.svg', 'Yes', 'None'),
(34, 'Charge Arrow', 'Ranged attack at 150% ATK. The target is pushed back 6 cells. Only 1 arrow is consumed. ', 'Archer', 'None', 1, 'ro_skill_icons/ac_chargearrow.svg', 'Yes', 'None'),
(35, 'Divine Protection', 'Reduces damage from Undead property and Demon family monsters by (3*SkillLV)+[0.04*(BaseLV + 1)]. Damage is subtracted after DEF reductions.\r\nDoes not work against Players.', 'Acolyte', 'Demon Bane (Lv 3), Angelus (Lv 3), Blessing (Lv 5), Iron Hand (Lv 10, Monk)', 10, 'ro_skill_icons/al_dp.svg', 'No', 'None'),
(36, 'Demon Bane', 'Increases damage against Undead property and Demon family monsters by (3*SkillLV)+[0.05*(BaseLV + 1)]. Damage ignores DEF reduction from armor, but not from VIT. The skill bonus increases with higher character BaseLV. Does not work against Players.', 'Acolyte', 'Signum Crucis (Lv 3), Iron Hand (Lv 10, Monk), Mana Recharge (Lv 10, High Priest)', 10, 'ro_skill_icons/al_demonbane.svg', 'No', 'Divine Protection Lv 3'),
(37, 'Ruwach', 'Reveals Hiding and Cloaking players and monsters within range. Revealed players and monsters are hit with a holy element Magic attack with a strength of MATK*1.45.', 'Acolyte', 'Teleportation (Lv 1), Lex Divina (Lv 1, Priest)', 1, 'ro_skill_icons/al_ruwach.svg', 'No', 'None'),
(38, 'Pneuma', 'Creates a 3x3 cell cloud (although the animation only appears to cover the center cell!) around the target cell that blocks all ranged Physical attacks.\r\nThis means that it also blocks the bow attacks of players, so take care not to prevent any Hunters or Bow Thieves in the party from being able to do damage!\r\nMonsters count as being \"ranged\" if their attack has a range of 4 or more cells. Pneuma cannot be cast if it is targeted to overlap an already existing Pneuma area or a Safety Wall cell.\r\nDoes not block splash damage or negate the Flee reducing effects of having multiple targets attacking you. Do note that although you can see the animation on top of a Land Protector, Pneuma will have no effect.', 'Acolyte', 'None', 1, 'ro_skill_icons/al_pneuma.svg', 'No', 'Warp Portal Lv 4'),
(39, 'Teleportation', 'At level 1, you can teleport to a random spot on the same map. At level 2, you can also choose to teleport to your save point. When Teleportation is actually cast, a window will appear showing the available options (including cancel).\r\nYou must actually select an option by clicking or with the up/down arrow keys and pressing enter for the effect to occur. Once you actually teleport, you will count as having \"just entered the map\". This means that Aggressive monsters won\'t see you for 3 seconds or until you move.', 'Acolyte', 'Warp Portal (Lv 2)', 2, 'ro_skill_icons/al_teleport.svg', 'No', 'Ruwach Lv 1'),
(40, 'Warp Portal', 'Creates a warp portal at the targeted cell after a destination is selected from a list. This spell cannot be cast under a monster or player.\r\nIf anyone steps onto the targeted cell while the destination is being selected, the spell will fail. After successful casting, anyone stepping onto the affected cell will be teleported to the selected destination.', 'Acolyte', 'Pneuma (Lv 4)', 4, 'ro_skill_icons/al_warp.svg', 'No', 'Teleportation Lv 2'),
(41, 'Heal', 'Heals a target\'s HP for [(BaseLV+INT)/8]*(4+8*SkillLV). When used against Undead property monsters, it is a holy attack that ignores MDEF and INT, but deals only half damage (that is, HealValue*ElementModifier/2).\r\nTo use against a monster, you must shift-click it or turn on /noshift.', 'Acolyte', 'Increase Agility (Lv 3), Cure (Lv 2), Sanctuary (Lv 1, Priest), Coluceo Heal (Lv 1, Arch Bishop)', 10, 'ro_skill_icons/al_heal.svg', 'No', 'None'),
(42, 'Increase Agility', 'Increases AGI of target by 2+SkillLV and increases movement speed by 25%. Casting is accompanied by the \"AGI UP\" message over the target. Dispels Decrease Agility when cast. Dispelled by Decrease Agility and Quagmire.\r\nA monster or player in the area of effect of a Quagmire spell cannot receive the benefits of Increase Agility.\r\nThis skill consumes some HP along with the SP cost.', 'Acolyte', 'Decrease Agility (Lv 1), Canto Candidus (Lv 1, Arch Bishop)', 10, 'ro_skill_icons/al_incagi.svg', 'No', 'Heal Lv 3'),
(43, 'Decrease Agility', 'Decreases AGI of target by 2+SkillLV and reduces movement speed by 25%. The skill can fail and success is indicated by the text \"AGI down\" on the target at the time of casting.\r\nA successful cast will dispel Increase Agility, Adrenaline Rush, Two-Hand Quicken, Spear Quicken and Cart Boost. The effects of this skill combine with Quagmire in the form AGI/2-2+SkillLV.', 'Acolyte', 'None', 10, 'ro_skill_icons/al_decagi.svg', 'No', 'Increase Agility Lv 1'),
(44, 'Aqua Benedicta', 'Creates 1 Holy Water. Caster must stand in water for the skill to succeed. Map-wide submersion (Undersea Tunnel LV 4/5 or Sunken Ship) does not work.', 'Acolyte', 'Aspersio (Lv 1, Priest)', 1, 'ro_skill_icons/al_holywater.svg', 'No', 'None'),
(45, 'Signum Crucis', 'Reduces the DEF (not VIT DEF) of Undead property and Demon family monsters on screen by (10+4*SkillLV)% (further modified by target- and caster base levels).\r\nThe skill can fail on a monster, the formula for success is believed to be SuccessRate in %= 23 + 4*SkillLV + BaseLV - TargetLV.\r\nThe monsters affected are indicated by the sweat drop emotion (/swt). The effect of Signum Crucis stacks with the effects of Provoke.', 'Acolyte', 'None', 10, 'ro_skill_icons/al_crucis.svg', 'No', 'Demon Bane Lv 3'),
(46, 'Angelus', 'Increases the DEF from VIT of all party members on screen by (5*SkillLV)%. Does not increase anything else that has to do with VIT at all. ', 'Acolyte', 'Kyrie Eleison (Lv 2, Priest), Assumptio (Lv 1, High Priest)', 10, 'ro_skill_icons/al_angelus.svg', 'No', 'Divine Protection Lv 3'),
(47, 'Blessing', 'Increases STR, DEX and INT of the target by 1*SkillLV and removes any Curse effect.\r\nIf used on Undead property or Demon family monsters, it halves their STR, DEX and INT, regardless of skill level.\r\nThis \"Bless Curse\" or \"Offensive Blessing\" will lower the HIT and MATK of a monster, but has no effect on ATK.\r\nThis effect does not work against Players or Boss monsters.', 'Acolyte', 'Clementia (Lv 1, Arch Bishop)', 10, 'ro_skill_icons/al_blessing.svg', 'No', 'Divine Protection Lv 5'),
(48, 'Cure', 'Cures Blind, Confusion and Silence (limitation: you can\'t cure yourself from Silence since you can\'t cast while Silenced).\r\nDoes not work against Players.', 'Acolyte', 'None', 1, 'ro_skill_icons/al_cure.svg', 'No', 'Heal Lv 2'),
(49, 'Holy Light', 'Does a single Holy element hit for 125% of your MATK.', 'Acolyte', 'None', 1, 'ro_skill_icons/al_holylight.svg', 'Yes', 'None'),
(50, 'Enlarge Weight Limit', 'Increases maximum carrying capacity by 200*SkillLV.', 'Merchant', 'Discount (Lv 3), Pushcart (Lv 5)', 10, 'ro_skill_icons/mc_inccarry.svg', 'No', 'None'),
(51, 'Discount', 'Allows buying items at reduced prices from NPC shops. Deals, vending shops, and chat-selling NPCs (e.g. Upgrade stone NPC) are not affected. The final price is always rounded down and has a minimum value of 1z.', 'Merchant', 'Overcharge (Lv 3)', 10, 'ro_skill_icons/mc_discount.svg', 'No', 'Enlarge Weight Limit Lv 3'),
(52, 'Overcharge', 'Allows selling items at increased prices to NPC shops. Deals are not affected. The final price is always rounded down and has a minimum value of 0z.', 'Merchant', 'None', 10, 'ro_skill_icons/mc_overcharge.svg', 'No', 'Discount Lv 3'),
(53, 'Pushcart', 'Allows the character to equip and use a pushcart. Movement speed with a Pushcart equipped is (50+5*SkillLV)% (yes, you move much slower at the beginning).\r\nThe pushcart can hold 8000 Weight and a maximum of 100 distinct items(some items stack, so count as only 1 distinct item). Pushcarts must be bought from a Kafra Employee and there is at least one present in every town and some may be found in other locations.', 'Merchant', 'Vending (Lv 3), Cart Boost (Lv 5, Whitesmith)', 10, 'ro_skill_icons/mc_pushcart.svg', 'No', 'Enlarge Weight Limit Lv 5'),
(54, 'Identify', 'Identifies an unidentified item. Unidentified item must be in inventory (not cart). A Magnifier duplicates the effect of this skill.', 'Merchant', 'None', 1, 'ro_skill_icons/mc_identify.svg', 'No', 'None'),
(55, 'Vending', 'Allows the character to set up a shop at his current location. The items you want to sell must be in the characters pushcart, and the character must have his pushcart equipped.\r\nBe very careful to set the correct price!\r\nThe limit on distinct items that can be sold at one time is 2+SkillLV. Players cannot sell items to a vending shop, and the Discount skill does not apply.\r\nIt will close automatically if all items are sold or if the character is killed.', 'Merchant', 'Buying Store (Lv 1)', 10, 'ro_skill_icons/mc_vending.svg', 'No', 'Pushcart Lv 3'),
(56, 'Mammonite', 'Uses 100z*SkillLV to increase ATK to (100+50*SkillLV)% for the next attack.', 'Merchant', 'Cart Termination (Lv 10, Whitesmith)', 10, 'ro_skill_icons/mc_mammonite.svg', 'No', 'None'),
(57, 'Buying Store', 'Enables the ability to open a purchase stall to buy various kinds of items. Must have at least 1 item you are buying.', 'Merchant', 'None', 1, 'ro_skill_icons/all_buying_store.svg', 'No', 'Vending Lv 1'),
(58, 'Change Cart', 'Lets you change the appearance of your cart. A \"for fun\" skill, but because the appearances you can pick is restricted by the characters base level, you can tell a high level merchant or blacksmith just by looking at their cart.', 'Merchant', 'Cart Boost (Lv 1, Whitesmith)', 1, 'ro_skill_icons/mc_changecart.svg', 'Yes', 'None'),
(59, 'Loud Exclamation', 'Adds +4 STR.', 'Merchant', 'None', 1, 'ro_skill_icons/mc_loud.svg', 'Yes', 'None'),
(60, 'Cart Revolution', 'Does ATK*150% neutral-property damage to 3x3 area around your target. Enemies hit by the attack are pushed back 2 cells. The appearance is just like Magnum Break, except you also see your cart go flying over your head and hitting the ground in front of yo', 'Merchant', 'Cart Boost (Lv 1, Whitesmith)', 1, 'ro_skill_icons/mc_cartrevolution.svg', 'Yes', 'None'),
(61, 'Cart Decoration', 'Change Pushcart appearance.', 'Merchant', 'None', 1, 'ro_skill_icons/mc_cartdecorate.svg', 'Yes', 'None'),
(62, 'Double Attack', 'Gives chance to double swing a Dagger class weapon with a chance equal to (5*SkillLV)%, and adds +1 HIT per SkillLV (that only applies in double attacks). In the case of an Assassin wielding two Dagger class weapons, it applies to the right-hand weapon only.\r\nIt also boosts the off-hand (left hand) damage of a Katar weapon by (1+2*SkillLV)% ATK.', 'Thief', 'Advanced Katar Research (Lv 5, Assassin Cross), Soul Breaker (Lv 5, Assassin Cross)', 10, 'ro_skill_icons/tf_double.svg', 'No', 'None'),
(63, 'Increase Dodge', 'Increases Flee Rate by +3*SkillLV. This skill boosts the walking speed for Assassins by 1% per SkillLV and gives an additional +1 Flee Rate per SkillLV when you are an Assassin or Rogue.\r\nThe walking speed bonus does not add to the walking speed increase when using Cloaking.', 'Thief', 'None', 10, 'ro_skill_icons/tf_miss.svg', 'No', 'None'),
(64, 'Steal', 'Attempts to \"steal\" an item from the targeted monster. Only items dropped by the monster can be stolen. A successful Steal attempt will not affect what is dropped when the monster dies.\r\nAfter success, it is not possible to Steal again from the same monster. Boss, Frozen and Stone Cursed monsters cannot be robed.', 'Thief', 'Hiding (Lv 5), Snatcher (Lv 1, Rogue)', 10, 'ro_skill_icons/tf_steal.svg', 'No', 'None'),
(65, 'Hiding', 'Toggles the hide effect on the character on/off. Toggling the hide effect off consumes no SP. Hidden characters cannot move, attack or use any skill (except certain Rogue skills) and do not regenerate HP or SP.\r\nThe hide effect makes a character invisible to other players and monsters. This stops skills and spells that are targeted at you from working (those with casting times fail) and anything attacking you stops (assuming that their last hit doesn\'t hit you and reveal you!).', 'Thief', 'Cloaking (Lv 2, Assassin), Tunnel Drive (Lv 1, Rogue), Chase Walk (Lv 5, Stalker)', 10, 'ro_skill_icons/tf_hiding.svg', 'No', 'Steal Lv 5'),
(66, 'Envenom', 'An attack that adds 15*SkillLV to your ATK (unmodified by Armor and VIT Def) to your normal damage. This bonus damage is always inflicted, whether your character lands a normal hit or not.\r\nEnvenom has a (10+4*SkillLV)% chance to inflict poison status on target. Poisoned targets have their DEF reduced by 25% and lose 3% of Maximum HP every 3 seconds unless that would cause HP to drop below 25% of Maximum HP.', 'Thief', 'Detoxify (Lv 3), Enchant Poison (Lv 1, Assassin), Create Deadly Poison (Lv 10, Assassin Cross), Soul Breaker (Lv 5, Assassin Cross)', 10, 'ro_skill_icons/tf_poison.svg', 'No', 'None'),
(67, 'Detoxify', 'Cures poison status on target.', 'Thief', 'Create Deadly Poison (Lv 1, Assassin Cross)', 1, 'ro_skill_icons/tf_detoxify.svg', 'No', 'Envenom Lv 3'),
(68, 'Sprinkle Sand', 'An attack with 130% normal ATK and with a 20% chance to cause blind effect. Although it has no Cast Time or Cool Down it can\'t be spammed.', 'Thief', 'None', 1, 'ro_skill_icons/tf_sprinklesand.svg', 'Yes', 'None'),
(69, 'Back Sliding', 'Moves you backwards 5 cells (depends on the direction you are facing).', 'Thief', 'None', 1, 'ro_skill_icons/tf_backsliding.svg', 'Yes', 'None'),
(70, 'Pick Stone', 'Adds one Stone item to your inventory. Will not work if you are overweight (more than 50% of total weight capacity).', 'Thief', 'None', 1, 'ro_skill_icons/tf_pickstone.svg', 'Yes', 'None'),
(71, 'Throw Stone', 'An attack that always does 50 points of damage (but does not ignore damage reduction cards) and has a 3% chance of causing the stun effect on the target. Consumes one stone per use. Useful for luring monsters link monsters away from a pack and other such sneaky thief-like tricks.', 'Thief', 'None', 1, 'ro_skill_icons/tf_throwstone.svg', 'Yes', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `skill_sims`
--

CREATE TABLE `skill_sims` (
  `id` int(10) NOT NULL,
  `skill_id` int(10) DEFAULT NULL,
  `level` int(10) NOT NULL,
  `build_id` int(10) DEFAULT NULL,
  `pts_left` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `skill_sims`
--

INSERT INTO `skill_sims` (`id`, `skill_id`, `level`, `build_id`, `pts_left`) VALUES
(15, 14, 10, 11, 4),
(16, 15, 0, 11, 4),
(17, 16, 10, 11, 4),
(18, 17, 10, 11, 4),
(19, 18, 5, 11, 4),
(20, 19, 0, 11, 4),
(21, 20, 0, 11, 4),
(22, 21, 10, 11, 4),
(23, 22, 0, 11, 4),
(24, 23, 0, 11, 4),
(25, 24, 0, 11, 4),
(26, 25, 0, 11, 4),
(27, 26, 0, 11, 4),
(28, 27, 1, 11, 4),
(107, 62, 6, 19, 13),
(108, 63, 10, 19, 13),
(109, 64, 10, 19, 13),
(110, 65, 10, 19, 13),
(111, 66, 0, 19, 13),
(112, 67, 0, 19, 13),
(113, 68, 1, 19, 13),
(114, 69, 1, 19, 13),
(115, 70, 1, 19, 13),
(116, 71, 1, 19, 13),
(129, 28, 10, 21, 0),
(130, 29, 10, 21, 0),
(131, 30, 10, 21, 0),
(132, 31, 10, 21, 0),
(133, 32, 9, 21, 0),
(134, 33, 1, 21, 0),
(135, 34, 1, 21, 0),
(136, 28, 10, 22, 0),
(137, 29, 10, 22, 0),
(138, 30, 9, 22, 0),
(139, 31, 10, 22, 0),
(140, 32, 10, 22, 0),
(141, 33, 1, 22, 0),
(142, 34, 1, 22, 0),
(143, 4, 10, 23, 29),
(144, 5, 10, 23, 29),
(145, 6, 0, 23, 29),
(146, 7, 0, 23, 29),
(147, 8, 0, 23, 29),
(148, 9, 0, 23, 29),
(149, 10, 0, 23, 29),
(150, 11, 1, 23, 29),
(151, 12, 1, 23, 29),
(152, 13, 1, 23, 29),
(153, 1, 9, 24, 40),
(154, 2, 1, 24, 40),
(155, 3, 1, 24, 40),
(156, 28, 10, 25, 29),
(157, 29, 0, 25, 29),
(158, 30, 0, 25, 29),
(159, 31, 10, 25, 29),
(160, 32, 0, 25, 29),
(161, 33, 1, 25, 29),
(162, 34, 1, 25, 29);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `display_photo` varchar(255) NOT NULL DEFAULT 'images/user_default.png',
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `display_photo`, `file_name`) VALUES
(1, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin@admin.com', 'admin', 'uploads/hp.jpg', 'hp.jpg'),
(5, 'test', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'new@admin.com', 'regular', 'uploads/RagnarokStalker.jpg', 'RagnarokStalker.jpg'),
(6, 'ghghgh', '85a12e6849725369722ceebce2c904eabe016e20', 'new@admin.com', 'regular', 'images/user_default.png', 'user_default.png'),
(7, 'some_old_noob', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'test@test.gov', 'regular', 'uploads/BlacksmithCute.jpg', 'BlacksmithCute.jpg'),
(10, 'some_guy', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'some_guy@cooldomain.com', 'regular', 'images/user_default.png', ''),
(11, 'master_smith19', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'master@mastersmith.com', 'regular', 'images/user_default.png', ''),
(13, 'some_guy1', '3da541559918a808c2402bba5012f6c60b27661c', 'some_guy@cooldomain.com', 'regular', 'uploads/download.jpg', 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `builds`
--
ALTER TABLE `builds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `build_comments`
--
ALTER TABLE `build_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`),
  ADD KEY `commenter_id` (`commenter_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_name`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `skill_sims`
--
ALTER TABLE `skill_sims`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill_id` (`skill_id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `builds`
--
ALTER TABLE `builds`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `build_comments`
--
ALTER TABLE `build_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `skill_sims`
--
ALTER TABLE `skill_sims`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `builds`
--
ALTER TABLE `builds`
  ADD CONSTRAINT `builds_ibfk_1` FOREIGN KEY (`acct_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `build_comments`
--
ALTER TABLE `build_comments`
  ADD CONSTRAINT `build_comments_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `build_comments_ibfk_2` FOREIGN KEY (`commenter_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`class`) REFERENCES `classes` (`class_name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `skill_sims`
--
ALTER TABLE `skill_sims`
  ADD CONSTRAINT `skill_sims_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skill_sims_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
