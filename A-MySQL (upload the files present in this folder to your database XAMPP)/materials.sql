-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 01:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btao`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `branch` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `collegename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `uploadeddate` date NOT NULL DEFAULT current_timestamp(),
  `vstatus` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `uploadedby` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detailsaboutsubject` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`branch`, `collegename`, `state`, `city`, `subject`, `link`, `uploadeddate`, `vstatus`, `uploadedby`, `detailsaboutsubject`) VALUES
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Discrete Mathematics(DM)', 'https://drive.google.com/file/d/1-7DEixaSwsl_zlZnKandMeJZoMvT5BDA/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Graph Theory,Simple Graph,Multi Graph,Pseudo Graph,Isolated Graph,pendent Graph,Null Graph,Trivial Graph,Regular Graph....'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Discrete Mathematics(DM)', 'https://drive.google.com/file/d/1-c38CKQCr5dbRwjnpfOYBwhIDlB_29S-/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Problems Related to Permutations and Combinations'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Digital Logic Design(DLD)', 'https://drive.google.com/file/d/1-J6rIsKD6eBXrMRTFXbKdc8OQYT9AnfJ/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Sequencial Circuits,Difference between Combinational and Sequencial Circuits,Flip flops  and latches,Triggering Mechanisms and  some more topics'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Data Structures', 'https://drive.google.com/file/d/11lolOnyi-CcJoNAvCNB2tZ3vkQ3QhVZP/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Introduction and Overview of Data structure,Implimentation of DS,1D,2D and Multi dimentional Array,Space matrix,Linked Lists'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Environmental Studies', 'https://drive.google.com/file/d/13-nKgkrkEijzpj9d7v7SwGj8mpjlBPaI/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Human Population and the Environment,variations among nations,population explosion,Family Welfare Programme,Technology in Environment '),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'software testing', 'https://drive.google.com/file/d/13CErS3rbiCUgUqGLg_Xjx3VAQcV7fq6y/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'States,State Graph,and Transition Testing and much More Topis'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Data Structures', 'https://drive.google.com/file/d/13PoBZTma9N19KpQlk27V392DorTcUy9W/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Trees and Graphs,Binary Tree,Normal Tree,Properties of Binary Tree,Linked Representation of Binary Tree,Operations on Binary Tree(Insertion,Deletion,Traversal,Merging) and some more topics'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Basic Electrical and Electronics(BEE)', 'https://drive.google.com/file/d/14Uv67CkmWaLwALyN67OvcQMeSW9nTRY2/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Oscillator,Harmonic Oscillator,Relaxation Oscillator,Sinusoidal Oscillator,Rc Oscillator,Crystal,Damped Oscillator,Barkhausen Criteria for Oscillator Operations'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Environmental Studies', 'https://drive.google.com/file/d/17lOowijoxMlN5AaAKPdkv2zheN74zr2t/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Environmental Pollution,Solid Waste Management,Air,water,soil,Marine,Noise,Thermal Pollution and Nuclear Hazards'),
('all branches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Chemistry', 'https://drive.google.com/file/d/1BTWVVvFk1sVm2yGqlou-dsIPl01RWoMA/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Electro chemistry,Galvanic Cells or Volatic Cells,EMF of a cell,Applications of EMF Measurments,Problems Based of Emf,Concentration Cells,Applications of Concentration cells,Electrode Potential'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Digital Logic Design(DLD)', 'https://drive.google.com/file/d/1ByznSGimp_As5FdHhO4R1qeHLaBkl58g/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Combinational Circuits,Adder,Half Adder,Full Adder,y-bit parallel Adder,4-bit Parallel Subtractor by using full adder and some more topics'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'DBMS(DATA BASE MANAGEMENT SYSTEM)', 'https://drive.google.com/file/d/1cTM9g9soqWsPFyjjKOugLzBXkMjVqWHv/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Decomposition,Properties,Schema Refinement in Database design...'),
('allbranches', 'Anantha Laskhmi Institute of technology and sciences', 'Andhra Padesh', 'Ananthapur', 'Chemistry', 'https://drive.google.com/file/d/1d3GCtAorolSE_eToZzLLyBRc2i13ZkG3/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Corrosion,Consequences of Corrosion,Types of Corrosion,Oxidation Corrosion,Galvanic Corrosion,Galvanic Cells '),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Software Testing', 'https://drive.google.com/file/d/1dDjEb1iK1ALvWAn9O9sC3BMwCbY868a9/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Transaction Flow Testing and data flow testing,Transaction flow Graphs,Implimentation of transaction flow graphs and some more topics'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'DBMS(DATA BASE MANAGEMENT SYSTEM)', 'https://drive.google.com/file/d/1Fs-1eMalqzLUse7tlqkjIMVSli_uhwfF/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Transaction Management - Transaction Concept - Transaction State -Implementation of Atomicity and Durability - Concurrent - Executions - and More topics'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'DBMS(DATA BASE MANAGEMENT SYSTEM)y', 'https://drive.google.com/file/d/1H6bx51Q3FOuB3XBVMXpx0dxDap_MPSrl/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Overview of Storage and Indexing: Data on External Storage, File Organization and Indexing - Clustered Indexes, and some more topics available'),
('all branches', 'Anantha Laskhmi Institute of technology and sciences', 'Andhra Padesh', 'Ananthapur', 'Chemistry', 'https://drive.google.com/file/d/1iJS-idxO_DPYETklFUt8Hm8nvEoHJH4i/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Classification of Fuels,Coal,Coke,Liquid Fuels.Gasoline,Power Alcohol'),
('all branches', 'Anantha Laskhmi Institute of technology and sciences', 'Andhra Padesh', 'Ananthapur', 'Chemistry', 'https://drive.google.com/file/d/1KSh2r4DaKkT6HXRjdGM2QkF9DSh0t2Tm/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Chemistry of Engineering Materials,Cement,Classification of Cement,Composition of portland cement,Lubricants,and thier mechanisms'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Digital Logic Design(DLD)', 'https://drive.google.com/file/d/1oem-pfL3b_RUE32NuVO3_H60w8qoZjjt/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Programmable Memory Devices,Sequencial,Read only, read and write memory ,PRAM,Programmable Logica Gates,PLA... and some more topics '),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Environmental Studies', 'https://drive.google.com/file/d/1ORhUGTm1-hgNIP_gjgDEJmM8bZRBN3z0/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Social Issues and Environment,Urban Problems Related to Energy,Water Conservation,Rain Water Harvesting,Water Shed Management.....'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Computer Organization(CO)', 'https://drive.google.com/file/d/1q0ihBy23dLv3tSFiLpD1zpGDxBCcuyk9/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Memory Systems,Internal Organization of Memory Chips,Static RAMS,CMOS Cell,Asynchronous DRAMS,And Many More Topics Available'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences', 'ANDHRA PRADESH', 'ANANTAPUR', 'Data Structures', 'https://drive.google.com/file/d/1qeDBZ62SAA7Dfax5O9U5SdW7hNA-TVv2/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Sorting,Classification of Sorting,Internal,External,Sort Order,Sort Stability and Some more topics'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'JAVA', 'https://drive.google.com/file/d/1qH5FeuFUWyfOmj_l5GDfb6v0uNOb6IkQ/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Arithmetic,Bitwise,Relational and logical operations'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'DBMS(DATA BASE MANAGEMENT SYSTEM)', 'https://drive.google.com/file/d/1QiZy-DmYCAffRHTWRmgWF7bAzZ8yAWxx/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'purpose of Database,Data Models,Database Languages,Entity Relationship(ER) Diagrams,SQL Queries.....'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'JAVA', 'https://drive.google.com/file/d/1Qx4RGF7NAXvtz80HJoZb07ee3cYcHpVI/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Basics, Using super, creating a multi level hierarchy, when constructors are executed, method overriding, dynamic method dispatch, using abstract class...'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Micro Processing Interface', 'https://drive.google.com/file/d/1R1lWfwPwVsedv425dkE6l02f6Z9yunKM/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', '8086 Interrupts,Maskable and Non Maskable Inerrupts,Priority Interrupts,Dedicated Interrupts,BIOS Services and Software Interrupts'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Software Testing', 'https://drive.google.com/file/d/1t4MO2TayAZML-YNUpwjzhNCzVmnJXdos/view?usp=sharingpu', '2019-12-30', '2019-12-30', 'btao', 'purpose of testing,Productivity and Quality of Service,Phases in Tester mental life,Tesing Dichomatics,Taxonomy of Bugs'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Discrete Mathematics(DM)', 'https://drive.google.com/file/d/1Tau-6tw9OYHbIWkPxLw4V7eBxs8ekakn/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Algebraic Systems: Examples and General Properties, Semi groups and Monoids, Polish expressions and their compilation, Groups: Definitions '),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Environmental Studies', 'https://drive.google.com/file/d/1TUoS3FtWxowoMoVg8EHUKh3ME1kD9ndS/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Ecosystems,Types of Ecosystem,Natural and  Artificial Ecosystem,Energy Flow in Ecosystem  and Much More Topics available '),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Data Structures', 'https://drive.google.com/file/d/1V-zInf6pw02SmLvudppEcVLUcZubWnjK/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Searching,Linear Search,Sequencial Search,Binary Search,Hashing Methods,'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'java', 'https://drive.google.com/file/d/1VplmwLIsziL_UYbrm_IDvh97bsVT6FxR/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Intro To Object Oriented Programing,Why OPPs,History of JAVA'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Digital logic Design(DLD)', 'https://drive.google.com/file/d/1wONtr-2hcbvaq_Ng5q9IGTlD1HP-zE6J/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Gate Level Minimization,Rules for  K Map,Dont care Condition,Conversions of AND,NOR,NOT,....'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Software Testing', 'https://drive.google.com/file/d/1WWM-BI9Js8CnUXLM79wEfoZag8k49jlY/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Paths ,Products and Regular Expressions,Distributive Laws,Loop Removal Operations,Decision Tables,K-Maps and some more topics'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Basic Electrical and Electronics(BEE)', 'https://drive.google.com/file/d/1xhksqsiOp3lHFN5SztATAU3zKRRoicDn/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Transformers,principle of working,Construction of Transformer,Types of Winding,Types of Transfomers,EMF Equation of Transfomer'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'DBMS(DATA BASE MANAGEMENT SYSTEM)', 'https://drive.google.com/file/d/1xKddBz6pNfKAU2fIs4RKxiCJiwQYZZo0/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Relational Algebra,Introduction to SQL,DDL,DML,TCL and Data Control Language commands...(commands like insert,update,delete,drop....'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Discrete Mathematics(DM)', 'https://drive.google.com/file/d/1xVG4w7ROswBAcr16rTsq7FmBPHs9DBaw/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Mathematical Logic:Introduction, Connectives, Normal Forms, The theory of Inference for the Statement Calculus,The Predicate Calculus'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Software Testing', 'https://drive.google.com/file/d/1XvzhohNT4rJEGVfugypBEW5ZkkA_puEs/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Domains Teting(Domains and paths),Bug Assumption,Nice Domains,and Ugly Domains,1D and 2D Domain testing.....'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Basic Electrical and Electronics(BEE)', 'https://drive.google.com/file/d/1zYKJJ-PGMLwoy7N-C7b4KnfXd3QFA0vh/view?usp=sharing', '2019-12-30', '2019-12-30', 'btao', 'Bipolar Junction Transistor,and its constructions,NPN and PNP Transistor,Its Operations.Common base,emmiter,collector'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences', 'Andhra Pradesh', 'Anantapur', 'M1', 'https://drive.google.com/open?id=1_qHPcCK5gN1bMd0z9i7QKl4J8IxWV14q', '2019-12-10', '2019-12-10', 'btao', 'Differential Equation of first order and first degree'),
('all branches', 'Anantha Laskhmi Institute of technology and sciences', 'Andhra Padesh', 'Ananthapur', 'Chemistry', 'https://drive.google.com/open?id=1_ZjOFrhtVyYm8sZjjZkybgZOn7luo3w3', '2019-12-30', '2019-12-30', 'btao', 'Polymers,Types of Polymerisation,Types of Plastics,Types of Rubbers and Many Topics Related to Polymers'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences', 'Andhra Pradesh', 'Anantapur', 'M1', 'https://drive.google.com/open?id=10hc26uZLcosj29PgWcsOkQB6gaxLFQ20', '2019-12-10', '2019-12-10', 'btao', 'Multiple Integrals'),
('allbranches', 'Jawaharlal Nehru Technological University', 'Andhra Pradesh', 'Anantapur', 'English', 'https://drive.google.com/open?id=14diDV-6MMGBJCUsv-PEjKswCFs_-G4ry', '2019-12-10', '2019-12-10', 'btao', 'Space Trek'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'Andhra Pradesh', 'ANANTAPUR', 'Physics', 'https://drive.google.com/open?id=19O_dyD_4btM9Cph8gMoFsrQ01I8E3WiD', '2019-12-10', '2019-12-10', 'btao', 'Interference Diffraction and Polarisation'),
('allbranches', 'Jawaharlal Nehru Technological University', 'Andhra Pradesh', 'Anantapur', 'English', 'https://drive.google.com/open?id=1AQwoa1HlAPZH-wmZp7YCbAclsZgHkU59', '2019-12-10', '2019-12-10', 'btao', 'Environmental consciousness'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'Andhra Pradesh', 'Anantapur', 'Physics', 'https://drive.google.com/open?id=1DnYWreBMAii5_pmqCfTEpvFIJCntULvG', '2019-12-10', '2019-12-10', 'btao', 'Semiconductors and Magnetic Material'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences', 'Andhra Pradesh', 'Anantapur', 'M1', 'https://drive.google.com/open?id=1e-plBLLS3BVe2zyQoRD0yDToYsvAntAg', '2019-12-10', '2019-12-10', 'btao', 'Linear Differential Equations with Variable Coefficients'),
('all branches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Chemistry', 'https://drive.google.com/open?id=1FOrwNoGYbpAJ5Hm429FPeBqQ7MMqWZhI', '2019-12-30', '2019-12-30', 'btao', 'Sources of Water,Types of Impurities,Biological Impurities,Hard water,Types of Hardness,Estimation of Hardness by EDTA Method....'),
('allbranches', 'Jawaharlal Nehru Technological University', 'Andhra Pradesh', 'Anantapur', 'English', 'https://drive.google.com/open?id=1HuQodeE-Hy2XGrG_U8LQ1UGT5ItaaLlp', '2019-12-10', '2019-12-10', 'btao', 'Emerging Technologies'),
('allbranches', 'Jawaharlal Nehru Technological University', 'Andhra Pradesh', 'Anantapur', 'English', 'https://drive.google.com/open?id=1ixMyrF_rAJ6lR3gusz5tgjIEVNu4rU-A', '2019-12-10', '2019-12-10', 'btao', 'Global Issues'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Environmental Studies', 'https://drive.google.com/open?id=1jF7CZp3-WdfOVMx-iw0y7KuB9N4tl6-a', '2019-12-30', '2019-12-30', 'btao', 'Multidisciplinary Nature of Environmental Studies,Scope,Importance,Types of Environment,and much more topics are available'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'Andhra Pradesh', 'Anantapur', 'Physics', 'https://drive.google.com/open?id=1lmBXHFD7eam5LWjP8leRz1r2Q4-YAHk8', '2019-12-10', '2019-12-10', 'btao', 'Superconductivity and physics of nanomaterials'),
('all branches', 'Anantha Laskhmi Institute of technology and sciences', 'Andhra Padesh', 'Ananthapur', 'Chemistry', 'https://drive.google.com/open?id=1SkoFb-qkVnS0DRDsGw-GedrGBNET46Hf', '2019-12-30', '2019-12-30', 'btao', 'Water Treatment,Types of Water ,Hard Water,Soft water , Acidity and More Topics and also Problems with Solutions'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'Andhra Pradesh', 'Anantapur', 'Physics', 'https://drive.google.com/open?id=1uS3f4hBnDoH0nlSFULPeDQD5y77U7HB9', '2019-12-10', '2019-12-10', 'btao', 'Crystallography and Ultrasonics'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'Andhra Pradesh', 'Anantapur', 'Physics', 'https://drive.google.com/open?id=1wPoVvb65mExhUvyYgbOXJS36lNQmcAgJ', '2019-12-10', '2019-12-10', 'btao', 'Quantum Mechanisms and Free electron Theory'),
('allbranches', 'Anantha Lakshmi Institute of Technology and Sciences', 'Andhra Pradesh', 'Anantapur', 'M1', 'https://drive.google.com/open?id=1yEKQfw-4WJjMozOIJ27_TF9vsSnPSi8C', '2019-12-10', '2019-12-10', 'btao', 'Functions of Single Variable'),
('cse', 'Anantha Lakshmi Institute of Technology and Sciences(ALTS)', 'ANDHRA PRADESH', 'ANANTAPUR', 'Data Structure', 'https://drive.google.com/open?id=1zlq9o0FFyaCmNil0fi3o2TnqD8JA_dSs', '2019-12-30', '2019-12-30', 'btao', 'Stacks and Queues,Algorithms of PUSH,POP,Applications of Stacks,Evaluation of Arithmetic Operaions and More Topics Related to Stacks and Queues');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`link`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
