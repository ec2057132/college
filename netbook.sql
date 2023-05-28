-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 04:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(255) UNSIGNED NOT NULL,
  `email` varchar(75) NOT NULL,
  `pwd` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `pwd`) VALUES
(1, 'ec2057132@edinburghcollege.ac.uk', '$2y$10$oBygYSW/h8utOnIKyRPseuXoUDZ8946abGM0AdXIp7Wgv0cFkCBBq');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `c_id` int(255) UNSIGNED NOT NULL,
  `u_id` int(255) UNSIGNED NOT NULL,
  `c_number` varchar(16) NOT NULL,
  `c_name` varchar(70) NOT NULL,
  `e_cvc` int(3) UNSIGNED NOT NULL,
  `c_ex_month` smallint(2) UNSIGNED NOT NULL,
  `c_ex_year` smallint(4) UNSIGNED NOT NULL,
  `s_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`c_id`, `u_id`, `c_number`, `c_name`, `e_cvc`, `c_ex_month`, `c_ex_year`, `s_date`) VALUES
(6, 1, '8080836979336398', 'Master Louis H McGarry', 805, 8, 2025, '2023-05-11 03:14:37'),
(7, 3, '0123456789012345', 'Louis H McGarry', 805, 8, 2031, '2023-05-11 14:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `e_id` int(255) UNSIGNED NOT NULL,
  `tv_id` int(255) UNSIGNED NOT NULL,
  `s_id` tinyint(255) UNSIGNED NOT NULL,
  `e_number` int(255) UNSIGNED NOT NULL,
  `e_title` varchar(40) NOT NULL,
  `e_description` varchar(500) NOT NULL,
  `e_duration` smallint(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`e_id`, `tv_id`, `s_id`, `e_number`, `e_title`, `e_description`, `e_duration`) VALUES
(1, 1, 1, 1, 'Pilot', 'Diagnosed with terminal lung cancer, chemistry teacher Walter White teams up with former student Jesse Pinkman to cook and sell crystal meth.', 58),
(2, 1, 1, 2, 'Cat\'s in the Bag...', 'After their first drug deal goes terribly wrong, Walt and Jesse are forced to deal with a corpse and a prisoner. Meanwhile, Skyler grows suspicious of Walt\'s activities.', 48),
(3, 1, 1, 3, 'And the Bag\'s in the River', 'Walt and Jesse clean up after the bathtub incident before Walt decides what course of action to take with their prisoner Krazy-8.', 48),
(4, 1, 1, 4, 'Cancer Man', 'Walt tells the rest of his family about his cancer. Jesse tries to make amends with his own parents.', 48),
(5, 1, 1, 5, 'Gray Matter', 'Walt rejects everyone who tries to help him with the cancer. Jesse tries his best to create Walt\'s meth, with the help of an old friend.', 48),
(6, 1, 1, 6, 'Crazy Handful of Nothin\'', 'With the side effects and cost of his treatment mounting, Walt demands that Jesse finds a wholesaler to buy their drugs - which lands him in trouble.', 48),
(7, 1, 1, 7, 'A No-Rough-Stuff-Type Deal', 'Walt and Jesse try to up their game by making more of the crystal every week for Tuco. Unfortunately, some of the ingredients they need are not easy to find. Meanwhile, Skyler realizes that her sister is a shoplifter.', 47),
(8, 1, 2, 1, 'Seven Thirty-Seven', 'Walt and Jesse realize how dire their situation is. They must come up with a plan to kill Tuco before Tuco kills them first.', 47),
(9, 1, 2, 2, 'Grilled', 'Walt\'s disappearance is met with investigation by both his wife and Hank, as Tuco Salamanca intends to leave town with his kidnapped cooks.', 48),
(10, 1, 2, 3, 'Bit by Dead a Bee', 'Walt and Jesse try to come up with alibis for their disappearances.', 47),
(11, 1, 2, 4, 'Down', 'Skyler keeps mysteriously leaving without talking to Walt. Jesse\'s parents throw him out of his own house.', 47),
(12, 1, 2, 5, 'Breakage', 'Walt and Jesse decide to start their own little empire with the help of Jesse\'s friends: Skinny Pete, Combo, and Badger. Meanwhile, Hank tries to pull himself together after his encounter with Tuco.', 47),
(13, 1, 2, 6, 'Peekaboo', 'After Skinny Pete gets ripped off, Walt makes Jesse go get the money. Meanwhile, Walt\'s cover story on how Elliott and Gretchen are paying for his medical treatment is on the verge of collapsing.', 47),
(14, 1, 2, 7, 'Negro y Azul', 'Rumor is spreading that Jesse killed the man that ripped Skinny Pete off. Walt uses this to his advantage on expanding their territory. Meanwhile, Hank has been promoted to the El Paso office. But it\'s not all he hoped it would be.', 47),
(15, 1, 2, 8, 'Better Call Saul', 'Badger is caught by the DEA. Walt and Jesse hire the best criminal lawyer in town, Saul Goodman.', 47),
(16, 1, 2, 9, '4 Days Out', 'Walt and Jesse become stranded out in the middle of the desert after cooking more crystal.', 47),
(17, 1, 2, 10, 'Over', 'Walt\'s cancer has greatly improved. Time to celebrate. Meanwhile Jesse tries to meet his new girlfriend\'s father.', 47),
(18, 1, 2, 11, 'Mandala', 'Walt and Jesse\'s little empire begins to crumble. Saul tries to set them up with a mysterious distributor.', 47),
(19, 1, 2, 12, 'Phoenix', 'Walt and Skyler have a baby girl. Now that Jesse is hooked on heroin, Walt refuses to give him his money until he gets clean. Meanwhile, as an excuse for his money, Walt decides to donate the money to himself through his son\'s new website.', 47),
(20, 1, 2, 13, 'ABQ', 'Walt\'s lies have pushed Skyler to her limit. She leaves with the kids. Meanwhile, Jesse blames himself for Jane\'s death and goes into rehab.', 47),
(21, 2, 1, 1, 'Pilot', 'Detective Jake Peralta finds his work scrutinized when new Captain, Ray Holt, takes over at his precinct.', 22),
(22, 2, 1, 2, 'The Tagger', 'When Jake arrives late for work, Captain Holt decides to shadow him. However, the arrest they make proves complicated. Meanwhile, a psychic friend of Gina\'s gets inside Charles head.', 21),
(23, 2, 1, 3, 'The Slump', 'With a backlog of unsolved cases, Jake finds himself in a slump. Meanwhile, Amy is put in charge of the Junior Police Program for at risk kids, but her efforts to inspire them fall flat.', 21),
(24, 3, 1, 1, 'The Legacy Begins', 'The Top Gear team tests the Citroën Berlingo Multispace; the ludicrously fast, Pagani Zonda; the exquisite, Lamborghini Murciélago; and the family sedan, Mazda6. The first brave star in a reasonably-priced car is Harry Enfield.', 45),
(25, 4, 1, 1, 'Pilot', 'The premiere episode introduces the boss and staff of the Dunder-Mifflin Paper Company in Scranton, Pennsylvania in a documentary about the workplace.', 23),
(26, 4, 1, 2, 'Diversity Day', 'Michael\'s off color remark puts a sensitivity trainer in the office for a presentation, which prompts Michael to create his own.', 22),
(27, 5, 1, 1, 'Winter Is Coming', 'Eddard Stark is torn between his family and an old friend when asked to serve at the side of King Robert Baratheon; Viserys plans to wed his sister to a nomadic warlord in exchange for an army.', 62),
(28, 6, 1, 1, 'Pilot', 'A strangely eccentric genius scientist and inventor moves into the home of his daughter and her family and begins to strongly influence his young grandson.', 22),
(29, 7, 1, 1, 'Unaired Pilot', 'Invalided home from the war in Afghanistan, Dr. John Watson becomes roommates with the world\'s only \"consulting detective,\" Sherlock Holmes. Within a day their friendship is forged and several murders are solved.', 55),
(30, 8, 1, 1, 'Big Brother', 'Del employs younger brother Rodney as a member of Trotters\' Independent Traders, despite warnings from his business colleagues. When Rodney decides to become the Trotters\' financial adviser - monitoring the accounts and keeping Del\'s dodgy dealings in check - Del has second thoughts about their partnership.', 30),
(31, 9, 1, 1, 'The Crocodile\'s Dilemma', 'A ruthless, manipulative man meets a small-town insurance salesman and sets him on a path of destruction.', 69),
(32, 10, 1, 1, 'Uno', 'Struggling public defender Jimmy McGill constructs an elaborate yet questionable plan for winning back a pair of wealthy potential clients.', 54),
(33, 11, 1, 1, 'Good News, Bad News', 'Jerry and George argue whether an overnight visitor Jerry is expecting is coming with romantic intentions.', 23),
(34, 1, 3, 1, 'No Más', 'Skyler goes through with her plans to divorce Walt. Jesse finishes rehab.', 47),
(35, 1, 3, 2, 'Caballo sin Nombre', 'Walter, Jr. is having a rough time accepting his parents\' separation. Jesse buys his old house from his parents. Meanwhile, two mysterious men have come into town looking for Walt.', 47),
(38, 13, 1, 1, 'Tractoring', 'Jeremy Clarkson embarks on his path towards muddy misery and potential ruin by running his own farm.', 54);

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `f_id` int(255) UNSIGNED NOT NULL,
  `u_id` int(255) UNSIGNED NOT NULL,
  `m_id` int(255) UNSIGNED DEFAULT NULL,
  `tv_id` int(255) UNSIGNED DEFAULT NULL,
  `doc_id` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`f_id`, `u_id`, `m_id`, `tv_id`, `doc_id`) VALUES
(23, 3, 8, NULL, NULL),
(25, 3, 12, NULL, NULL),
(26, 3, NULL, 1, NULL),
(27, 9, NULL, 1, NULL),
(30, 9, NULL, 11, NULL),
(31, 9, NULL, 8, NULL),
(32, 9, NULL, 6, NULL),
(33, 9, NULL, 7, NULL),
(34, 9, NULL, 13, NULL),
(40, 1, 2, NULL, NULL),
(41, 1, NULL, 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `g_id` int(255) UNSIGNED NOT NULL,
  `g_name` varchar(40) NOT NULL,
  `g_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`g_id`, `g_name`, `g_description`) VALUES
