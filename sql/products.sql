CREATE TABLE IF NOT EXISTS products (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  reference VARCHAR(80) NOT NULL,
  title VARCHAR(255) NOT NULL,
  size VARCHAR(255),
  price INT,
  page_url VARCHAR(255),
  updated_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);





INSERT INTO `products` (`ID`, `reference`, `title`, `size`, `price`, `page_url`, `updated_on`) VALUES
(1, 'K0709-04-2', 'PRPP-S Assay Kit', '10 mL of reaction mixture (half 96-well plate)', 420, 'convenient-assay-kits/prpp-s-assay-kit', '2024-10-02'),
(2, 'K0709-01-2', 'HPRT Assay Kit', '24 analyses (8 samples in triplicate) with HPRT enzyme', 330, 'convenient-assay-kits/hprt-assay-kit', '2024-10-02'),
(3, 'K0709-05-1', 'AMP Deaminase Assay Kit', '12 analyses (5 ml reaction buffer)', 210, 'convenient-assay-kits/ampda-assay-kit', '2024-10-03'),
(4, 'K0709-05-2', 'AMP Deaminase Assay Kit', '24 analyses (10 ml reaction buffer)', 410, 'convenient-assay-kits/ampda-assay-kit', '2024-10-03'),
(6, 'K0709-06-2', 'ITP-ase Assay Kit', '10 mL of reaction mixture (half 96-well plate)', 350, 'convenient-assay-kits/itp-ase-assay-kit', '2024-10-03'),
(7, 'K0507-02', 'ADK Phosphorylation Assay Kit', '1 plate (96 assays)', 420, 'convenient-assay-kits/adk-phosphorylation-assay-kit', '2024-10-03'),
(8, 'K0307-01', 'dCK Phosphorylation Assay Kit', '1 plate (96 assays)', 420, 'convenient-assay-kits/dck-phosphorylation-assay-kit', '2024-10-03'),
(9, 'K0507-01.01', 'Adk Assay Kit', '1 plate (96 assays)', 421, 'convenient-assay-kits/adk-assay-kit', '2024-10-03'),
(10, 'K0507-01.05', 'Adk Assay Kit', '5 plates (5 x 96 assays)', 1680, 'convenient-assay-kits/adk-assay-kit', '2024-10-03');
