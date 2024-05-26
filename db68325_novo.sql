-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2024 at 11:47 AM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db68325_novo`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `page_url` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `keywords` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `page_url`, `title`, `content`, `keywords`) VALUES
(4, 'https://www.novocib.com/freshness-assay-kits/freshness-assay-kit', 'Freshness Assay Kit', 'Measure nucleotides to assess seafood qualitySince seafood and fish are highly perishable products the quality of raw material is of primary concern for seafood processing industry Testing raw material is first main stage of currently used procedure of Quality ControlWhile sensory analysis allows rapid evaluation of the quality of whole wet fish the assessment of the quality of frozen fish or that of frozen blocks of fillets or crumbed seafood products remains more difficultPRECICE Freshness Assay Kit is a first microplate assay for routine physicochemical assessment of quality of seafood freshness The enzymes provided with kit allow specific conversion of three major ATP catabolites  IMP inosine Ino and hypoxanthine Hx to NADH2 The quantification of nucleotides is done by measuring sample absorbance at 340nm Used enzymatic reactions are highly specific and selective toward each particular nucleotides fast and irreversible brings three nucleotides to one common denominator NADH2 | The content of ATP is particularly high in muscle where ATP is used for contraction As soon as an animal dies cell respiration stops as well as ATP formation Postmortem ATP degradation leads to rapid formation of IMP 524h Inosine days and Hypoxanthine weeks The formation of IMP and inosine is mainly due to autolytic reactions whereas hypoxanthine is a result of both autolytic and microbial degradation The utilisation of nucleotides as freshness indicators were first suggested by pioneer works of Japanese scientists in the late 1950s Saito et al1958 and was further confirmed by numerous scentific articles In difference to TVBN or TMA widely used to detect biochemical changes that appear at a medium or a latestage of spoilage nucleotides provide the tools to detect very beginning of spoilage processScheme 1 | freshness assay kit is the first enzymatic kit for measurement of fish freshness using measurement of three major ATP degradation products', '[\"seafood quality control\", \"seafood freshness assay kit\", \"fish freshness assay kit\", \"k value\", \"atp degradation\", \"food quality\", \"fish freshness measurement\"]'),
(6, 'https://www.novocib.com/convenient-assay-kits/prpp-s-assay-kit', 'PRPPS Assay Kit', 'Non radioactive PRPPS assayPRECICE PRPPS Assay kit provides the first non radioactive and onestep protocol for measurement of PRPPS activity in cellular lysates in a convenient 96well plate formatPhosphoribosylpyrophosphate synthetase PRS EC 2761 an essential enzyme for the purine salvage pathway is encoded by PRPS1 gene Several mutations in this gene associated with genetic disorders have been described leading to PRS superactivity  This condition is inherited in an Xlinked patternPRPS1 gene overactivity increases the production of normal PRPP synthetase 1 enzyme which increases the availability of PRPP Excessive amounts of purines are generated leading to an accumulation of uric acid a waste product of purine breakdown in the body A buildup of uric acid can cause gout which is a form of arthritis resulting from uric acid crystals in the joints Affected individuals may also develop kidney or bladder stones formed from uric acid crystalsIncrease of the availability of PRPP can be due to PRPPS superactivity or HPRT deficiency know more about HPRT assay  | ValidatedSpecific activitiy of PRS in lysates of human erythrocytes measured by PRECICE PRPPS Assay kit is close to previously published data | ConvenientNon radioactiveContinuousNo sample preparation required Cell lysates are directly used for continuous monitoring of PRPPSynthetase activity | FastSimultaneous analysis of up to 6 samples in duplicate in 1h | PrinciplePRS activity is measured as a rate of production of PRPP with concomitant formation of NADH2 after two enzymatic reactions using highly active HPRT and IMPDH The formation of NADH2 is continuously monitored spectrophotometrically at 340nm', '[\"prpp-s assay kit\", \"validated\"]'),
(8, 'https://www.novocib.com/nucleotide-analysis-service', 'Nucleotide Analysis Service', 'Using ionpaired highperformance liquid chromatography with diode array detection NOVOCIB provides HPLC analytical services of full spectra of nucleotides in cell extracts and in feed food products and ingredients | Apolar free heterocyclic bases adenine guanine cytosine and uracil RNA or thymine DNAApolar free ribo and deoxyribonucleosidespurines adenosinedeoxyadenosine guanosinedeoxyguanosine inosinepyrimidines cytidinedeoxycystidine uridine thymidineNegatively charged free ribo and deoxyribonucleotides mono di and triphosphates AMPdAMP GMPdGMP IMP CMPdCMP UMP dTMP ADPdADP GDPdGDP CDPdCDP UDP ATPdATP GTPdGTP CTPdCTP UTPPolymeric negatively charged nucleic acids RNA and DNA composed of ribo and deoxynucleotides monophosphates respectively | Anion Exchange Chromatography allows the separation and quantification of nucleotides mono di and trphosphates However this method does not allow the analysis of corresponding bases and nucleosides that can be present along with negatively charged nucleotidesAcidic hydrolysis of nucleotides to corresponding bases followed by separation of heterocyclic bases However this approach does not allow to discriminate whether heterocyclic bases result from the degradation of ribo or deoxynucleotides or even from nucleic acids degradationIonpaired chromatography is a technique that allows to separate both apolar bases and nucleosides and negatively charged compounds nucleotides mono di and triphosphates in onerun This technique overcomes challenges faced by other ion chromatography methods but requires careful selection of ionpairing reagents and has limited column lifetime | UV spectroscopy Nucleic acids can be quantified by measuring the absorbance at 260 nm and 280 nm with 1A 260 corresponding to 50gml of dsDNA to 40gml RNA and to 33gml ssDNA This method can be applied only to purified DNA or RNAAcid hydrolysis chromatography Acidic hydrolysis of nucleic acids in perchloric or formic acid leads to the formation of purine and pyrimidine bases that are analyzed by LCMSMS or HPLCUV chromatography Using environmental pollutant perchlorate or toxic formic acid together with high cost are major limitations of this powerful analytical methodEnzymaticHPLCUV Nuclease digestion of DNA and RNA into constituent nucleotides NMP and dNMP prior to HPLCUV analysis This technique overcomes environment and cost challenges of acidic hydrolysis requires careful selection of conditions to achieve complete nucleic acid digestionTo quantify nucleic acids NOVOCIB uses enzymaticHPLCUV approach where nucleic acid is converted enzymatically to 5NMP and analyzed before and after nuclease treatment Nucleic acid concentration is calculated as a difference in 5NMP concentration before and after nuclease | Agilent 1120 series HPLC liquid chromatograph fitted with binary pump vacuum degasser wellplate autosampler thermostatic column compartment and multiple wavelength and diode array detector Run and data acquisision are controlled by Agilent Chem Station software Zorbax ExtendC18 46x150mm 35m particle size and guard column Agilent Calibrations are performed with standards prepared in mobile phase and with standards mixed with cell extracts which are run immediately before and after every series of samples Peak assignment of different bases ribonucleosides and ribonucleoside monophosphatesis is done by comparing both retention times and characteristics of UV absorption spectra 254280 ratio with those of standards The area of individual peaks was measured using ChemStation software Agilent', '[\"hplc uv analysis for purines\", \"nucleic acid rna and dna quantification\", \"dietary nucleotides analysis\"]'),
(9, 'https://www.novocib.com/convenient-assay-kits/hprt-assay-kit', 'HPRT Assay Kit', 'PRECICE HPRT Assay kit provides the first non radioactive protocol for measurement of HPRT activity in a convenient 96well plate format | Hypoxanthineguanine phosphoribosyltransferase HPRT EC 2428 a key enzyme of the purine salvage pathway is encoded by highly variable HPRT1 gene More than 300 mutations in HPRT1 gene associated with genetic disorders in humans have been described leading to partial or complete deficiency of HPRT enzyme Complete HPRT deficiency is a rare human genetic disorder also known as LeschNyhan syndrom In some cases gout more frequent purine disorder can also be secondary to HPRT deficiency CeballosPicot I et al 2010 High variability of HPRT1 gene complicates genetic testing Currently HPRT enzyme functions are tested in red blood cell lysates in a chromatographic assay using radiolabeled 14Chypoxanthine Cartier P et al 1968 | PrincipleHPRT activity is measured as a rate of production of IMP which is oxidized by recombinant IMP dehydrogenase with concomitant formation of NADH2 The formation of NADH2 is continuously monitored spectrophotometrically at 340nm | Wide linearity rangeThe detection of as low as 675 nmolhourml up to 340 nmolhourml of HPRT activity enables the characterization of complete and partial deficienciesAccurateWithinrun betweenday and total measurement imprecisions of assay run in are 15 5 and 65FastSimultaneous analysis of up to 15 samples in triplicate in 2 hoursConvenientNo sample preparation nor prior inactivation of cellular 5nucleotidase required Cell lysates are directly used for continuous monitoring of HPRT activityValidatedSpecific activities of HPRT in lysates of erythrocytes PBMC and cultured cells measured by PRECICE HPRT Assay kit are comparable to those obtained previously by radiochemical procedure | The rate of the increase in absorbance at 340nm per hour as a function of the concentration of human recombinant HPRT enzyme NovoCIB ref ENov9 The changes in absorbance corresponding to 3 different control hemolysates diluted in complete reaction mixture to final hemoglobin concentration 1mgml n4 are shown by filled squares filled triangles and filled circles The insert shows a linear correlation observed in whole range of 21ngml up to 15gml of recombinant HPRT the units are the same', '[\"non radioactive hprt assay\", \"including active human hprt enzyme\"]'),
(10, 'https://www.novocib.com/convenient-assay-kits/prpp-s-assay-kit', 'PRPPS Assay Kit', 'Non radioactive PRPPS assayPRECICE PRPPS Assay kit provides the first non radioactive and onestep protocol for measurement of PRPPS activity in cellular lysates in a convenient 96well plate formatPhosphoribosylpyrophosphate synthetase PRS EC 2761 an essential enzyme for the purine salvage pathway is encoded by PRPS1 gene Several mutations in this gene associated with genetic disorders have been described leading to PRS superactivity  This condition is inherited in an Xlinked patternPRPS1 gene overactivity increases the production of normal PRPP synthetase 1 enzyme which increases the availability of PRPP Excessive amounts of purines are generated leading to an accumulation of uric acid a waste product of purine breakdown in the body A buildup of uric acid can cause gout which is a form of arthritis resulting from uric acid crystals in the joints Affected individuals may also develop kidney or bladder stones formed from uric acid crystalsIncrease of the availability of PRPP can be due to PRPPS superactivity or HPRT deficiency know more about HPRT assay  | ValidatedSpecific activitiy of PRS in lysates of human erythrocytes measured by PRECICE PRPPS Assay kit is close to previously published data | RBC speciment 1 n4652 nmolhourmg HbRBC speciment 2 n47612 nmolhourmg HbRBC speciment 3 n47810 nmolhourmg HbPublished data R B Gordon et al J Inher Metab Dis 10 1987 82 8810220nmolhourmg HbConvenientNon radioactiveContinuousNo sample preparation required Cell lysates are directly used for continuous monitoring of PRPPSynthetase activityFastSimultaneous analysis of up to 6 samples in duplicate in 1h | PrinciplePRS activity is measured as a rate of production of PRPP with concomitant formation of NADH2 after two enzymatic reactions using highly active HPRT and IMPDH The formation of NADH2 is continuously monitored spectrophotometrically at 340nm', NULL),
(11, 'https://www.novocib.com/convenient-assay-kits/ampda-assay-kit', 'AMP Deaminase Deficiency Assay Kit', 'Non radioactive AMP Deaminase AssayIncluding active AMPDAPRECICE AMP Deaminase Assay kit provides the first non radioactive and onestep protocol for measurement of AMP Deaminase activity in cellular lysates in a convenient 96well plate format | ValidatedSpecific activitiy of AMP Deaminase in lysates of human erythrocytes measured by PRECICE AMP Deaminase Assay kitAMPD Reaction GraphRBC speciment 1 n22161 nmolhourmg HbRBC speciment 2 n22265 nmolhourmg HbConvenientNon radioactiveContinuousNo sample preparation required Cell lysates are directly used for continuous monitoring of AMP Deaminase activityFastSimultaneous analysis of up to 12 samples in duplicate in 1hPrincipleAMP Deaminase activity is measured as a rate of production of IMP with concomitant formation of NADH2 after one enzymatic reaction using highly active IMPDH The formation of NADH2 is continuously monitored spectrophotometrically at 340nm', '[]'),
(12, 'https://www.novocib.com/convenient-assay-kits/itp-ase-deficiency-assay-kit', 'ITPase Deficiency Assay Kit', 'Onestep ITP pyrophosphatase assayPRECICE ITPase Assay kit provides the first non radioactive and continuous protocol for measurement of ITP pyrophosphatase activity also known as inosine triphosphatase and inosine triphosphate pyrophosphohydrolase in cellular lysates in a convenient 96well plate formatITP pyrophosphatase or ITPase EC 36119 is an intracellular enzyme that catalyzes the pyrophosphohydrolysis of ITPdITP and xanthosine triphosphate to prevent unusual nucleoside triphosphates from accumulating in deoxy nucleoside triphosphate dNTP pools and being integrated into RNA and DNAThis enzyme is encoded by the ITPA gene in mammals Certain ITPA variants causing ITPase deficiency have been linked to adverse reactions to the immunosuppressive thiopurine drugs azathioprine and 6mercaptopurine and protection against ribavirininduced anemia | ValidatedSpecific activitiy of ITP pyrophosphohydrolase in lysates of human erythrocytes measured by PRECICE ITPase Assay kitITPase activity GraphRBC speciment 1 n2943 nmolhourmg HbRBC speciment 2 n2833 nmolhourmg HbConvenientNon radioactiveContinuousNo sample preparation required Cell lysates are directly used for continuous monitoring of ITPA activityFastSimultaneous analysis of up to 12 samples in duplicate in 1hPrincipleInosine triphosphatase activity is measured as a rate of production of IMP with concomitant formation of NADH2 after one enzymatic reaction using highly active IMPDH The formation of NADH2 is continuously monitored spectrophotometrically at 340nm', '[]'),
(14, 'https://www.novocib.com/convenient-assay-kits/adk-phosphorylation-assay-kit', 'Adenosine Kinase Phosphorylation Assay Kit', 'Antiviral and immunosuppressive nucleosides phosphorylationHuman adenosine kinase enzyme is a purine salvage enzyme that has a broad substrate specificity and provides the phosphorylation of purinepyrimidine nucleosides and pyrimidine ribonucleosides Adenosine kinase is critical for phosphorylation of adenosine analogs and provides first steps of activation of highly effective antiviral and immunosuppressive prodrugs such as mizoribine tubercidin and ribavirinePrinciplePRECICE ADK Phosphorylation Assay Kit is based on competitive inhibition of suboptimal substrate inosine IR phosphorylation In the absence of nucleoside competitor adenosine kinase phosphorylates inosine resulting in the formation of IMP IMP is further oxidized by IMPDH to XMP and NADH2 continuously monitored at 340nm In the presence of nucleoside competitor the phosphorylation of inosine poor ADK substrate is inhibited detected as a decrease in NADH2 formationPRECICE ADK Phosphorylation Assay Kit is a first tool for rapid evaluation of substrates properties of novel nucleoside analogues for human adenosine kinase', '[]'),
(15, 'https://www.novocib.com/convenient-assay-kits/dck-phosphorylation-assay-kit', 'Deoxycytidine Kinase Phosphorylation Assay Kit', 'Anticancer nucleosides phosphorylationHuman deoxycytidine kinase enzyme has a broad substrate specificity and provides the phosphorylation of purinepyrimidine deoxynucleosides and pyrimidine ribonucleosides Deoxycytidine kinase is critical for phosphorylation of cytidine analogs and provides first steps of activation of highly effective anticancer prodrugs such as aracytidine gemcitabine and cladribinePRECICE dCK Phosphorylation Assay Kit is a first tool for rapid evaluation of substrates properties of novel nucleoside analogues for human deoxycytidine kinasePrinciplePRECICE dCK Phosphorylation Assay Kit is based on competitive inhibition of deoxyinosine dIR phosphorylation by dCK enzyme In the absence of nucleoside competitor deoxycytidine kinase phosphorylates deoxyinosine resulting in the formation of dIMP dIMP is further oxidized by IMPDH to dXMP and NADH2 continuously monitored at 340nm In the presence of nucleoside competitor the phosphorylation of deoxyinosine poor dCK substrate is inhibited detected as a decrease in NADH2 formationPRECICE dCK Phosphorylation Assay Kit is based on competitive inhibition of deoxyinosine dIR phosphorylation by dCK enzyme In the absence of nucleoside competitor deoxycytidine kinase phosphorylates deoxyinosine resulting in the formation of dIMP dIMP is further oxidized by IMPDH to dXMP and NADH2 continuously monitored at 340nm In the presence of nucleoside competitor the phosphorylation of deoxyinosine poor dCK substrate is inhibited detected as a decrease in NADH2 formation', '[]'),
(16, 'https://www.novocib.com/convenient-assay-kits/human-recombinant-impdh', 'Active Human IMPDH Type 2 Enzyme', 'Human IMPDH Type IISynonyms inosine 5monophosphate dehydrogenase type 2 IMP dehydrogenase type II IMPDH2Inosine 5monophosphate dehydrogenase type 2 IMPDH 2 EC111205 is the predominant isoform of IMPDH and a validated target to treat a wide range of cancers and infectious diseases and to prevent lymphocytes proliferationNOVOCIBs IMPDH 2 has been cloned by RTPCR amplification of mRNA extracted from human hepatoma cells NP 0008752 100 identity and expressed in EcoliNOVOCIBs purified IMPDH 2 is an active enzyme characterized for its affinity for inosine 5monophosphate and NAD substrates and its sensitivity to enzyme inhibitors such as mycophenolic acid and ribavirinemonophosphateUnit Definition One unit of IMPDH Type II catalyzes the oxydation of 1 mole of IMP to XMP per minute at pH 88 at 37 CSpecific Activity  0050 unitmg protein | Assay condition KH2PO4 01M pH88 NAD 250M DTT 25mM 25mUml of human recombinant IMPDH II Incubation at 37C Reaction started by adding IMP at 250M final concentration NADH formation was followed in an iEMS Reader MF Labsystems plate reader at 340nm | IMPDH  a choice target for major therapeutic applicationsSynonyms inosine 5monophosphate dehydrogenase IMP dehydrogenaseCatalytic activityInosine Monophosphate Dehydrogenase IMPDH converts inosine 5monophosphate IMP to xanthosine 5monophosphate XMP using NAD as a cofactorThe oxidation of IMP to XMP is considered as the pivotal step in the biosynthesis of guanine nucleotide whose pool controls cell proliferation and many other major cellular processes1 The decrease in guanine nucleotide resulting from IMPDH inhibition interrupts the nucleic acid synthesis in proliferating cells The involvement of IMPDH in de novo guanine nucleotide biosynthesis makes IMPDH a crucial enzyme in cell proliferation and differentiation2 IMPDH is recognized as a validated target for several major therapeutic areas IMPDH inhibitors are exploited as antiviral eg ribavirine antiparasitic antimicrobial antileukemic and immunosuppressive agents2 IMPDH Type II is the predominant isoform of the enzyme and is selectively expressed in proliferating cells including lymphocytes and tumor cells2IMPDH in immunologyIMPDH is highly active in lymphocytes It is a validated target to treat immunological diseases and to induce immunosuppression CellCept a mycophenolic acid MPA prodrug  Roche  CHF185 Bn as an immunosuppressive agent in 2006 orphan drug designation in 2006 for Myasthenia Gravis CellCept reached positive results in Phase III trials in Lupus Nephritis IMPDH is also recognized as an excellent target for the treatment of psoriasis rheumatoid arthritis RA and systemic lupus erythematosus SLE3IMPDH in oncologyIMPDH and particularly Type II which is overexpressed in tumor cells is considered as a highly potent target for cancer chemotherapy1 2 4 5 Several IMPDH inhibitors are under development for the treatment of Acute and Chronic Myelogenous Leukemia AML CML6 and other cancers pancreas colon bladder Additionally it has been shown that the use of IMPDH inhibitors counteracts the drug resistance7 that may appear in certain tumors For instance methotrexate resistance is directly related to the overexpression of IMPDH whose inhibition restores the drug efficacy8 Combination with other anticancer drugs extends the potential application of IMPDH inhibitorsCurrent development of IMPDH inhibitorsCellCept ribavirin mizoribine and tiazofurine are examples of currently used drugs that target IMPDH Benzamide riboside tiazofurine and MPA are under development in Phase IIIII in leukemia results are judged very encouraging8 The IMPDH II atomic structure has been resolved and it provides a valuable background for further leads optimization9 Besides nucleosides analogues NCEs have been identified as IMPDH inhibitors10 11 12 13 14 and enter development trials eg AVN944 Phase I in advanced hematologic malignancies Phase II in pancreatic and other solid tumors All this demonstrates how promising new IMPDH inhibitors could be and why the inhibiting activity of compounds is worth being evaluated on such a highly pertinent target', '[]'),
(17, 'https://www.novocib.com/convenient-assay-kits/human-recombinant-pnp', 'Human Recombinant PNP', 'Human PNP EC 2421NOVOCIBS PNP is a pure and active human Purine Nucleoside Phosphorylase expressed in E coli It has an apparent molecular weight of 3212 kDaPNP is an important therapeutic target enzyme Several PNP inhibitors have been developed to treat cancer viral infection and autoimmune diseases PNP is also a drug target for new antiparasitic drugsFor direct and continuous measurement of PNP activity see our PRECICE PNP Assay kit | PNP a multiplefaced enzymeCatalytic activityPurine Nucleoside Phosphorylase PNP is involved in salvage pathway of the purine metabolism PNP catalyzes the cleavage of the glycosidic bond of ribo or deoxyribonucleosides in the presence of inorganic phosphate as a second substrate to generate the purine base and ribose or deoxyribose1phosphate The reaction is reversible for natural substratesTherapeutic potential of PNP inhibitorsPNP deficiency leads to Tlymphocytopenia usually with no apparent effects on Blymphocyte function These symptoms suggest possible chemotherapeutic applications of potent inhibitors of PNP as selective immunosuppressive agents to treat Tcell leukemias or Tcellmediated autoimmune diseases such as lupus erythematosus and rheumatoid arthritis112 The decrease in plasma and urine levels of urate is an additional symptom of PNP deficiency PNP inhibitors may contribute to treat hyperuricemic states such as secondary or xanthine goutSome PNP inhibitors have undergone clinical trials for the treatment of cutaneous Tcell lymphoma acute lymphoblastic leukemia ALL HIV infections and psoriasisPeldesine BCX34 was granted orphan drug status for the treatment of Tcell lymphoma and reached phase III as an immunomodulator for inflammatory autoimmune diseases It has recently entered clinical trial for HIV infections3BCX34 PeldesineForodesine BCX1777 has US orphan drug status for the treatment of Tcell nonHodgkins lymphoma including cutaneous Tcell lymphoma CTCL chronic lymphocytic leukaemia CLL and related leukaemias including Tcell prolymphocytic leukaemia PLL adult Tcell leukaemia and hairy cell leukaemia and for the treatment of acute lymphocytic leukaemia ALL Forodesine was also designed Orphan drug in Europe for ALL in December 2006 and for CTCL in February 20074BCX1777 ForodesinePNP inhibitors are also investigated to prevent the cleavage and the resulting deactivation of Nucleoside Analogues by PNPNote Protozoan parasites are auxotrophic for purine and have their own PNPs which have specific activities and properties that differ from the human PNP Protozoan parasites PNPs are considered to be reasonable target against infection eg Plasmodium falciparum5PNP a threat for therapeutic efficacy of Nucleoside AnaloguesIn vivo phosphorolysis is highly favoured over purine nucleoside synthesis and is coupled with two additional enzymatic reactions oxidation of the liberated purine base by xanthine oxidase XO and its phosphoribosylation by hypoxanthineguanine phosphoribosyltransferase HGPRT6 Thus PNP plays a key role in the salvage pathway of the purine metabolism enabling the cell to utilize purine bases recovered from metabolized purine ribo and deoxyribonucleosides to synthesize purine nucleotides This phosphorolysis reaction of purine nucleosides by PNP has a direct impact on the therapeutic efficacy of Nucleoside Analogues Antitumour or antiviral nucleoside analogues are likely to be cleaved by PNP before being phosphorylated by the cell nucleoside kinases and converted to the active nucleotide form For instance 23dideoxyguanosine ddG7 9Darabinofuranosyl guanine AraG8 as well as one of its prodrug Nelarabine Arranon GSK9 which is intracellularly converted to AraG by Adenosine deaminase ADA are PNP resistant nucleoside analogues whereas 23dideoxyinosine ddI10 is easily cleaved in vivo by PNPSince acyclonucleoside analogues are particularly resistant to cleavage by PNP though phosphorylated by viral thymidine kinases TK they are generally considered as excellent candidates as antiviral agents eg aciclovir ganciclovir11Note that Ganciclovir is not only PNP resistant but is also a PNP inhibitorPNP a tool for enzymatic synthesis of Nucleoside AnaloguesThe reversible reaction catalyzed by PNP can be favorably exploited to synthesize nucleoside analogues especially when chemical synthesis is difficult to prepare andor gives low yields', '[]'),
(18, 'https://www.novocib.com/convenient-assay-kits/bacterial-recombinant-impdh', 'Bacterial active IMPDH', 'Bacterial IMPDH Staphylococcus aureus EC 111205Synonyms inosine 5monophosphate dehydrogenase IMP dehydrogenaseNOVOCIBs bacterial IMPDH is a cloned protein of 53kDa cloned by PCR amplification of guaB gene of Staphylococcus aureus and expressed in E coliToday antibiotic resistance is one of the worlds most important public health problems There is an urgent need for new antibiotic compounds acting on new targets One attractive strategy for developing new antibiotics consists in inhibiting bacterial IMPDH an enzyme involved in the de novo synthesis of purine nucleotides and therefore necessary for bacterial cell growth and divisionToday antibiotic resistance is one of the worlds most important public health problems There is an urgent need for new antibiotic compounds acting on new targets One attractive strategy for developing new antibiotics consists in inhibiting bacterial IMPDH an enzyme involved in the de novo synthesis of purine nucleotides and therefore necessary for bacterial cell growth and divisionBacterial IMPDHRef ENov7Mammalian and bacterial IMPDHs are known to have significantly different kinetic properties and inhibitor sensitivities12 The experiments done with previously cloned human IMPDH2 and bacterial IMPDH of Staphylococcus aureus are illustrated below In agreement with published data mycophenolic acid MPA inhibits human IMPDH type II 20times more efficiently than bacterial IMPDH with IC50 values of 100nM and 26M respectively A In contrast mizoribine monophosphate displays the opposite selectivity B It is a more potent inhibitor of bacterial IMPDH with respective IC50 values of 12nM and 185nM for bacterial and human enzymes | Bacterial recombinant IMPDH and human recombinant IMPDH Type 2 enzymes are useful tools for the selection of speciesspecific IMPDH inhibitors Both enzymes are available at NOVOCIBIMPDH inhibition Effect of MPA A and mizoribine monophosphate B on human recombinant IMPDH II red curve and bacterial recombinant IMPDH of Staphylococcus aureus blue curve Enzymatic assays are performed in duplicate at 37C in 01M KH2PO4 buffer pH 80 in the presence of 1mM DTT 200M NAD 200M IMP 60nM Human IMPDH Type 2 or 95nM IMPDH Saureus Reaction is followed in an iEMS Reader MF Labsystems microtiter plate reader at 340nm', '[]'),
(19, '/convenient-assay-kits/adk-assay-kit', 'Adenosine Kinase Assay Kit  ADK Assay Kit', 'High Throughput Assay for Human Adenosine KinasePRECICE ADK Assay Kit provides a convenient high throughput compatible and nonradioactive assay for in vitro measurement of ADK activity and for Drug Discovery of novel ADK inhibitors Novel tool for Drug Discovery this kit allows HTS search of novel ADK inhibitorsPrincipleAdenosine kinase uses ATP as the phosphate donor It transfers the terminal phosphate group of ATP to a substrate producing ADP as a byproduct The assay is based on the use of inosine as a surrogate ADK substrate and a coupled reaction involving a highly active IMPDH Inosine Monophosphate Dehydrogenase for a direct measurement of the inosine monophosphate IMP formed by ADK In the presence of inosine and ATP ADK catalyses the phosphorylation of inosine to form IMP and ADP IMP is then immediately oxidized to XMP by a highly active IMPDH in the presence of NAD leading to NADH2 formation | ADK role in human bodyAdenosine kinase is a ubiquitous enzyme regulating intra and extracellular concentrations of adenosine AR an important modulator of central nervous system functions and a signal molecule involved in hypoxia inflammation and nociception Together with adenosine demainase adenosine kinase regulates intra and extracellular cellular adenosine concentration Inhibition of adenosine kinase results in selective increase of local adenosine concentrations and reduced seizure susceptibility and nociception in vivo3 ADK dysfunction is involved in several pathologies including diabetes13 epilepsy6 and cancer Consequently ADK emerges as a rational therapeutic target and adenosineregulating drugs have been extensively tested 1 as new analgesic and antiinflammatory agents4 to treat schizophrenia7 or to limit brain injury after an ischemic stroke8ValidationThe use of PRECICE ADK Screening Assay Kit for the screening of ADK inhibitors and IC50 measurements was validated with compound A134974 a known ADK inhibitor SigmaAldrich under license from Abbott Laboratories ZFactor was calculated from 44 negative no ADK inhibition and positive inhibition of ADK with 500nM A134974 and measured as 068 which is an excellent level of performance for a screening assay', '[]'),
(20, '/analytical-services/yeast-extract-nucleotide-analysis', 'Yeast Extract Nucleotide Analysis', 'Yeast Extracts Enriched in Tasty Nucleotides5nucleotides IMP and GMP also known as Inosinate and Guanylate are strong flavour enhancers E626E633 involved in umami taste Since yeasts are rich in ribonucleic acid RNA a natural source of 5 nucleotides GMP AMP CMP and UMP yeast extracts enriched in 5 nucleotides IMP and GMP are currently used as taste enhancers | 5Nucleotidases and phosphatases are ubiquitous hydrolytic enzymes that catalyze the hydrolysis of nucleotides into a phosphate and nucleosides deprived of flavourenhancing properties The nucleosides are further hydrolyzed to purine and pyrimidine bases Purine base hypoxanthine has a strongly bitter taste Nucleotidesnucleosidesbases content in yeast extract vary as a function of growth state and the method of preparation | REFPRODUCT NAMEPRICES110003Yeast Free Bases Nucleosides Nucleotides and RNA  Bases 45000Quality Control of Yeast Extract Nucleotides NOVOCIB offers a range of analytical services from characterisation of free 5 nucleotides to full spectrum of nucleotides in yeast extracts by ionpair highperformance liquid chromatography with diode array detection This service allows to control the content of flavor nucleotides yeast extract samplesAnalytical systemAgilent 1100 series liquid chromatograph fitted with binary pump vacuum degasser wellplate autosampler thermcostatted column compartment and multiple wavelenght and diode array detectorRun and data acquisision are controlled by Agilent Chem Station software Zorbax ExtendC18 46x150mm 35m particle size and guard column AgilentCalibrations are performed with standards prepared in mobile phase and with standards mixed with cell extracts which are run immediately before and after every series of samplesPeak assignment of different bases ribonucleosides and ribonucleoside monophosphatesis is done by comparing both retention times and characteristics of UV absorption spectra 254280 ratio with those of standards The area of individual peaks was measured using ChemStation software Agilent', '[]'),
(22, '/bacterial-luciferase', 'Bacterial Luciferase', 'NOVOCIBs bacterial luciferase is purified from a Photobacterium phosphoreum strain isolated from squid by our team and selected for its brightest luminescence The luxab gene was amplified by PCR and cloned The sequences of cloned  and  subunits have shown 94 and 92 identity to P24113 and P12744 proteins of Photobacterium phosphoreum SwissProt EntryApplications Applications In luminescent marine photobacteria the production of light results from two successive reactions The first one is catalyzed by the NADPHFMN oxidoreductase EC 1681 that produces FMNH2 acting as a substrate for the second reaction which is catalyzed by a luciferase EC 114143 to generate light in the presence of an aliphatic aldehyde and molecular oxygen In the presence of limiting concentrations of NADH substrate light intensity is proportional to NADPH concentration The coupling of bacterial luciferase to FMNNADPH oxidoreductase has been used to provide ultrasensitive analytical tools for the quantification of NADPH and the substrates of NADH NADPH dependent enzymes eg glucose lactate malate ethanol sorbitol oxaloacetate1Synonyms Alkanal reducedFMNoxygen oxidoreductase 1hydroxylating luminescing', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `request404`
--

CREATE TABLE `request404` (
  `id` int NOT NULL,
  `url` text,
  `ip` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `request404`
--

INSERT INTO `request404` (`id`, `url`, `ip`, `time`) VALUES
(9, '/K_Value_Assay_Description', '66.249.70.8', '2024-05-20 20:29:05'),
(10, '/Previous', '40.77.167.144', '2024-05-20 20:34:38'),
(11, '/app/views/home-old.php', '216.244.66.231', '2024-05-20 20:35:07'),
(12, '/Infant_Formula_Nucleotide_Analysis.html', '66.249.70.6', '2024-05-20 20:38:08'),
(19, '/Kits_FOOD_QC', '66.249.70.6', '2024-05-20 20:49:25'),
(20, '/Human_Food.html', '66.249.70.8', '2024-05-20 20:56:31'),
(21, '/Petfood_Nucleotide_Analysis.html', '66.249.70.6', '2024-05-20 20:57:30'),
(22, '/ADK_Assay_Kit.html', '66.249.70.7', '2024-05-20 21:01:11'),
(23, '/css/app', '3.134.100.31', '2024-05-20 21:03:48'),
(26, '/Convenient_Assay_Kits.html', '66.249.70.8', '2024-05-20 21:07:58'),
(46, '/old/K_Value_Assay_Description', '2001:861:203:6750:403a:8f64:ed6c:20eb', '2024-05-20 21:33:59'),
(49, '/Kit_Fraicheur_Poisson_Valeur_K', '2001:861:203:6750:403a:8f64:ed6c:20eb', '2024-05-20 21:36:22'),
(53, '/Bacterial_Recombinant_IMPDH.html', '114.119.138.48', '2024-05-20 22:04:33'),
(59, '/Nucleotide_Analysis_Services.html', '2001:4860:7:408::ff', '2024-05-20 22:50:18'),
(60, '/.well-known/traffic-advice', '64.233.173.137', '2024-05-20 22:50:18'),
(61, '/3ds1633693954432212', '45.90.61.43', '2024-05-20 23:08:32'),
(63, '/merchant/code', '89.104.101.70', '2024-05-20 23:08:33'),
(65, '/merchant/z/payment/', '89.104.111.135', '2024-05-20 23:08:34'),
(67, '/3ds.php', '176.53.223.121', '2024-05-20 23:08:34'),
(69, '/Nucleotide_Analysis_Services.html', '183.171.100.175', '2024-05-20 23:11:07'),
(71, '/app/FA6', '47.128.111.162', '2024-05-20 23:29:50'),
(77, '/robots.txt', '47.128.62.129', '2024-05-20 23:33:50'),
(78, '/Freshness_Principle.html', '65.21.35.199', '2024-05-20 23:34:51'),
(79, '/Yeast_Extract_Nucleotide_Analysis.html', '65.21.35.199', '2024-05-20 23:34:52'),
(80, '/Nucleotide_Analysis_Services.html', '217.113.194.40', '2024-05-20 23:49:41'),
(81, '/PRPPS_Assay_Kit', '217.113.194.47', '2024-05-20 23:49:45'),
(82, '/robots.txt', '47.128.99.34', '2024-05-21 00:06:51'),
(87, '/images/FrenchFlag.gif', '207.46.13.7', '2024-05-21 01:20:21'),
(88, '/platform_PRECICE', '95.108.213.180', '2024-05-21 01:22:57'),
(92, '/old/images/PRECICE%20Freshness%20Assay%20Manual%20K0700-003%20140709', '207.46.13.151', '2024-05-21 01:34:18'),
(97, '/old/images/Yeast_Extract_Nucleotide_Analysis.html', '207.46.13.151', '2024-05-21 01:48:03'),
(98, '/old/images/Cellular_Nucleotides_Analysis.html', '207.46.13.151', '2024-05-21 01:48:04'),
(99, '/old/images/Bacterial_Luciferase.html', '207.46.13.151', '2024-05-21 01:48:05'),
(100, '/old/images/PRECICE%20ATP%20Breakdown%20Assay%20Kit%20Manual%20K0700-01', '207.46.13.151', '2024-05-21 01:48:05'),
(101, '/old/images/Convenient_Assay_Kits.html', '52.167.144.210', '2024-05-21 01:48:08'),
(102, '/old/images/Fish_Freshness.html', '52.167.144.210', '2024-05-21 01:48:08'),
(103, '/old/images/Case_Studies.html', '207.46.13.151', '2024-05-21 01:48:23'),
(104, '/old/images/Nucleotides_Life_Science.html', '52.167.144.228', '2024-05-21 01:48:28'),
(105, '/old/images/Petfood_Nucleotide_Analysis.html', '52.167.144.228', '2024-05-21 01:48:28'),
(106, '/old/images/Aquaculture_Nucleotide_Analysis.html', '52.167.144.228', '2024-05-21 01:48:30'),
(107, '/old/images/Bacterial_FMN_Reductase.html', '52.167.144.228', '2024-05-21 01:48:30'),
(108, '/old/images/ATP_breakdown_meat.html', '52.167.144.228', '2024-05-21 01:48:31'),
(111, '/Human_Recombinant_IMPDH', '18.236.200.225', '2024-05-21 01:56:25'),
(113, '/old/images/By-products.html', '52.167.144.184', '2024-05-21 02:03:18'),
(114, '/old/images/Nucleotide_Analysis_Services.html', '52.167.144.184', '2024-05-21 02:03:39'),
(116, '/Human_Recombinant_PNP.html', '66.249.70.7', '2024-05-21 02:25:47'),
(117, '/Human_Recombinant_PNP.html', '66.249.70.8', '2024-05-21 02:29:17'),
(118, '/Human_Recombinant_IMPDH.html', '66.249.70.6', '2024-05-21 02:38:28'),
(119, '/images/ADK_Assay_Kit.html', '66.249.70.6', '2024-05-21 02:38:29'),
(120, '/Xanthine_Dehydrogenase_XDH.html', '66.249.70.7', '2024-05-21 02:39:02'),
(121, '/PNP_Assay_Kit.html', '66.249.70.8', '2024-05-21 02:42:03'),
(122, '/Nucleotides_Life_Science.html', '66.249.70.6', '2024-05-21 02:42:59'),
(123, '/Recombinant_UMP-CMP_Kinase.html', '66.249.70.6', '2024-05-21 02:43:23'),
(124, '/Xanthine_Dehydrogenase_XDH.html', '66.249.70.8', '2024-05-21 02:51:32'),
(125, '/index.php', '103.230.14.63', '2024-05-21 02:54:38'),
(127, '/Fish_Freshness.html', '2a02:598:128:8a00::b00:d', '2024-05-21 03:01:48'),
(128, '/Human_Recombinant_PNP.html', '66.249.70.7', '2024-05-21 03:10:02'),
(130, '/app/FA6/svgs/sharp-solid', '47.128.126.10', '2024-05-21 03:25:33'),
(132, '/Nucleotide_Analysis_Services.html', '112.198.179.218', '2024-05-21 03:42:16'),
(133, '/Bacterial_Recombinant_IMPDH.html', '66.249.64.162', '2024-05-21 03:42:40'),
(135, '/Phosphatase%20Assay%20Kit', '157.55.39.61', '2024-05-21 04:10:39'),
(136, '/Kits_FOOD_QC.html', '66.249.70.6', '2024-05-21 04:16:54'),
(137, '/Freshness_Quality_Assessments', '35.88.165.253', '2024-05-21 04:25:09'),
(138, '/Kit_Fraicheur_Poisson_Valeur_K', '35.88.165.253', '2024-05-21 04:31:01'),
(140, '/ITPase_Assay_Kit.html', '40.77.167.57', '2024-05-21 05:04:59'),
(142, '/index.php', '103.230.14.80', '2024-05-21 05:27:29'),
(144, '/Human%20Adenosine%20Kinase', '52.167.144.198', '2024-05-21 06:01:22'),
(145, '/Nucleotide_Analysis_Services.html', '66.249.70.7', '2024-05-21 06:08:21'),
(182, '/Recombinant_UMP-CMP_Kinase.html', '66.249.70.6', '2024-05-21 07:42:56'),
(184, '/Infant_Formula_Nucleotide_Analysis', '66.249.70.8', '2024-05-21 07:58:58'),
(186, '/Convenient_Assay_Kits', '66.249.70.6', '2024-05-21 08:03:29'),
(188, '/RNR_Inhibition_Whole_Cell_Screening.html', '66.249.70.8', '2024-05-21 08:17:20'),
(189, '/dCK_Assay_Kit.html', '66.249.70.7', '2024-05-21 08:17:20'),
(190, '/wp-login.php', '196.201.229.10', '2024-05-21 08:19:30'),
(191, '/xmlrpc.php', '196.201.229.10', '2024-05-21 08:19:30'),
(192, '/wp-login.php', '197.254.93.202', '2024-05-21 08:19:31'),
(193, '/xmlrpc.php', '197.254.93.202', '2024-05-21 08:19:31'),
(194, '/app/views/base.php', '35.92.162.110', '2024-05-21 08:34:48'),
(197, '/app/views/home-old.php', '35.92.162.110', '2024-05-21 08:38:24'),
(222, '/app/views/convenient-assay-kits.php', '35.92.162.110', '2024-05-21 08:45:09'),
(223, '/Kits_FOOD_QC.html', '31.12.59.82', '2024-05-21 08:49:28'),
(230, '/Human_Recombinant_HGPRT.html', '66.249.70.6', '2024-05-21 09:02:32'),
(231, '/Bacterial_FMN_Reductase.html', '2a02:598:128:8a00::b00:d', '2024-05-21 09:09:18'),
(232, '/Recombinant_UMP-CMP_Kinase.html', '17.241.219.131', '2024-05-21 09:54:28'),
(235, '/Nucleoside_Kinase_Assay_Kits', '52.167.144.20', '2024-05-21 10:23:15'),
(236, '/refresher', '176.53.220.149', '2024-05-21 10:27:53'),
(238, '/lander/test', '176.53.223.126', '2024-05-21 10:27:57'),
(240, '/sberbank-quiz-v2/', '45.90.62.69', '2024-05-21 10:28:05'),
(242, '/sberchat008-prilca/', '176.53.218.131', '2024-05-21 10:28:06'),
(244, '/lander/gpb_rus_short_obfs_nonetext/', '176.53.221.247', '2024-05-21 10:28:11'),
(246, '/tink_chat/', '176.53.217.73', '2024-05-21 10:28:15'),
(248, '/index_sber.php', '176.53.220.89', '2024-05-21 10:28:18'),
(250, '/refresher', '89.104.101.176', '2024-05-21 10:28:22'),
(252, '/lander/gazprom-prelandergnidanewkomment-thanksstory2-objv2/land/thank-you/', '176.53.222.245', '2024-05-21 10:28:28'),
(254, '/refresher', '45.90.60.160', '2024-05-21 10:28:34'),
(256, '/lander/testsberv4-copy--1/', '45.90.62.51', '2024-05-21 10:28:37'),
(258, '/lander/testsberv4_1703110539/', '176.53.223.229', '2024-05-21 10:28:40'),
(260, '/KQRDmgB', '89.104.110.185', '2024-05-21 10:28:45'),
(262, '/lander/sber-fix/', '89.104.110.204', '2024-05-21 10:28:51'),
(264, '/lander/gazinvest-forma9maymadrid-thanksqz9may/thank-QZ/', '176.53.217.73', '2024-05-21 10:28:56'),
(266, '/lander/gp_newmain_calc_ru_land_obj_js_v2/index.php', '176.53.223.199', '2024-05-21 10:29:01'),
(275, '/Services', '47.128.58.73', '2024-05-21 10:58:53'),
(283, '/archivarix.cms.php', '188.130.188.50', '2024-05-21 11:18:11'),
(284, '/IMPDH_Recombinant_Enzyme.html', '40.77.167.126', '2024-05-21 11:45:24'),
(285, '/IMPDH_Inhibition_Whole_Cell_Screening.html', '52.167.144.20', '2024-05-21 12:15:15'),
(286, '/ATP_breakdown_meat.html', '40.77.167.126', '2024-05-21 12:23:46'),
(287, '/Xanthine_Dehydrogenase_XDH.html', '17.241.219.29', '2024-05-21 12:27:22'),
(288, '/Recombinant_Deoxycytidine_Kinase.html', '2a02:598:128:8a00::b00:d', '2024-05-21 12:28:47'),
(289, '/Fish_Freshness.html', '2a02:598:128:8a00::b00:d', '2024-05-21 13:15:59'),
(290, '/ITPase_Assay_Kit.html', '2a02:598:128:8a00::b00:d', '2024-05-21 13:27:41'),
(291, '/Human_Food.html', '66.249.70.7', '2024-05-21 14:37:13'),
(292, '/IMPDH_Inhibition_Whole_Cell_Screening.html', '141.2.220.141', '2024-05-21 14:57:41'),
(293, '/images/ADK_Assay_Kit.html', '52.167.144.222', '2024-05-21 15:41:04'),
(318, '/Human_Recombinant_HGPRT.html', '216.244.66.231', '2024-05-21 16:18:28'),
(328, '/Recombinant_Purine_Metabolism_Enzymes.html', '2a02:598:128:8a00::b00:d', '2024-05-21 16:23:05'),
(337, '/app/internal/admin/convenientassaykitsbacterialrecombinantimpdh', '2001:861:203:6750:b164:9c8c:ac02:82af', '2024-05-21 16:28:51'),
(338, '/index.php', '103.230.14.80', '2024-05-21 16:28:59'),
(339, '/app/internal/admin/convenientassaykitshumanrecombinantpnp', '2001:861:203:6750:b164:9c8c:ac02:82af', '2024-05-21 16:29:01'),
(340, '/robots.txt', '47.128.17.243', '2024-05-21 16:29:19'),
(341, '/app/internal/admin/convenientassaykitshumanrecombinantimpdh', '2001:861:203:6750:b164:9c8c:ac02:82af', '2024-05-21 16:29:31'),
(348, '/convenientassaykitsbacterialrecombinantimpdh', '2001:861:203:6750:b164:9c8c:ac02:82af', '2024-05-21 16:30:01'),
(358, '/convenientassaykitshprtassaykit', '2001:861:203:6750:b164:9c8c:ac02:82af', '2024-05-21 16:30:31'),
(369, '/Recombinant_Adenosine_Kinase.html', '220.181.108.149', '2024-05-21 16:31:47'),
(376, '/app/FA6/svgs/brands', '47.128.127.2', '2024-05-21 16:33:18'),
(435, '/Recombinant_Adenosine_Kinase.html', '66.249.70.7', '2024-05-21 16:54:19'),
(436, '/app/templates', '47.128.98.12', '2024-05-21 17:06:46'),
(437, '/app/FA6/svgs/duotone', '47.128.112.80', '2024-05-21 17:10:47'),
(440, '/Recombinant_Adenosine_Kinase.html', '2001:861:203:6750:b164:9c8c:ac02:82af', '2024-05-21 17:11:33'),
(445, '/Yeast_Extract_Nucleotide_Analysis.html', '116.179.32.99', '2024-05-21 17:18:43'),
(446, '/HPRT_Assay_Kit.html', '66.249.70.7', '2024-05-21 17:27:36'),
(447, '/Phosphatase_Assay_Kit.html', '66.249.70.8', '2024-05-21 17:30:54'),
(448, '/old/images/Bacterial_Luciferase.html', '207.46.13.7', '2024-05-21 17:34:30'),
(449, '/app/internal', '47.128.58.67', '2024-05-21 18:10:17'),
(450, '/Recombinant_Nucleoside_Kinases', '40.77.167.3', '2024-05-21 18:22:09'),
(451, '/Infant_Formula_Nucleotide_Analysis.html', '220.181.108.92', '2024-05-21 18:51:18'),
(452, '/app/content', '47.128.98.225', '2024-05-21 19:56:18'),
(453, '/app/FA6/svgs/sharp-thin', '47.128.98.213', '2024-05-21 20:00:17'),
(454, '/Bacterial_Bioluminescence_Enzymes.html', '17.241.227.37', '2024-05-21 20:09:12'),
(455, '/images/pdficon_large.gif', '14.17.95.69', '2024-05-21 20:50:36'),
(456, '/Bacterial_Recombinant_IMPDH.html', '116.179.32.44', '2024-05-21 20:55:11'),
(457, '/old/images/PRECICE%20Freshness%20Assay%20Manual%20for%20Spectrophotometer%20K0700-004', '35.167.69.75', '2024-05-21 21:04:04'),
(458, '/Recombinant_Nucleoside_Kinases.html', '216.244.66.231', '2024-05-21 21:08:18'),
(459, '/Recombinant_Deoxycytidine_Kinase.html', '52.167.144.168', '2024-05-21 21:10:35'),
(460, '/old/images/PRECICE%20Freshness%20Assay%20Manual%20K0700-003%20140709', '35.167.69.75', '2024-05-21 21:12:13'),
(461, '/Kits_FOOD_QC.html.', '2a03:2880:2ff:8::face:b00c', '2024-05-21 21:22:33'),
(462, '/dCK%20Phosphorylation%20Assay%20Kit', '40.77.167.54', '2024-05-21 21:28:16'),
(463, '/app/views/convenient-assay-kits', '47.128.97.168', '2024-05-21 21:28:59'),
(464, '/images/Human_Recombinant_IMPDH.html', '40.77.167.22', '2024-05-21 21:29:37'),
(465, '/app/static/img', '47.128.96.48', '2024-05-21 21:33:00'),
(466, '/Human_Recombinant_HGPRT.html', '116.179.32.14', '2024-05-21 21:56:28'),
(467, '/Bacterial_FMN_Reductase.html', '220.181.108.149', '2024-05-21 22:27:06'),
(468, '/old/images/Feed_Nucleotide_Analysis.html', '157.55.39.61', '2024-05-21 22:33:09'),
(469, '/old/images/Freshness_Protocol.html', '157.55.39.61', '2024-05-21 22:33:09'),
(470, '/old/images/Meat_Freshness.html', '157.55.39.61', '2024-05-21 22:33:09'),
(471, '/old/images/Freshness_Principle.html', '52.167.144.168', '2024-05-21 22:33:11'),
(472, '/old/images/IMPDH_Recombinant_Enzyme.html', '40.77.167.22', '2024-05-21 22:33:12'),
(473, '/old/images/Bacterial_Recombinant_IMPDH.html', '40.77.167.22', '2024-05-21 22:33:13'),
(474, '/old/images/Recombinant_UMP-CMP_Kinase.html', '40.77.167.22', '2024-05-21 22:33:13')

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int NOT NULL,
  `search_query` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vlog`
--

CREATE TABLE `vlog` (
  `datetime` datetime DEFAULT NULL,
  `ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request404`
--
ALTER TABLE `request404`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `request404`
--
ALTER TABLE `request404`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=565;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