(1, 'Action', 'Movies in the action genre are fast-paced and include a lot of action like fight scenes, chase scenes, and slow-motion shots. They can feature superheroes, martial arts, or exciting stunts. These high-octane films are more about the execution of the plot rather than the plot itself.'),
(2, 'Adventure', 'The adventure genre is so similar to the action genre that the billing for adventure films is sometimes action/adventure movies. Films in the adventure genre usually contain the same basic genre elements as an action movie, with the setting as the critical difference.'),
(3, 'Comedy', 'Comedy films are funny and entertaining. The films in this genre center around a comedic premise—usually putting someone in a challenging, amusing, or humorous situation they’re not prepared to handle. Good comedy movies are less about making constant jokes and more about presenting a universally relatable, real-life story with complex characters who learn an important lesson.'),
(4, 'Drama', 'The drama genre features stories with high stakes and many conflicts. They’re plot-driven and demand that every character and scene move the story forward. Dramas follow a clearly defined narrative plot structure, portraying real-life scenarios or extreme situations with emotionally-driven characters.'),
(5, 'Fantasy', 'Films in the fantasy genre feature magical and supernatural elements that do not exist in the real world. Although some films juxtapose a real-world setting with fantastical elements, many create entirely imaginary universes with their own laws, logic, and populations of imaginary races and creatures.'),
(6, 'Horror', 'Horror films feature elements that leave people with an overwhelming sense of fear and dread. Horror movies often include serial killers or monsters as persistent, evil antagonists to play on viewers’ fears or nightmares. Audiences who love the horror genre seek out these movies specifically for the adrenaline rush produced by ghosts, gore, monsters, and jump scares.'),
(7, 'Musical', 'Musical films weave songs or musical numbers into the narrative to progress the story or further develop the characters. Musicals are often tied to romance films but are not limited to that genre. Musical movies involve big stage-like productions, integrating necessary premises or character elements into the sequences.'),
(8, 'Mystery', 'Mystery films are all about the puzzle and often feature a detective or amateur sleuth trying to solve it. Mystery films are full of suspense, and the protagonist searches for clues or evidence throughout the movie, piecing together events and interviewing suspects to solve the central question.'),
(9, 'Romance', 'Romance films are love stories. They center around two protagonists exploring some of the elements of love like relationships, sacrifice, marriage, obsession, or destruction. Romance movies sometimes feature hardships like illness, infidelity, tragedy, or other obstacles for the love interests to overcome.'),
(10, 'Science Fiction', 'The sci-fi genre builds worlds and alternate realities filled with imagined elements that don’t exist in the real world. Science fiction spans a wide range of themes that often explore time travel, space travel, are set in the future, and deal with the consequences of technological and scientific advances.'),
(11, 'Sports', 'Movies in the sports genre will center around a team, individual player, or fan, with the sport itself to motivate the plot and keep the story advancing. These movies aren’t entirely focused on the sport itself, however, mainly using it as a backdrop to provide context into the emotional arcs of the main characters.'),
(12, 'Thriller', 'Thrillers expertly blend mystery, tension, and anticipation into one exciting story. Successful thrillers are well-paced, often introducing red herrings, divulging plot twists, and revealing information at the exact right moments to keep the audience intrigued.'),
(13, 'Western', 'Westerns tell the tale of a cowboy or gunslinger pursuing an outlaw in the Wild West. The main character often seeks revenge and will face the criminal in a duel or shootout at the end. Westerns are vivid productions set in the American West—such as the desert, mountains, or plains—that can inspire and inform the characters and the action.'),
(14, 'Crime', 'As the name implies, the crime genre is largely classified by a story that is centered around the solving of a crime. The story needs a protagonist, usually some type of detective, whether a professional or an amateur or even a private investigator, who is determined to solve the crime.'),
(15, 'Biography', 'A biographical film is a film that dramatizes the life of a non-fictional or historically-based person or people. They differ from docudrama films and historical drama films in that they attempt to comprehensively tell a single person\'s life story or at least the most historically important years of their lives.'),
(17, 'Animation', 'Animation is a method by which still figures are manipulated to appear as moving images. Today, many animations are made with computer-generated imagery (CGI).');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_id` int(255) UNSIGNED NOT NULL,
  `m_title` varchar(40) NOT NULL,
  `m_description` varchar(500) NOT NULL,
  `m_year` smallint(4) UNSIGNED NOT NULL,
  `g_id_1` smallint(2) UNSIGNED NOT NULL,
  `g_id_2` smallint(2) UNSIGNED DEFAULT NULL,
  `g_id_3` smallint(2) UNSIGNED DEFAULT NULL,
  `m_duration` smallint(4) UNSIGNED NOT NULL,
  `m_thumbnail` varchar(50) NOT NULL,
  `m_trailer` varchar(300) NOT NULL,
  `m_director` varchar(60) NOT NULL,
  `m_actors` varchar(500) NOT NULL,
  `m_age` smallint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `m_title`, `m_description`, `m_year`, `g_id_1`, `g_id_2`, `g_id_3`, `m_duration`, `m_thumbnail`, `m_trailer`, `m_director`, `m_actors`, `m_age`) VALUES
(1, 'John Wick: Chapter 4', 'John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 2023, 1, 14, 12, 169, 'john_wick_c_4', 'qEVUtrk8_B4', ' Chad Stahelski', 'Keanu Reeves - Laurence Fishburne - George Georgiou', 15),
(2, 'The Social Network', 'As Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook, he is sued by the twins who claimed he stole their idea and by the co-founder who was later squeezed out of the business.', 2010, 15, 4, NULL, 120, 'the_social_network', 'lB95KLmpLR4', 'David Fincher', 'Jesse Eisenberg - Andrew Garfield - Justin Timberlake', 15),
(3, 'Jobs', 'The story of Steve Jobs\' ascension from college dropout into one of the most revered creative entrepreneurs of the 20th century.', 2013, 15, 4, NULL, 128, 'jobs', 'SH1jKZwcS9Y', ' Joshua Michael Stern', 'Ashton Kutcher - Dermot Mulroney - Josh Gad', 15),
(4, 'Nobody', 'A docile family man slowly reveals his true character after his house gets burgled by two petty thieves, which, coincidentally, leads him into a bloody war with a Russian crime boss.', 2021, 1, 14, 4, 92, 'nobody', 'wZti8QKBWPo', 'Ilya Naishuller', 'Bob Odenkirk - Aleksey Serebryakov - Connie Nielsen', 15),
(5, 'Mamma Mia!', 'The story of a bride-to-be trying to find her real father told using hit songs by the popular 1970s group ABBA.', 2008, 3, 9, 7, 108, 'mamma_mia', '8RBNHdG35WY', 'Phyllida Lloyd', 'Meryl Streep - Pierce Brosnan - Amanda Seyfried', 12),
(6, 'Ant-Man and the Wasp: Quantumania', 'Scott Lang and Hope Van Dyne are dragged into the Quantum Realm, along with Hope\'s parents and Scott\'s daughter Cassie. Together they must find a way to escape, but what secrets is Hope\'s mother hiding? And who is the mysterious Kang?', 2023, 1, 2, 3, 124, 'ant_man_quantumania', 'ZlNFpri-Y40', '', 'Paul Rudd - Evangeline Lilly - Larry Lieber', 12),
(7, 'The Shape of Water', 'At a top secret research facility in the 1960s, a lonely janitor forms a unique relationship with an amphibious creature that is being held in captivity.', 2017, 4, 5, 9, 123, 'the_shape_of_water', 'XFYWazblaUA', ' Guillermo del Toro', 'Sally Hawkins - Octavia Spencer - Michael Shannon', 15),
(8, 'Avatar: The Way of Waters', 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na\'vi race to protect their home.', 2022, 1, 2, 5, 192, 'avatar_the_way_of_water', 'd9MyW72ELq0', ' James Cameron', 'Sam Worthington - Zoe Saldana - Sigourney Weaver', 12),
(9, 'Scream', '25 years after a streak of brutal murders shocked the quiet town of Woodsboro, Calif., a new killer dons the Ghostface mask and begins targeting a group of teenagers to resurrect secrets from the town\'s deadly past.', 2022, 6, 8, 12, 114, 'scream', 'h74AXqw4Opc', ' Matt Bettinelli-Olpin - Tyler Gillett', 'Neve Campbell - Courteney Cox - David Arquette', 18),
(10, '10 Cloverfield Lane', 'A young woman is held in an underground bunker by a man who insists that a hostile event has left the surface of the Earth uninhabitable.', 2016, 4, 8, 6, 103, '10_cloverfield_lane', 'saHzng8fxLs', ' Dan Trachtenberg', 'John Goodman - Mary Elizabeth Winstead - John Gallagher Jr.', 12),
(11, '47 Meters Down', 'Two sisters vacationing in Mexico are trapped in a shark cage at the bottom of the ocean. With less than an hour of oxygen left and great white sharks circling nearby, they must fight to survive.', 2017, 2, 4, 6, 89, '47_meters_down', 'ddYSGGJAKOk', ' Johannes Roberts', 'Mandy Moore - Claire Holt - Matthew Modine', 15),
(12, 'Django Unchained', 'With the help of a German bounty-hunter, a freed slave sets out to rescue his wife from a brutal plantation owner in Mississippi.', 2012, 4, 13, NULL, 165, 'django_unchained', '_iH0UBYDI4g', 'Quentin Tarantino', 'Jamie Foxx - Christoph Waltz - Leonardo DiCaprio', 18),
(13, 'Dumbie', 'Dumbbie Dumbbie Dumbbie!', 2003, 17, 2, 14, 159, 'Dumbbie', '12345656', 'Dumbbie', 'Dumbbie - Dumbbie - Dumbbie', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `tv_id` int(255) UNSIGNED NOT NULL,
  `tv_title` varchar(40) NOT NULL,
  `tv_description` varchar(500) NOT NULL,
  `tv_year` smallint(4) UNSIGNED NOT NULL,
  `g_id_1` smallint(2) UNSIGNED NOT NULL,
  `g_id_2` smallint(2) UNSIGNED DEFAULT NULL,
  `g_id_3` smallint(2) UNSIGNED DEFAULT NULL,
  `tv_thumbnail` varchar(50) NOT NULL,
  `tv_trailer` varchar(300) NOT NULL,
  `tv_creator` varchar(60) NOT NULL,
  `tv_actors` varchar(500) NOT NULL,
  `tv_age` smallint(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`tv_id`, `tv_title`, `tv_description`, `tv_year`, `g_id_1`, `g_id_2`, `g_id_3`, `tv_thumbnail`, `tv_trailer`, `tv_creator`, `tv_actors`, `tv_age`) VALUES
(1, 'Breaking Bad', 'A chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine with a former student in order to secure his family\'s future.', 2008, 14, 4, 12, 'breaking_bad', 'Pev38s3xPgM', 'Vince Gilligan', 'Bryan Cranston - Aaron Paul - Anna Gunn', 18),
(2, 'Brooklyn Nine-Nine', 'Comedy series following the exploits of Det. Jake Peralta and his diverse, lovable colleagues as they police the NYPD\'s 99th Precinct.', 2014, 3, 14, NULL, 'brooklyn_99', 'q6G_RMGk3vs', ' Dan Goor', 'Andy Samberg - Stephanie Beatriz - Terry Crews', 12),
(3, 'Top Gear', 'The hosts talk about everything car-related. From new cars to how they\'re fueled, this show has it all.', 2002, 2, 3, 11, 'top_gear', 'GgcdBYWM5Eo', 'BBC', 'Jeremy Clarkson - Richard Hammond - James May', 15),
(4, 'The Office', 'A mockumentary on a group of typical office workers, where the workday consists of ego clashes, inappropriate behavior, and tedium.', 2005, 3, NULL, NULL, 'the_office', 'LHOtME2DL4g', 'Greg Daniels', 'Steve Carell - Jenna Fischer - John Krasinski\r\n', 15),
(5, 'Game of Thrones', 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.', 2011, 1, 2, 4, 'game_of_thrones', 'KPLWWIOCOOQ', 'David Benioff', 'Emilia Clarke - Peter Dinklage - Kit Harington', 18),
(6, 'Rick and Morty', 'An animated series that follows the exploits of a super scientist and his not-so-bright grandson.', 2013, 2, 3, NULL, 'rick_and_morty', 'BFTSrbB2wII', 'Dan Harmon', 'Justin Roiland - Chris Parnell - Spencer Grammer\r\n', 15),
(7, 'Sherlock', 'A modern update finds the famous sleuth and his doctor partner solving crime in 21st-century London.', 2010, 14, 4, 8, 'sherlock', 'xK7S9mrFWL4', 'Mark Gatiss', 'Benedict Cumberbatch - Martin Freeman - Una Stubbs\r\n', 15),
(8, 'Only Fools and Horses', 'Comedy that follows two brothers from London\'s rough Peckham estate as they wheel and deal through a number of dodgy deals and search for the big score that\'ll make them millionaires.', 1981, 3, NULL, NULL, 'only_fools_and_horses', 'Y7Doa6Aei4M', 'John Sullivan', 'David Jason - Nicholas Lyndhurst - Roger Lloyd Pack', 12),
(9, 'Fargo', 'Various chronicles of deception, intrigue and murder in and around frozen Minnesota. Yet all of these tales mysteriously lead back one way or another to Fargo, North Dakota.', 2014, 12, 4, 14, 'fargo', 'ju75Sd4yAZw', 'Noah Hawley', 'Billy Bob Thornton - Martin Freeman - Allison Tolman\r\n', 15),
(10, 'Better Call Saul', 'The trials and tribulations of criminal lawyer Jimmy McGill in the years leading up to his fateful run-in with Walter White and Jesse Pinkman.', 2015, 14, 4, NULL, 'better_call_saul', 'HN4oydykJFc', 'Vince Gilligan', 'Bob Odenkirk - Rhea Seehorn - Jonathan Banks', 12),
(11, 'Seinfeld', 'The continuing misadventures of neurotic New York City stand-up comedian Jerry Seinfeld and his equally neurotic New York City friends.', 1989, 3, NULL, NULL, 'seinfeld', 'hQXKyIG_NS4', 'Larry David', 'Jerry Seinfeld - Julia Louis-Dreyfus - Michael Richards\r\n', 23),
(13, 'Clarkson\'s Farm', 'Follow Jeremy Clarkson as he attempts to run a farm in the countryside.', 2021, 3, NULL, NULL, 'clarksons_farm', 'pW-iVG0_D34', 'Amazon Prime', 'Jeremy Clarkson - Kaleb Cooper - Charlie Ireland', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) UNSIGNED NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `s_name` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL,
  `p_num` varchar(20) NOT NULL,
  `dob_d` smallint(2) UNSIGNED NOT NULL,
  `dob_m` smallint(2) UNSIGNED NOT NULL,
  `dob_y` smallint(4) UNSIGNED NOT NULL,
  `cntry` varchar(60) NOT NULL,
  `pwd` mediumtext NOT NULL,
  `sub_status` tinyint(1) NOT NULL DEFAULT 0,
  `sec_q_1` varchar(75) NOT NULL,
  `sec_q_1_a` varchar(200) NOT NULL,
  `sec_q_2` varchar(75) NOT NULL,
  `sec_q_2_a` varchar(200) NOT NULL,
  `act_status` smallint(3) UNSIGNED NOT NULL DEFAULT 1,
  `j_date` datetime NOT NULL,
  `a_id` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `f_name`, `s_name`, `email`, `p_num`, `dob_d`, `dob_m`, `dob_y`, `cntry`, `pwd`, `sub_status`, `sec_q_1`, `sec_q_1_a`, `sec_q_2`, `sec_q_2_a`, `act_status`, `j_date`, `a_id`) VALUES
(1, 'Louis', 'McGarry', 'ec2057132@edinburghcollege.ac.uk', '07706984723', 22, 9, 2003, 'United Kingdom', '$2y$10$oBygYSW/h8utOnIKyRPseuXoUDZ8946abGM0AdXIp7Wgv0cFkCBBq', 1, '2', '$2y$10$MFODPyAk5TapsixncJPAQO8sF4weBsO9YZvabURzhUpGadCAo/qbm', '5', '$2y$10$Njv/TgwtLRdopZ.3rVy3UuEWZIbyOZpOoVYeFU7ruHDxBoxEpzJtW', 1, '2023-03-21 18:33:59', 1),
(3, 'test', 'test', 'test@testmail.com', '01234567890', 1, 6, 2000, 'United Kingdom', '$2y$10$6LIKlnuC2WWQL/0ZX0IZr.wSwLIWr2egIt4mjfKDsB0BDq8MpFa/a', 0, '3', '$2y$10$46ubrc7VihZwq7GKG6iQGulDRTb3sfTLfeCIiWtubBjKCfUY.ssQy', '6', '$2y$10$obPGCw/YCm1aeL6jlVHP6eWkfGtGsi3JI/uJLGvbBFZSOHX8Nibqu', 1, '2023-03-21 19:17:06', NULL),
(9, 'Tester', 'Testerton', 'email@test.com', '012345678901234', 22, 9, 2000, 'Sweden', '$2y$10$ITlRCF0r/iFBtgBDiUAVEulasEUMnrUO3lfnaJB0isCn1CAep8zq.', 1, '1', '$2y$10$Lo8puq3RmQcWdlNCiwHP.eCsPLbzuBCZvuGwVhe0kgVkgkAvu2aWi', '6', '$2y$10$Km/1yAujLu1NnDUBHr21S./GW./v1ttgacTq5e4RcOwiV2wwlD2DG', 0, '2023-05-11 14:46:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`tv_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `c_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `e_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `f_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `g_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `tv_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
