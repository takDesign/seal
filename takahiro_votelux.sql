-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2019 at 11:09 PM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takahiro_votelux`
--

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` mediumint(50) NOT NULL,
  `strTitle` varchar(255) NOT NULL,
  `strContent` longtext NOT NULL,
  `dPosted` date NOT NULL,
  `nUsersID` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `strTitle`, `strContent`, `dPosted`, `nUsersID`) VALUES
(1, 'Protect BC\'s ancient Inland Temperate Rainforest', 'Did you know that one of Canada\'s oldest, most pristine forests is at risk of destruction? In the Central Selkirk Mountains of British Columbia, the region\'s last surviving stands of old-growth Inland Temperate Rainforest are in danger of being lost forever to clearcut logging. The resident herd of endangered Mountain Caribou is crashing due to loss of old-growth forest. This is why the Valhalla Wilderness Society has proposed the Selkirk Mountain Caribou Park.\r\n\r\nThe park proposal includes the primeval Incomappleux rainforest, a forest that\'s been growing continuously for thousands of years, with trees up to 4 metres in diameter and 1,800 years old. Despite numerous studies that have revealed its exceptional biodiversity, it is covered by a current logging permit and could be logged at any time.\r\n\r\nAbout half of the 156,000-hectare park proposal has been reserved from logging by the BC Government, to provide habitat for the Mountain Caribou; but this forest is protected only as long as the herd thrives. Elsewhere in the park proposal, BC Timber Sales is starting to log caribou habitat, even while the herd is down to 25 animals, from 89 in 2008. If the Mountain Caribou herd is lost, the forest reserves will be lost, putting in jeopardy at least 40 other recognized forest-dwelling species-at-risk.\r\n\r\nExisting parks in this area are too small and isolated to protect biodiversity. This includes the existing Glacier National Park, as well as Goat Range and Bugaboo Provincial Parks. The Selkirk park proposal would connect these parks, providing travel corridors for Mountain Caribou, Grizzly Bears and many other species.\r\n\r\nPlease sign this petition to urge the BC Government to create the proposed 156,000-hectare Selkirk Mountain Caribou Park. Visit vws.org/action.', '2019-08-13', 1),
(2, 'Abolish MSP premiums in BC', 'British Columbia stands alone -- the only Canadian province to charge head-tax-like premiums for health care coverage.\r\n\r\nIt seems clear that B.C. should follow the lead of other provinces in eliminating its flat-rate MSP premiums!\r\n\r\nSince MSP premiums are a form of tax, they should be assessed by the standard criteria for taxation policy.\r\n\r\nGiven that 90 per cent of public health care costs already come from general revenues, B.C. has ample precedent for replacing its head tax with broader sources, and not becoming a Canadian outlier.\r\n\r\n It is time for British Columbia to follow the rest of the country and Abolish the MSP Premiums!!\r\n\r\nHere is a poster that you can download and get onto the community bulletin boards in your area . Please keep sharing this important petition, Thank you!', '2019-08-11', 2),
(3, 'Fines for people calling 9-1-1 to complain about Amber Alerts.', 'Ever since the Emergency Broadcasting System was brought to our phones, people have started to complain about being woken up in the middle of the night by said alerts, mostly Amber Alerts.\r\n\r\nOne of those times I remember very clearly. It was the abduction of 11-year-old Riya Rajkumar, from Brampton, ON.\r\n\r\nShe was abducted by her father, Roopesh Rajkumar. \r\n\r\nHer mother decided to call the police after he failed to bring her back home in time and also because he threatened to harm the little girl and himself.\r\n\r\nThe Amber alert woke me up that night but, all I remember was being worried about the girl and praying she would be found safe (as it happens in most Amber Alerts cases).\r\n\r\nUnfortunaly, that wasn\'t the case for poor, innocent Riya.\r\n\r\nWhile this was happening, some people (a lot of people) decided to start calling the emergency lines to COMPLAIN about the Amber Alert because it woke them up and  \"they couldn\'t do anything about it anyway\" or they were \"too far\" from where the Amber Alert had originated.\r\n\r\nThese people went on living their lives which were disrupted for all of two minutes, while the little girl was no more. They were never fined for taking time away from real emergencies. \r\n\r\nThe father had been found THANKS to the Amber Alert, but it was already too late. \r\n\r\nMore Amber Alerts have been issued since and more calls and complains have come through the emergency lines. \r\n\r\nThis is ABSURD. This has to STOP. \r\n\r\nPeople have to understand that when they dial 9-1-1, they are taking time and personnel away from actual emergencies and that these actions could COST LIVES! \r\n\r\nPlease, take a moment to sign this petition and make sure these non-emergency callers get fined for their crime!\r\n\r\nThank you. ', '2019-08-01', 1),
(4, 'Seatbelts for Canadian School Buses, Now!', 'Thousands of Canadian children are being injured and in some cases killed because school buses aren\'t equipped with seatbelts. If they were, these tragedies could be prevented.\r\n\r\nI started this petition because I\'m a school bus driver and I\'m the only one to buckle up. Does that make sense? It\'s a dollars over safety issue!\r\n\r\nA previously unreleased 2010 Transport Canada test crash study revealed that school buses failed safety tests and failed to prevent serious injuries in the event of side-impact or rollover crashes. The tests were done on the heals of an Alberta teenager who was killed after being ejected out of the bus and dying on impact with the ground. The results of the test and study were not released until CBC\'s investigative report show The Fifth Estate show made them public in October 2018. The report concluded that more needs to be done to \"reduce or eliminate the serious injuries\"\r\n and Transport Canada\'s chief of crashworthiness research said seatbelts are \"a good first step\" towards improving school bus safety.\r\n\r\nNine states in the USA are required by law to have three-point seatbelts for all riders. Why can’t we do the same in Canada? Liability laws for school boards, schools and drivers in the USA have been implemented and are working nicely! Canada has already borrowed seatbelt rules and regulations for seatbelt installation on school buses from the USA. With these already in place we only need to legislate usage to law! This hasn’t been done as our government doesn’t want to spend the money. They say here’s how you must do it, if you want too, However offering no funds, help or legislation. \r\n\r\nIt’s time for Canada to realize that seatbelts save lives and protect our children.\r\n\r\nYou can potentially save a child’s life by just signing this petition! Please SIGN and SHARE today. \r\n\r\nThank you, Be Safe and Buckle Up!', '2019-08-08', 9),
(5, 'Disney robs Swahili of Hakuna Matata', 'Problem\r\nDisney has trademarked the Swahili phrase “Hakuna Matata”.\r\n\r\nJoin us and say NO to DISNEY or any corporations/individuals looking to trademark languages, terms or phrases they didn\'t invent.\r\n\r\n\"Hakuna matata\" is a Swahili language phrase from East Africa; translate, it means \"no trouble\". The word \"hakuna\" means \"there is not here\" while \"matata\" means \"problems\".\r\n\r\nHakuna Matata has been used by most Kiswahili-speaking countries such as Tanzania, Kenya, Uganda, Rwanda, Burundi, Mozambique, and the Democratic Republic of the Congo.\r\n\r\nDisney can\'t be allowed to trademark something that it didn\'t invent.\r\n\r\nWhile we respect Disney as an entertainment institution responsible for creating many of our childhood memories, the decision to trademark ‘Hakuna Matata’ is predicated purely on greed and is an insult not only the spirit of the Swahili people but also, Africa as a whole. The movie is set in Africa and the characters have African names which further makes the decision to implement the trademark a perplexing one. The term ‘Hakuna Matata’ is not a Disney creation hence not an infringement on intellectual or creative property, but an assault on the Swahili people and Africa as a whole. It sets a terrible precedence and sullies the very spirit of the term to begin with. At a time when divisiveness has taken over the world, one would think re-releasing a movie that celebrates the unlikely friendships, acceptance, and unity, Disney would make a decision that goes completely against these values.\r\n\r\nSolution\r\nSign this petition and get Disney to remove the trademark on Hakuna Matata', '2019-08-03', 10),
(6, 'Ban the Sale of Elephant Ivory in Canada #IvoryFreeCanada', 'We could be the generation that lets elephants become extinct.\r\n\r\nA shocking 20,000 elephants are killed every year for their ivory. Scientists and conservationists agree that at this rate, both African and Asian elephants will be extinct in the wild within our lifetime.\r\n\r\nEven so, at the last IUCN World Conservation Congress, Canada was 1 of only 4 countries to oppose the closure of domestic ivory markets across the globe.\r\n\r\nIvory is so valuable on the black market that organized terrorism syndicates such as the Lord’s Resistance Army are committing mass slaughter using helicopters and AK-47 rifles. In 1980 Africa had more than 1.3 million elephants – today it has approximately 415,000. In less than 40 years, 70% of our elephants have disappeared.\r\n\r\nIn 1989, the Convention on International Trade in Endangered Species of Wild Fauna and Flora (CITES) made it illegal to sell elephant ivory internationally. But each country makes its own laws regarding the sale of ivory within their borders. When domestic trade is allowed it permits illegal ivory (poached after 1989) to be sold along with legal ivory, because it’s difficult to differentiate between old and new ivory without extensive and costly testing. The only way to protect elephants from extinction is to ban ALL elephant ivory trade.\r\n\r\nChina is the largest consumer of ivory in the world. It shut down its domestic ivory trade at the end of 2017. If China can stop their domestic trade, why can’t Canada?\r\n\r\nOn March 1, 2018, the United States lifted the ban on the importation of elephant trophies. If the U.S. cannot protect elephants, there is even more onus on the rest of the world to do all we can to save this iconic species.\r\n\r\nWe feel new legislation can protect both elephants and the indigenous trade of narwhal and walrus. We ask the government of Canada to:\r\n\r\n1.  ban all domestic trade of elephant ivory; and\r\n2.  make the import, export and re-export of all elephant ivory illegal.\r\n\r\nLet’s make Canada one of the many countries changing their laws to allow the survival of the world’s largest land mammal before it’s too late. Sign for an #IvoryFreeCanada.\r\n\r\nSincerely,\r\nThe Ivory-Free Canada Coalition:\r\nElephanatics, Global March for Elephants and Rhinos-Toronto, World Elephant Day, Humane Society International-Canada and Jane Goodall Institute of Canada\r\n\r\nFor more information, please visit https://janegoodall.ca/ivory-free-canada/ ', '2019-08-05', 9),
(7, 'Loblaw Companies Inc: Provide sustainable food packaging before Earth chokes on plastic!', 'Plastic is choking the planet Earth.  As global citizens, the time has come for us to do something about it. 40% of plastic in Canada is generated for packaging - much of that for the food we eat. \r\n\r\nCBC\'s \"Marketplace\" recently broadcast an episode devoted to plastic food packaging, and the fact that supermarkets are not offering consumers a choice when it comes to what their fruits, vegetables and other foods are packed in.  THERE IS ANOTHER WAY.  The show profiled a supermarket in London, England called \"Iceland Foods\" which recently went plastic-free in 10 weeks.  The owner suggested that the big chains could do it, too... but that it\'s up to consumers to put the pressure on them. \r\n\r\nSarah R. Davis is the President of Loblaw Companies Inc. in Canada.  Ms. Davis, we hereby ask that you request your suppliers to immediately begin using environmentally friendly plant-based food packaging made from things like plant cellulose and bamboo, etc. WE WILL NOT BUY FOODS PACKAGED IN PLASTIC ANYMORE.  The time for change has come, and you have the power to be an agent of change.  Please don\'t let the planet down.  Please don\'t let Canadian consumers down. ', '2019-08-13', 12),
(8, 'Demand the UCP continue work on banning conversion therapy for LGBTQ2+ citizens in Alberta', 'The UCP has cancelled a working group tasked with banning gay conversion therapy in Alberta. This  practice is still very prevalent in Alberta, and the work that was started must continue to protect our #LGBTQ2S+ community. “At the end of the day, this really is about protecting vulnerable Albertans. Nothing else,” she said.\r\n\r\nFormer NDP health minister Sarah Hoffman established the working group in February. The working group comprised of academics, advocates, faith leaders and members of the LGBTQ2S+ community. Shandro’s press secretary Steve Buick said in a follow-up email the working group was disbanded with the change in government.\r\n\r\nIt had five months to work out how to follow the lead of Ontario and Manitoba, which have both outlawed the practice.\r\n\r\nConversion therapy is based on the unfounded idea that psychological or spiritual intervention can change someone’s sexual orientation or gender identity.', '2019-08-03', 11),
(9, 'Tim Hortons, we know you can make and use a #BetterCup!', 'After big announcements from Starbucks and McDonald’s to invest in fully recoverable hot and cold fiber cup systems to help our planet, it’s time for other fast food and coffee giants to follow — or do better.\r\n\r\nWe are Mya, Eve and Ben! We’re young environmental activists from Calgary. Earlier this year, Mya and Eve teamed up with environmental organizations to ask Starbucks to use a #BetterCup. Our petition was part of our 6th grade science fair project, and it worked! Starbucks is investing US$10 million in creating a fully recoverable hot and cold fiber cup, and McDonald’s is partnering with them too.\r\n\r\nBen also successfully petitioned Starbucks to phase out plastic straws by 2020. We’re so happy and inspired to see big companies make commitments to reduce plastic waste. We know it will help our oceans and forests, and the fight against climate change.   \r\n\r\nNow, we’re working together to ask Tim Hortons to commit to developing and using a #BetterCup — one that is fully recyclable and compostable.\r\n\r\nWe see so many people buy coffee at Tim Hortons every day and we also see their cups littering the streets and in the garbage. It is estimated that a total 600 billion single-use cups are distributed worldwide each year, most of which wind up in landfills. Our planet and our oceans can’t take any more waste! We think it’s time for Tim Hortons to join the movement towards a more sustainable future.\r\n\r\nTogether we ask Daniel Schwartz, CEO of Restaurant Brands International — the owners of Tim Hortons, Burger King and Popeye’s — to join the #BetterCup movement by investing in and using a better cup! We also ask them to move away from the single-use culture, promoting the use of reusable cups. \r\n\r\nSo many people love Tim Hortons coffee in Canada and we know they can be leaders by making this important environmental commitment.\r\n\r\nPlease join us in asking Tim Hortons to be a leader and make/use a #BetterCup! Together we can make our future greener.\r\n\r\nThank you for your support\r\nMya, Eve and Ben.\r\n\r\n--\r\n\r\nYou can check out our successful Starbucks campaigns here:\r\n- Starbucks, we know you can make a #BetterCup\r\n- Starbucks, Design and Use Fully Biodegradable Straws', '2019-08-23', 11),
(10, 'End food waste in Canada!', 'Every year, $31 billion of food ends up in a landfill in Canada alone. This isn\'t just stale bread and mouldy produce. This is good to eat food of all sorts. Produce, dairy, grain, protein, and everything outside of those.\r\n\r\nYet, nearly one million Canadians rely on food banks each month, and about four million Canadians are \"food insecure\", of which 1.5 million are children.\r\n\r\nIn 2015, the French government passed a law forbidding supermarkets from wasting and deliberately destroying food that can still be eaten. Instead, supermarkets have since been required to donate all unsold food products to charity such as food banks.\r\n\r\nA similar anti-food waste law can and should be implemented in Canada, nationwide. As it is, Quebec has a programme to recuperate unsold food from supermarkets, although it is not yet required for big surface stores to establish partnerships with organizations for redistribution. Having a programme on a federal scale that takes this program a step further is not inconceivable. It is doable, and it is already being done in communities worldwide.\r\n\r\nIn addition to the people who would be positively affected, food waste contributes greatly to climate change. Reducing food waste would benefit our environment.\r\n\r\nThis petition urges the Government of Canada through the Hon. Marie Claude Bibeau, Minister of Agriculture, to create a federal program to combat food waste. The program will:\r\n\r\n    Bar supermarkets from intentionally destroying and wasting unsold, still edible food\r\n    Require Canadian supermarkets to give unsold, still edible food to Canadian food banks\r\n    Require Canadian supermarkets to give wrongfully packaged or damaged, still edible food to Canadian food banks\r\n\r\nThe law passed in France began with a simple petition not much different from this, on this very website. That petition received over 200,000 signatures. Our goal is to obtain 100,000 and to gain national attention to this very real issue. With your support, we can make a difference, and we can show our government what matters to us. \r\n\r\nWe need you. We need your voice. We need your support. Please sign and share this petition to bring change and to bring this law into Canada!\r\n\r\nUse the #WhyWasteFood and #FoodDeservesBetter when sharing or discussing this campaign on Facebook, Instagram, and Twitter!\r\n\r\n--\r\n\r\nLearn more:\r\n\r\n    A $31B problem: How Canada sucks at reducing food waste\r\n    Man who forced French supermarkets to donate food wants to take law global\r\n    Help the environment, reduce food waste\r\n', '2019-08-15', 10),
(18, 'Test', 'Test from Cpanel', '2019-08-17', 1),
(19, 'Suggestion', 'TestTestTestTestTestTest', '2019-08-17', 25),
(20, '6666666', '66666666', '2019-08-19', 1),
(21, 'hello', 'hey heres a suggstion', '2019-09-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(50) NOT NULL,
  `strFirstName` varchar(255) NOT NULL,
  `strLastName` varchar(255) NOT NULL,
  `strEmail` varchar(255) NOT NULL,
  `strUserName` varchar(255) NOT NULL,
  `strPassword` varchar(255) NOT NULL,
  `nPoints` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `strFirstName`, `strLastName`, `strEmail`, `strUserName`, `strPassword`, `nPoints`) VALUES
