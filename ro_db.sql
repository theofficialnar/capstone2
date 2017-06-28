-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2017 at 02:33 PM
-- Generation Time: Jun 28, 2017 at 10:46 AM
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
  `acct_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `description` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `required_for` varchar(255) NOT NULL,
  `max_level` int(10) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `description`, `class`, `required_for`, `max_level`, `icon`) VALUES
(1, 'Basic Skill', 'Enable to apply Basic Interface Skills.', 'Novice', 'All first job skills.', 9, 'ro_skill_icons/nv_basic.svg'),
(2, 'First Aid', 'Heal yourself for 5 HP. Not a crazy powerful skill, but mages seem to like it for saving money on healing items.', 'Novice', 'None', 1, 'ro_skill_icons/nv_firstaid.svg'),
(3, 'Trick Dead', 'You lay on the ground like you were dead and aggressive monsters won\'t target you. You can\'t recover HP or SP while pretending to be dead. You can Trick Dead as long as you want.\r\nCasting Trick Dead a second time cancels it, letting you move again. Once y', 'Novice', 'None', 1, 'ro_skill_icons/nv_trickdead.svg'),
(4, 'Sword Mastery', 'Increases damage with Daggers and Swords (1-handed only) by 4*SkillLV. This damage ignores modification from Armor and VIT defense, but not from Elemental and Card modifiers and applies to all hits for multi hit attacks. ', 'Swordsman', 'Two-Handed Sword Mastery (Lv 1)', 10, 'ro_skill_icons/sm_sword.svg'),
(5, 'Two-Handed Sword Mastery', '	Increases damage with Two-Handed Swords by 4*SkillLV. This damage ignores modification from Armor and VIT defense, but not from Elemental and Card modifiers and applies to all hits for multi hit attacks. ', 'Swordsman', 'Two-Hand Quicken (Lv 1, Knight), Auto Counter (Lv 1, Knight), Bowling Bash (Lv 5, Knight), Parrying (Lv 10, Lord Knight), Aura Blade (Lv 5, Lord Knight)', 10, 'ro_skill_icons/sm_twohand.svg'),
(6, 'Increase Recuperative Power', 'Heals ((5*SkillLV) + (Maximum HP*0.002*SkillLV)) HP per 10 full seconds spent standing on one cell. Increases the effect of healing items by (10*SkillLV)% (cumulative with the increase from VIT).', 'Swordsman', 'Concentration (Lv 5, Lord Knight), Tension Relax (Lv 10, Lord Knight)', 10, 'ro_skill_icons/sm_recovery.svg'),
(7, 'Bash', 'A melee attack with ATK equal to (100+30*SkillLV)%. There is a HIT bonus of 5*SkillLV. If the character has the Fatal Blow skill as well, levels 6-10 will add a chance to Stun of 5%*(Bash SkillLV - 5) plus a bonus depending on BaseLV.', 'Swordsman', 'Magnum Break (Lv 5), Bowling Bash (Lv 10, Knight)', 10, 'ro_skill_icons/sm_bash.svg'),
(8, 'Provoke', 'Lowers the enemy DEF and VIT DEF by (5+5*SkillLV)% and increases their ATK by (2+3*SkillLV)%. Undead property and Boss monsters are not affected. ', 'Swordsman', 'Endure (Lv 5), Tension Relax (Lv 5, Lord Knight), Parrying (Lv 5, Lord Knight)', 10, 'ro_skill_icons/sm_provoke.svg'),
(9, 'Magnum Break', '5x5 cells, Fire property splash attack with ATK of (100+20*SkillLV)% and a +10*SkillLV bonus to HIT. Enemies hit by the attack are pushed back 2 cells. Drains 15 HP per use, but cannot kill character. After usage, it adds a 20% Fire-elemental bonus to ATK', 'Swordsman', 'Bowling Bash (Lv 3, Knight), Aura Blade (Lv 5, Lord Knight)', 10, 'ro_skill_icons/sm_magnum.svg'),
(10, 'Endure ', '	Makes character skip \"flinch\" animation when hit, thus preventing \"stun lock\". You still take full damage from hits, but you keep on doing whatever you were doing without pause. A sitting character does not stand up when hit while affected by Endure. The', 'Swordsman', 'Riding (Lv 1, Knight), Riding (Lv 1, Crusader), Tension Relax (Lv 3, Lord Knight), Sacrifice (Lv 1, Paladin), Pressure (Lv 5, Paladin)', 10, 'ro_skill_icons/sm_endure.svg'),
(11, 'Moving HP Recovery', 'Character regenerates HP while walking. Rate is 50% of standing recovery, and not affected by Increase Recuperative Power skill. ', 'Swordsman', 'None', 1, 'ro_skill_icons/sm_movingrecovery.svg'),
(12, 'Fatal Blow', 'Adds chance of causing stun on target when using Bash level 6 or above. Base Stun Chance is 5%*(Bash SkillLV - 5) with a further modifier from character BaseLV and a minimum chance of 0%.', 'Swordsman', 'None', 1, 'ro_skill_icons/sm_fatalblow.svg'),
(13, 'Auto Berserk', 'When your HP goes below 25%, you gain the effect of Provoke L10 on yourself. That means +32% ATK and -55% VIT DEF. The effect lasts until the character returns to more than 25% HP. The skill can be set to activate or not. The skill will even function afte', 'Swordsman', 'None', 1, 'ro_skill_icons/sm_autoberserk.svg'),
(14, '	Increase Spiritual Power', 'Recovers (Maximum SP/500 + 3)*SkillLV SP per 10 full seconds when standing still and increases the efficiency of SP recovering items by +2% per SkillLV.', 'Magician', 'Magic Crasher (Lv 1, High Wizard), Soul Drain (Lv 5, High Wizard), Health Conversion (Lv 1, Professor), Mind Breaker (Lv 3, Professor)', 10, 'ro_skill_icons/mg_srecovery.svg'),
(15, 'Sight', 'Nullifies the Hide, Tunnel Drive and Cloaking effects within range.', 'Magician', 'Fire Wall (Lv 1), Sightrasher (Lv 1, Wizard)', 1, 'ro_skill_icons/mg_sight.svg'),
(16, 'Napalm Beat', 'Hits every Enemy in a 3x3 area around the target for an MATK of (70+10*SkillLV)% using Ghost Element. This damage is spread equally between all targets. For example, if 3 monsters are hit, then each takes 1/3rd of the damage a single target would take.', 'Magician', 'Safety Wall (Lv 7), Soul Strike (Lv 4), Jupitel Thunder (Lv 1, Wizard), Napalm Vulcan (Lv 5, High Wizard)', 10, 'ro_skill_icons/mg_napalmbeat.svg'),
(17, 'Safety Wall', 'Creates a Safety Wall effect in 1 cell. The effect will protect anyone standing on that cell from 1+SkillLV Physical attacks. The attacks do not have to hit to count against the total number of protected hits. Multiple Safety Walls do not stack on one cel', 'Magician', 'None', 10, 'ro_skill_icons/mg_safetywall.svg'),
(18, 'Soul Strike', 'Hits the target with (1+SkillLV/2) bolts for 1*MATK using Ghost Element. Does extra 5% damage per SkillLV to Undead property Monsters.', 'Magician', 'Safety Wall (Lv 5), Soul Drain (Lv 7, High Wizard)', 10, 'ro_skill_icons/mg_soulstrike.svg'),
(19, 'Cold Bolt', 'Hits the targeted enemy with 1 Water property Bolt per SkillLV for 1*MATK damage each.', 'Magician', 'Frost Diver (Lv 5), Water Ball (Lv 1, Wizard), Frost Weapon (Lv 1, Sage)', 10, 'ro_skill_icons/mg_coldbolt.svg'),
(20, 'Frost Diver', 'Hits the target for an MATK of (100+10*SkillLV)% Water Element. In addition, has a (35+3*SkillLV)% chance of causing the Frozen status to the target. Undead property and Boss monsters cannot be Frozen. Water and Fire element monsters have a greatly reduce', 'Magician', 'Ice Wall (Lv 1, Wizard), Storm Gust (Lv 1, Wizard)', 10, 'ro_skill_icons/mg_frostdiver.svg'),
(21, 'Stone Curse', 'Has a (20+4*SkillLV)% chance of causing the Stone Curse effect to the targeted enemy. The Stone Curse effect changes the targets element into Earth 1, gives +25% MDEF and -50% Def and reduces the targets HP by 1% of Maximum HP every 5 seconds (cannot drop', 'Magician', 'Ice Wall (Lv 1, Wizard), Earth Spike (Lv 1, Wizard), Seismic Weapon (Lv 1, Sage)', 10, 'ro_skill_icons/mg_stonecurse.svg'),
(22, 'Fire Ball', 'Hits every enemy in a 5x5 area around the target with an MATK of (70+10*SkillLV)% and Fire Element. After SkillLV 6, it has a reduced cast / after-Cool Down.', 'Magician', 'Fire Wall (Lv 5)', 10, 'ro_skill_icons/mg_fireball.svg'),
(23, 'Fire Wall', 'Creates 3 cells of the Fire Wall effect in a line perpendicular to the line between the caster and the targeted cell. Each cell can deliver up to 4+SkillLV Fire Element hits at MATK*0.5 before its effect is drained. When cast diagonal a wall of two rows c', 'Magician', 'Fire Pillar (Lv 1, Wizard)', 10, 'ro_skill_icons/mg_firewall.svg'),
(24, 'Fire Bolt', 'Hits the targeted enemy with 1 Fire Element Bolt per SkillLV for 1*MATK each.', 'Magician', 'Fire Ball (Lv 4), Flame Launcher (Lv 1, Sage)', 10, 'ro_skill_icons/mg_firebolt.svg'),
(25, 'Lightning Bolt', 'Hits the targeted enemy with 1 Wind Element Bolt per SkillLV for 1*MATK each.', 'Magician', 'Thunder Storm (Lv 4), Sightrasher (Lv 1, Wizard), Jupitel Thunder (Lv 1, Wizard), Water Ball (Lv 1, Wizard), Lightning Loader (Lv 1, Sage)', 10, 'ro_skill_icons/mg_lightningbolt.svg'),
(26, 'Thunder Storm', 'Hits every Enemy in a 5x5 area around the targeted cell with 1 Wind Element Bolt per level at a rate of 1 bolt every 0.2 seconds. Each bolt does 0.8*MATK Wind element damage.', 'Magician', 'Meteor Storm (Lv 1, Wizard), Lord of Vermillion (Lv 1, Wizard)', 10, 'ro_skill_icons/mg_thunderstorm.svg'),
(27, 'Energy Coat', 'Reduces damage from Physical attacks (punching, weapons and skills using weapons) by draining SP. Damage reduction is better and SP lost is higher with higher SP, according to the following table: % of SP Remaining, % of Damage Reduction, % of SP Used.', 'Magician', 'None', 1, 'ro_skill_icons/mg_energycoat.svg'),
(28, 'Owl\'s Eye', 'Increases DEX by 1*SkillLV.', 'Archer', 'Vulture\'s Eye (Lv 3), True Sight (Lv 10, Sniper)', 10, 'ro_skill_icons/ac_owl.svg'),
(29, 'Vulture\'s Eye', 'Increases range with bows by 1*SkillLV cells and increases HIT by 1 per SkillLV.', 'Archer', 'Attention Concentrate (Lv 1), True Sight (Lv 10, Sniper), Falcon Assault (Lv 5, Sniper)', 10, 'ro_skill_icons/ac_vulture.svg'),
(30, 'Attention Concentrate', 'Increases DEX and AGI of the casting character by (2+1*SkillLV)%. Only affects DEX/AGI from base stat, job bonus, armor and Owl\'s Eye. Does not include cards. Detects hidden and cloaked characters within a 3 cells range. ', 'Archer', 'Detecting (Lv 1, Hunter), True Sight (Lv 10, Sniper), Sharp Shooting (Lv 10, Sniper), Wind Walk (Lv 9, Sniper), Tarot Card of Fate (Lv 10, Clown), Wand of Hermode (Lv 10, Clown), Marionette Control (Lv 5, Clown), Moonlit Water Mill (Lv 5, Clown), Tarot Ca', 10, 'ro_skill_icons/ac_concentration.svg'),
(31, 'Double Strafing', 'Ranged attack, that fires two arrows and hits with an ATK of (180+20*SkillLV)%. Requires an equipped bow. Only 1 arrow is consumed. ', 'Archer', 'Arrow Shower (Lv 5), Beast Strafing (Lv 10, Hunter), Sharp Shooting (Lv 5, Sniper), Arrow Vulcan (Lv 5, Clown), Arrow Vulcan (Lv 5, Gypsy)', 10, 'ro_skill_icons/ac_double.svg'),
(32, 'Arrow Shower', '3x3 cells, ranged splash attack with an ATK of (75+5*SkillLV)%. Enemies hit by the attack are pushed back 2 cells. Requires an equipped bow. Only 1 arrow is consumed.', 'Archer', 'Arrow Vulcan (Lv 5, Clown), Arrow Vulcan (Lv 5, Gypsy)', 10, 'ro_skill_icons/ac_shower.svg'),
(33, 'Making Arrow', 'Creates arrows from an item. Different items give different amounts and types of arrows. Cannot be used if above 50% weight. ', 'Archer', 'None', 1, 'ro_skill_icons/ac_makingarrow.svg'),
(34, 'Charge Arrow', 'Ranged attack at 150% ATK. The target is pushed back 6 cells. Only 1 arrow is consumed. ', 'Archer', 'None', 1, 'ro_skill_icons/ac_chargearrow.svg'),
(35, 'Divine Protection', 'Reduces damage from Undead property and Demon family monsters by (3*SkillLV)+[0.04*(BaseLV + 1)]. Damage is subtracted after DEF reductions.\r\nDoes not work against Players.', 'Acolyte', 'Demon Bane (Lv 3), Angelus (Lv 3), Blessing (Lv 5), Iron Hand (Lv 10, Monk)', 10, 'ro_skill_icons/al_dp.svg'),
(36, 'Demon Bane', 'Increases damage against Undead property and Demon family monsters by (3*SkillLV)+[0.05*(BaseLV + 1)]. Damage ignores DEF reduction from armor, but not from VIT. The skill bonus increases with higher character BaseLV. Does not work against Players.', 'Acolyte', 'Signum Crucis (Lv 3), Iron Hand (Lv 10, Monk), Mana Recharge (Lv 10, High Priest)', 10, 'ro_skill_icons/al_demonbane.svg'),
(37, 'Ruwach ', 'Reveals Hiding and Cloaking players and monsters within range. Revealed players and monsters are hit with a holy element Magic attack with a strength of MATK*1.45.', 'Acolyte', 'Teleportation (Lv 1), Lex Divina (Lv 1, Priest)', 1, 'ro_skill_icons/al_ruwach.svg'),
(38, 'Pneuma', 'Creates a 3x3 cell cloud (although the animation only appears to cover the center cell!) around the target cell that blocks all ranged Physical attacks. This means that it also blocks the bow attacks of players, so take care not to prevent any Hunters or ', 'Acolyte', 'None', 10, 'ro_skill_icons/al_pneuma.svg'),
(39, 'Teleportation', 'At level 1, you can teleport to a random spot on the same map. At level 2, you can also choose to teleport to your save point. When Teleportation is actually cast, a window will appear showing the available options (including cancel). You must actually se', 'Acolyte', 'Warp Portal (Lv 2)', 2, 'ro_skill_icons/al_teleport.svg'),
(40, 'Warp Portal', 'Creates a warp portal at the targeted cell after a destination is selected from a list. This spell cannot be cast under a monster or player. If anyone steps onto the targeted cell while the destination is being selected, the spell will fail. After success', 'Acolyte', 'Pneuma (Lv 4)', 4, 'ro_skill_icons/al_warp.svg'),
(41, 'Heal', 'Heals a target\'s HP for [(BaseLV+INT)/8]*(4+8*SkillLV). When used against Undead property monsters, it is a holy attack that ignores MDEF and INT, but deals only half damage (that is, HealValue*ElementModifier/2). To use against a monster, you must shift-', 'Acolyte', 'Increase Agility (Lv 3), Cure (Lv 2), Sanctuary (Lv 1, Priest), Coluceo Heal (Lv 1, Arch Bishop)', 10, 'ro_skill_icons/al_heal.svg'),
(42, 'Increase Agility', 'Increases AGI of target by 2+SkillLV and increases movement speed by 25%. Casting is accompanied by the \"AGI UP\" message over the target. Dispels Decrease Agility when cast. Dispelled by Decrease Agility and Quagmire.\r\nA monster or player in the area of e', 'Acolyte', 'Decrease Agility (Lv 1), Canto Candidus (Lv 1, Arch Bishop)', 10, 'ro_skill_icons/al_incagi.svg'),
(43, 'Decrease Agility', 'Decreases AGI of target by 2+SkillLV and reduces movement speed by 25%. The skill can fail and success is indicated by the text \"AGI down\" on the target at the time of casting.\r\nA successful cast will dispel Increase Agility, Adrenaline Rush, Two-Hand Qui', 'Acolyte', 'None', 10, 'ro_skill_icons/al_decagi.svg'),
(44, 'Aqua Benedicta', 'Creates 1 Holy Water. Caster must stand in water for the skill to succeed. Map-wide submersion (Undersea Tunnel LV 4/5 or Sunken Ship) does not work.', 'Acolyte', 'Aspersio (Lv 1, Priest)', 1, 'ro_skill_icons/al_holywater.svg'),
(45, 'Signum Crucis', 'Reduces the DEF (not VIT DEF) of Undead property and Demon family monsters on screen by (10+4*SkillLV)% (further modified by target- and caster base levels).\r\nThe skill can fail on a monster, the formula for success is believed to be SuccessRate in %= 23 ', 'Acolyte', 'None', 10, 'ro_skill_icons/al_crucis.svg'),
(46, 'Angelus', 'Increases the DEF from VIT of all party members on screen by (5*SkillLV)%. Does not increase anything else that has to do with VIT at all. ', 'Acolyte', 'Kyrie Eleison (Lv 2, Priest), Assumptio (Lv 1, High Priest)', 10, 'ro_skill_icons/al_angelus.svg'),
(47, 'Blessing', 'Increases STR, DEX and INT of the target by 1*SkillLV and removes any Curse effect.\r\nIf used on Undead property or Demon family monsters, it halves their STR, DEX and INT, regardless of skill level.\r\nThis \"Bless Curse\" or \"Offensive Blessing\" will lower t', 'Acolyte', 'Clementia (Lv 1, Arch Bishop)', 10, 'ro_skill_icons/al_blessing.svg'),
(48, 'Cure', 'Cures Blind, Confusion and Silence (limitation: you can\'t cure yourself from Silence since you can\'t cast while Silenced).\r\nDoes not work against Players.', 'Acolyte', 'None', 1, 'ro_skill_icons/al_cure.svg');
(37, 'Ruwach ', 'Reveals Hiding and Cloaking players and monsters within range. Revealed players and monsters are hit with a holy element Magic attack with a strength of MATK*1.45.', 'Acolyte', 'Teleportation (Lv 1), Lex Divina (Lv 1, Priest)', 1, 'ro_skill_icons/al_ruwach.svg');

-- --------------------------------------------------------

--
-- Table structure for table `skill_calcs`
--

CREATE TABLE `skill_calcs` (
  `id` int(10) NOT NULL,
  `skill_id` int(10) DEFAULT NULL,
  `level` int(10) NOT NULL,
  `build_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com', 'admin'),
(5, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test', 'regular');
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com', 'admin');

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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_calcs`
--
ALTER TABLE `skill_calcs`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `skill_calcs`
--
ALTER TABLE `skill_calcs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `builds`
--
ALTER TABLE `builds`
  ADD CONSTRAINT `builds_ibfk_1` FOREIGN KEY (`acct_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skill_calcs`
--
ALTER TABLE `skill_calcs`
  ADD CONSTRAINT `skill_calcs_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skill_calcs_ibfk_2` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
