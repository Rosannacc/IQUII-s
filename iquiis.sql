-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 25, 2021 alle 19:25
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iquiis`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `articolo`
--

CREATE TABLE `articolo` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `tag` varchar(300) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `wishlist` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `articolo`
--

INSERT INTO `articolo` (`id`, `title`, `tag`, `text`, `wishlist`) VALUES
(1, 'Tisana allo zenzero: le varianti da provare', 'tisana tisane zenzero', 'Un toccasana in caso di cattiva digestione, la tisana allo zenzero può essere preparata con la radice fresca o secca e aggiungendo altre erbe, spezie e profumi che ne aumentano le proprietà e la piacevolezza\r\nÈ sempre un buon momento per bere una tazza di tisana allo zenzero, soprattutto se ci è rimasto il pasto sullo stomaco. La radice dello zenzero, diventata un superfood di tendenza negli ultimi anni, ha infatti proprietà digestive e aiuta a combattere il gonfiore intestinale. Il potere dello zenzero deriva dai gingeroli (composti fitochimici) contenuti in esso che stimolano la secrezione gastrica e la peristalsi intestinale. La tisana allo zenzero è un toccasana anche contro la nausea.', 1),
(2, '10 primi per chi non ha tempo di cucinare un primo', 'pasta, primi piatti, primo, tagliatelle, spaghetti', 'Bastano dai 15 ai 20 minuti per portare in tavola un primo insolito e gustoso. Ecco 10 idee per quando abbiamo poco tempo ai fornelli\r\nQuante volte a pranzo o a cena ci riduciamo a mangiare un’insalata o ci arrangiamo con quel poco che c’è nel frigo solo perché non abbiamo tempo di cucinare? Eppure per preparare un primo completo, sostanzioso e gustoso, diverso ogni giorno, basterebbero 15-20 minuti. E, senza nulla togliere, non stiamo parlando di una pasta in bianco o di un piatto di spaghetti con un sugo pronto. Non ci credete? Scoprite queste 10 ricette per primi piatti veloci e il vostro pranzo non sarà più lo stesso!', 0),
(3, 'Insalata d\'arance e carciofini', 'arancia, arance, carciofi, insalata, insalate', 'La nostra Joëlle Nedèrlants ci ha preparato un\'insalata vitaminica di arance rosse e bionde, carciofini e olive. Facciamola insieme, seguendo la sua ricetta speciale\r\nIngredienti di stagione, bisogno di vitamine e tanta voglia di leggerezza. L’insalata di arance rosse e bionde della nostra cuoca Joëlle Nedèrlants ha tutto quello di cui abbiamo bisogno adesso e a renderla ancora più buona, il fatto che l’ha preparata apposta per noi. Facciamola insieme, seguendo la sua ricetta.', 1),
(4, 'Come fare un risotto ai funghi buonissimo', 'funghi, piatto tipico, risotto', 'Di certo è\' uno dei primi piatti più amati, perfetto da preparare con i porcini ma anche con i finferli, freschi o secchi\r\nIl risotto ai funghi è uno di quei primi piatti (invernali) che scalda subito il cuore, perfetto da condividere in un pranzo di famiglia o per un tenero tête-à-tête. Un piatto dall’intenso sapore di bosco, facile da preparare, in cui il riso si sposa benissimo con l’aroma dei funghi, che possono essere sia freschi sia secchi.', 0),
(5, 'La vera storia del pokè', 'cucina straniera', 'Tutto quello che avreste voluto sapere e non avete mai osato chiedere sul “nuovo sushi” hawaiano. Come è nato e perché in Italia è diventato così pop\r\nFino a pochi anni fa non ne conoscevamo neppure l’esistenza, ancora oggi non ne sappiamo ancora pronunciare il nome, eppure il pokè è uno dei piatti più fotografati, cucinati, ordinati e mangiati degli ultimi anni. Da New York City a Dubai, da Amsterdam a Milano, è un vero trend globale. Lo chiamiamo pokè, con l’accento, per intendere una ciotola di riso bollito sormontata di pesce crudo, verdure, frutta e salse; maionese inclusa. In realtà si legge “pok-ei”: significa, letteralmente, «a pezzetti» ed è un piatto tipico delle Hawaii. O almeno, lo era.', 1),
(6, 'Scarola in tutti i modi!', 'inverno, napoletana, napoli, ortaggi, scaroa', 'La scarola non è solo un contorno: può diventare un ripieno, ma può anche essere imbottita. E perché non utilizzarla per preparare un bel piatto di pasta? Ecco le migliori ricette con la scarola da provare\r\nFra gli ortaggi e le verdure protagoniste della cucina campana spicca la scarola, una varietà di indivia tipica della stagione autunnale e invernale. Un ingrediente ricco di vitamine e proprietà benefiche, soprattutto grazie alla grande quantità di acqua contenuta nelle foglie, che favorisce la depurazione dell’organismo.', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `articolo`
--
ALTER TABLE `articolo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `articolo`
--
ALTER TABLE `articolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