(1, 'Admin', 'Lastname', 'admin@admin.com', 'a', 'a', 0),
(2, 'Bob', 'Dylan', 'bob@bob.com', 'bob', 'a', 10),
(9, 'Jonathan', 'Sheppard', 'jonathan@vanarts.com', 'jonathan', 'a', 10),
(10, 'Carolina', 'Uriarte', 'caroline@vanarts.com', 'carolina', 'a', 10),
(11, 'Sam', 'Kelley', 'sam@vanarts.com', 'sam', 'a', 10),
(12, 'Sham', 'Dhari', 'sham@vanarts.com', 'sham', 'a', 10),
(15, 'Quinn', 'MacAskill', 'quinn@vanarts.com', 'quinn', 'a', 6),
(16, 'Elisa', 'Cruz', 'elisa@vanarts.com', 'elisa', 'a', 7),
(17, 'Nathan', 'Laggatt', 'nathan@vanarts.com', 'nathan', 'hotpink', 0),
(25, 'Tak', 'Ito', 'tak@test', 'Username Test', 'password', 8),
(26, 'test', 'test', 'test', 'test', 'test', 6);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` mediumint(50) NOT NULL,
  `nSuggestionsID` mediumint(50) NOT NULL,
  `nVote` int(50) NOT NULL,
  `nUsersID` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `nSuggestionsID`, `nVote`, `nUsersID`) VALUES
(1, 1, 1, 1),
(3, 1, 1, 2),
(4, 1, 1, 2),
(5, 2, 1, 2),
(6, 1, 1, 1),
(7, 1, 1, 1),
(8, 1, 1, 1),
(9, 1, 1, 1),
(10, 1, 1, 1),
(11, 1, 1, 1),
(12, 1, 1, 1),
(27, 1, 1, 9),
(28, 1, 1, 9),
(29, 1, 1, 9),
(30, 1, 1, 9),
(31, 9, 1, 12),
(32, 8, 1, 12),
(33, 3, 1, 12),
(34, 3, 1, 12),
(35, 3, 1, 12),
(36, 3, 1, 12),
(44, 4, 1, 1),
(45, 18, 1, 1),
(46, 19, 1, 25),
(47, 19, 1, 25),
(48, 20, 1, 1),
(49, 20, 1, 1),
(50, 1, 1, 26),
(51, 5, 1, 26),
(52, 6, 1, 26),
(53, 6, 1, 26),
(54, 1, 1, 17),
(55, 1, 1, 17),
(56, 1, 1, 17),
(57, 2, 1, 17),
(58, 3, 1, 17),
(59, 4, 1, 17),
(60, 5, 1, 17),
(61, 6, 1, 17),
(62, 6, 1, 17),
(63, 6, 1, 17),
(64, 1, 1, 1),
(65, 1, 1, 1),
(66, 1, 1, 1),
(67, 1, 1, 1),
(68, 1, 1, 1),
(69, 1, 1, 1),
(70, 1, 1, 1),
(71, 1, 1, 1),
(72, 1, 1, 1),
(73, 1, 1, 1),
(74, 1, 1, 1),
(75, 1, 1, 1),
(76, 1, 1, 1),
(77, 1, 1, 1),
(78, 1, 1, 1),
(79, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suggestions_ibfk_1` (`nUsersID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_ibfk_1` (`nSuggestionsID`),
  ADD KEY `votes_ibfk_2` (`nUsersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` mediumint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` mediumint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD CONSTRAINT `suggestions_ibfk_1` FOREIGN KEY (`nUsersID`) REFERENCES `users` (`id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`nSuggestionsID`) REFERENCES `suggestions` (`id`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`nUsersID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
