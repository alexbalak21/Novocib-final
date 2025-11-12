<!-- OLD VERSION OF THE PAGE NO LONGER IN USE - REDIRECTING TO THE NEW PATH -->
<?php
global $title;
$title = "Active Human IMPDH Type 2 Enzyme";

//REDIRECT TO /active-purified-enzymes/human-recombinant-impdh.php
header("Location: /active-purified-enzymes/human-recombinant-impdh");
exit();

// META TAGS 
ob_start(); ?>
<title>Human IMPDH Type 2 (IMPDH2) Assay Kit | NOVOCIB</title>
<meta name="description" content="High-purity Human IMPDH Type 2 (IMPDH2) enzyme assay kit for research. Characterized for substrate affinity and inhibitor sensitivity. Ideal for drug discovery and cancer research.">
<meta name="keywords" content="Human IMPDH2, IMPDH Type 2 Assay Kit, Inosine Monophosphate Dehydrogenase, IMPDH inhibitor screening, mycophenolic acid, ribavirin monophosphate, GTP biosynthesis, cancer research, immunosuppression, enzyme activity assay, E.C.1.1.1.205, drug discovery, NOVOCIB">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.novocib.com/convenient-assay-kits/human-recombinant-impdh">
<meta property="og:title" content="Human IMPDH Type 2 (IMPDH2) Assay Kit | NOVOCIB">
<meta property="og:description" content="High-purity Human IMPDH Type 2 enzyme for research and drug discovery. Characterized for substrate affinity and inhibitor sensitivity.">
<meta property="og:image" content="https://www.novocib.com/app/img/IMPDH-reaction.png">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Human IMPDH Type 2 (IMPDH2) Assay Kit | NOVOCIB">
<meta name="twitter:description" content="High-purity Human IMPDH Type 2 enzyme for research and drug discovery. Characterized for substrate affinity and inhibitor sensitivity.">
<meta name="twitter:image" content="https://www.novocib.com/app/img/IMPDH-reaction.png">

<!-- Canonical URL -->
<link rel="canonical" href="https://www.novocib.com/convenient-assay-kits/human-recombinant-impdh" />
<?php $metas = ob_get_clean();


require_once $_SERVER['DOCUMENT_ROOT'] . "/app/templates/new_base.php";
echo Banner::gen();
?>

<section class="container mt-5">

    <h1 class="underlinedTitle right"><span class="underlined novoblue right">Human IMPDH, Type II (IMPDH2) Assay Kit</span></h1>
    <div class="row">
        <div class="col-lg-6">
            <p>
                <strong>Synonyms:</strong>
                inosine 5'-monophosphate dehydrogenase, type 2, IMP dehydrogenase, type II, IMPDH2.
            </p>
            <p>
                Inosine 5'-monophosphate dehydrogenase type 2 (IMPDH 2, E.C.1.1.1.205) is the predominant
                isoform of IMPDH and a validated target to treat a wide range of cancers and infectious
                diseases and to prevent lymphocytes proliferation.
            </p>
            <p>
                <strong class="novo-blue">NOVOCIB's</strong>
                IMPDH 2 has been cloned by RT-PCR amplification of mRNA extracted from human hepatoma cells
                (NP_000875.2, 100% identity) and expressed in E.coli.
            </p>
            <p>
                <strong class="novo-blue">NOVOCIB's</strong>
                purified IMPDH 2 is an active enzyme characterized for its affinity for inosine
                5'-monophosphate and NAD substrates, and its sensitivity to enzyme inhibitors such as
                mycophenolic acid and ribavirine-monophosphate.
            </p>
            <p>
                <strong>Unit Definition:</strong>
                One unit of IMPDH Type II catalyzes the oxydation of 1 µmole of IMP to XMP per minute at pH
                8.8 at 37 µC.
            </p>
            <p>
                <strong>Specific Activity:</strong>
                ≥ 0.050 unit/mg protein.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img
                class="w-100"
                src="/app/img/IMPDH-reaction.png"
                alt="Human IMPDH Type 2 enzymatic reaction: IMP + NAD+ → XMP + NADH + H+"
                title="IMPDH Type 2 Catalytic Reaction"
                loading="lazy" />
            <h4 class="novo-blue">Human IMPDH Type 2</h4>
            <h5>Ref. #E-Nov1</h5>
        </div>
        <div class="d-flex justify-content-center mt-4" itemscope itemtype="https://schema.org/Product">
            <meta itemprop="name" content="Human IMPDH Type 2 Assay Kit">
            <meta itemprop="description" content="High-purity Human IMPDH Type 2 enzyme for research and drug discovery applications.">
            <div itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
                <meta itemprop="name" content="NOVOCIB">
            </div>
            <div class="col-lg-10 col-12">
                <?= Products::gen("Human IMPDH Type 2") ?>
                <div class="text-center" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                    <p class="mb-2">
                        <strong>Product Code: </strong><span itemprop="sku">E-Nov1</span>
                    </p>
                    <p class="mb-2">
                        <strong>Kit is provided in stable lyophilized form and
                            <span class="text-danger">shipped without dry ice</span></strong>
                    </p>
                    <meta itemprop="priceCurrency" content="USD">
                    <link itemprop="availability" href="https://schema.org/InStock">
                </div>
                <p class="my-4 text-center">
                    <strong>
                        You can ask us for a quotation
                        <a href="mailto:contact@novocib.com">here</a>
                        or write at
                        <a href="mailto:contact@novocib.com">contact@novocib.com</a>
                    </strong>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-3 mt-3">
    <div class="container">
        <p>
            <strong>Assay condition:</strong>
            KH2PO4 0.1M, pH8.8, NAD 250µM, DTT 2.5mM, 2.5mU/ml of human recombinant IMPDH II, Incubation
            at 37µC. Reaction started by adding IMP at 250µM final concentration. NADH formation was
            followed in an iEMS Reader MF (Labsystems) plate reader at 340nm.
        </p>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-4 my-4">
                <img height="400" src="/app/img/IMPDH-Gel.png" alt="SDS-PAGE analysis of purified Human IMPDH Type 2 showing high purity" loading="lazy" />
            </div>
            <div class="col-lg-8 my-4">
                <img height="400" src="/app/img/IMPDH-IC50.png" alt="Dose-response curve showing IMPDH Type 2 inhibition by mycophenolic acid" loading="lazy" />
            </div>
        </div>
        <p class="text-end mt-4">
            <strong>
                Download this Document:
                <a target="_blank" href="/app/documents/NovoCIB E-Nov1.pdf">
                    "NOVOCIB's Human Recombinant IMPDH"
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
            </strong>
        </p>
        <p class="text-end">
            <strong>
                Download this Document:
                <a target="_blank" href="/app/documents/NovoCIB IMPDH Services.pdf">
                    "NOVOCIB - IMPDH Products & Services"
                    <i class="fa-regular fa-file-pdf"></i>
                </a>
            </strong>
        </p>
    </div>
</section>
<section class="bg-white py-4">
    <div class="container">
        <h2 class="novo-blue mb-4">IMPDH - A Key Target for Therapeutic Applications</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="h5 card-title">Key Features:</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> High-purity human recombinant IMPDH Type 2</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Fully characterized enzyme activity</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Validated for inhibitor screening</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Suitable for cancer and immunology research</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-info">
            <h4 class="alert-heading">Research Applications</h4>
            <p class="mb-0">Our IMPDH Type 2 is ideal for: drug discovery, cancer research, immunology studies, enzyme kinetics, and high-throughput screening of potential inhibitors.</p>
        </div>

        <p class="mt-4">
            <strong>Synonyms:</strong>
            inosine 5'-monophosphate dehydrogenase, IMP dehydrogenase, IMPDH2, IMP (inosine monophosphate) dehydrogenase 2
        </p>
        <p>
            <strong>Catalytic activity</strong>
            <br />
            Inosine Monophosphate Dehydrogenase (IMPDH) converts inosine 5µ-monophosphate (IMP) to
            xanthosine 5µ-monophosphate (XMP) using NAD+ as a cofactor.
        </p>
        <div class="d-flex justify-content-center">
            <img class="col-lg-7" src="/app/img/IMPDH-reaction.png" alt="" />
        </div>
        <p>
            The oxidation of IMP to XMP is considered as the pivotal step in the biosynthesis of guanine
            nucleotide, whose pool controls cell proliferation and many other major cellular processes(1).
            The decrease in guanine nucleotide resulting from IMPDH inhibition interrupts the nucleic acid
            synthesis in proliferating cells. The involvement of IMPDH in de novo guanine nucleotide
            biosynthesis makes IMPDH a crucial enzyme in cell proliferation and differentiation(2). IMPDH
            is recognized as a validated target for several major therapeutic areas. IMPDH inhibitors are
            exploited as antiviral (e.g. ribavirine), antiparasitic, antimicrobial, antileukemic, and
            immunosuppressive agents(2). IMPDH Type II is the predominant isoform of the enzyme and is
            selectively expressed in proliferating cells, including lymphocytes and tumor cells(2).
        </p>

        <h6 class="mt-3">IMPDH in immunology</h6>
        <p>
            IMPDH is highly active in lymphocytes. It is a validated target to treat immunological
            diseases and to induce immunosuppression (CellCept®, a mycophenolic acid (MPA) prodrug - Roche
            µ CHF1.85 Bn as an immunosuppressive agent in 2006, orphan drug designation in 2006 for
            Myasthenia Gravis; CellCept® reached positive results in Phase III trials in Lupus Nephritis).
            IMPDH is also recognized as an excellent target for the treatment of psoriasis, rheumatoid
            arthritis (RA), and systemic lupus erythematosus (SLE)(3).
        </p>
        <h6 class="mt-3">IMPDH in oncology</h6>
        <p>
            IMPDH, and particularly Type II, which is overexpressed in tumor cells, is considered as a
            highly potent target for cancer chemotherapy(1, 2, 4, 5). Several IMPDH inhibitors are under
            development for the treatment of Acute and Chronic Myelogenous Leukemia (AML, CML)(6), and
            other cancers (pancreas, colon, bladderï¿½). Additionally, it has been shown that the use of
            IMPDH inhibitors counteracts the drug resistance(7) that may appear in certain tumors. For
            instance, methotrexate resistance is directly related to the overexpression of IMPDH, whose
            inhibition restores the drug efficacy(8). Combination with other anti-cancer drugs extends the
            potential application of IMPDH inhibitors.
        </p>
        <h6 class="mt-3">Current development of IMPDH inhibitors</h6>
        <p>
            CellCept®, ribavirin, mizoribine, and tiazofurine are examples of currently used drugs that
            target IMPDH. Benzamide riboside, tiazofurine, and MPA are under development in Phase II/III
            in leukemia: results are judged very encouraging(8). The IMPDH II atomic structure has been
            resolved and it provides a valuable background for further leads optimization(9). Besides
            nucleosides analogues, NCEs have been identified as IMPDH inhibitors(10, 11, 12, 13, 14) and
            enter development trials (e.g. AVN-944: Phase I in advanced hematologic malignancies, Phase II
            in pancreatic and other solid tumors). All this demonstrates how promising new IMPDH
            inhibitors could be and why the inhibiting activity of compounds is worth being evaluated on
            such a highly pertinent target.
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-evenly">
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">AVN-944</figcaption>
                <img class="w-100" src="/app/img/AVN-944.png" alt="AVN-944 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">VX-148</figcaption>
                <img class="w-100" src="/app/img/VX-148.png" alt="AVN-944 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">VX-497</figcaption>
                <img class="w-100" src="/app/img/VX-497.png" alt="VX-497 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">MPA (mycophenolic acid)</figcaption>
                <img class="w-100" src="/app/img/MPA.png" alt="MPA Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">CellCept®</figcaption>
                <img class="w-100" src="/app/img/MMF.png" alt="MMF Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">BMS-337197</figcaption>
                <img class="w-100" src="/app/img/BMS-337197.png" alt="BMS-337197 Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">Tiazofurin</figcaption>
                <img class="w-100" src="/app/img/tiazofurin.png" alt="Tiazofurin Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">CellCept®</figcaption>
                <img class="w-100" src="/app/img/ribavirine.png" alt="Ribavirine Structure" />
            </figure>
            <figure class="col-lg-4 col-6 border">
                <figcaption class="text-center">Mizoribine</figcaption>
                <img class="w-100" src="/app/img/mizoribine.png" alt="Mizoribine Structure" />
            </figure>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="referances row justify-content-center">
        <h6 class="ps-5 pt-3"><i>References (with external links to PubMed) </i><i class="novo-blue fa-solid fa-arrow-up-right-from-square"></i></h6>
        <div class="col-2">
            <img class="w-100 pt-3" src="/app/img/pubmed.png" alt="pubmed logo">
        </div>
        <div class="col-8">
            <ol>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16919497" title="Go to PubMed">L. Hedstrom and L. Gan (2006): IMP dehydrogenase: structural schizophrenia and an unusual base <em>Curr. Opin. Chem. Biol.</em> 10(5), 520-525</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/11668509" title="Go to PubMed">B. J. Barnes <em>et al.</em> (2001): Mechanism of action of the antitumor agents 6-benzoyl-3,3-disubstituted-1,5-diazabicyclo[3.1.0]hexane-2,4-diones: Potent inhibitors of human type II inosine 5'-monophosphate dehydrogenase <em>Int. J. Cancer.</em> 94(2), 275-281</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16483769" title="Go to PubMed">R. E. Beevers <em>et al.</em> (2006): Low molecular weight indole fragments as IMPDH inhibitors <em>Bioorg. Med. Chem. Lett.</em> 16(9), 2535-2538</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/17659481" title="Go to PubMed">L. Chen and K. W. Pankiewicz (2007): Recent development of IMP dehydrogenase inhibitors for the treatment of cancer <em>Curr. Opin. Drug Discov. Devel.</em> 10(4):403-12</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/11454943" title="Go to PubMed">B. J. Barnes <em>et al.</em> (2001): Induction of Tmolt4 Leukemia Cell Death by 3,3-Disubstituted-6,6-pentamethylene-1,5-diazabicyclo[3.1.0]hexane-2,4-diones: Specificity for Type II Inosine 5'-Monophosphate Dehydrogenase <em>J. Pharm. Exp. Therap.</em> 298(2), 790-796</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15380335" title="Go to PubMed">K. Malek <em>et al.</em> (2004): Effects of the IMP-dehydrogenase inhibitor, Tiazofurin, in bcr-abl positive acute myelogenous leukemia <em>Leukemia Research</em> 28, 1125-1136</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/16609701" title="Go to PubMed">L. Hong <em>et al.</em> (2006): ZNRD1 mediates resistance of gastric cancer cells to methotrexate by regulation of IMPDH2 and Bcl-2 <em>Biochem. Cell Biol.</em> 84(2): 199-206</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15670151" title="Go to PubMed">S. Peñuelas <em>et al.</em> (2005): Modulation of IMPDH2, survivin, topoisomerase I and vimentin increases sensitivity to methotrexate in HT29 human colon cancer cells <em>FEBS</em> 272, 696-710</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/10097070" title="Go to PubMed">T. D. Colby <em>et al.</em> (1999): Crystal structure of human type II inosine monophosphate dehydrogenase: implications for ligand binding and drug design <em>PNAS</em>, 96(7), 3531-3536</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/12781195" title="Go to PubMed">E. J. Iwanowicz <em>et al.</em> (2003): Inhibitors of inosine monophosphate dehydrogenase: SARs about the N-[3-Methoxy-4-(5-oxazolyl)phenyl moiety <em>Bioorg. Med. Chem. Lett.</em> 13(12), 2059-2063 </a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/12183689" title="Go to PubMed">J. Jain <em>et al.</em> (2002): Characterization of pharmacological efficacy of VX-148, a new potent immunosuppressive inosine 5'-monophosphate dehydrogenase inhibitor <em>J. Pharm. Exp. Therap.</em> 302(3), 1272-1277</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/14757177" title="Go to PubMed">J. Jain <em>et al.</em> (2004): Regulation of inosine monophosphate dehydrogenase type I and type II isoforms in human lymphocytes <em>Biochem. Pharmacol.</em> 67(4), 767-776</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/15664851" title="Go to PubMed">G. M. Buckley <em>et al.</em> (2005): Quinazolinethiones and quinazolinediones, novel inhibitors of inosine monophosphate dehydrogenase: synthesis and initial structure-activity relationships <em>Bioorg. Med. Chem. Lett.</em> 15(3), 751-754</a></li>
                <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov/pubmed/14505670" title="Go to PubMed">T. G. Murali Dhar <em>et al.</em> (2003): 3-Cyanoindole-Based Inhibitors of Inosine Monophosphate Dehydrogenase: Synthesis and Initial Structure-Activity Relationships <em>Bioorg. Med. Chem. Lett.</em> 13(20), 3557-3560</a></li>
            </ol>
        </div>
    </div>
</section>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      x�Z�n��b �
�Rl'�6��pdgc$v�Ļ7Eaɑ8�!�˃�j�O��C�I��3<�`o�u� �D���7�)������gq�O�dg�\�'�̕x�c?�1�����H�B���ş�Hd��;;ڻ�r��{�/���79g1����gQ��4�F��q.��x�-��&$,�1�_ ��@0��i%������e�3��=w�����"����Z�e��}1f��u�F���/���~~�ĵ�X�@f��i�r��t~qu�f�NNߎٛ�>\���K�

    ?3c�
    _.D��^��$�:�Z��U/��X��|i5��A=Lƾ*/+==X!<�F�X1��뿡^�l�ӡ�񵖁2�S?����<� �-���#�"��=y���I�/�Lō�!ؓ��g~:�������/�.�o>���O6a�)O�i.�D�\d�X��x����kp/�똽�q,�/�"޳��h9��`�d9�'W�qy�|ų�xD��)�r�9�<�98g�s��zQ"UX\S�T.�|4s��ǫkX�o���fݥ�ac���Y�8q�Da�N�Õw�P�ŧ܁���vmR�L?��6�{����hV9�;�fp(�f�8� /JR�8�(�y��婎�����"���X���:���0r��PjM�2�V�[d
            �w�������S,�Ν_
            �d^ց�x*��2�b�D�q������1�+�b-�H�|�K�m^OkX�AIAX�H�9��w����<'�\*����U�$�J~�NhHmm
            ��� �L*i��צ"I5�$B5k x+a��:���D� �0�z�#\�R���P�I� e��;M8;60:჌����O�q���{�+�v���/�,Yǳ���H���I���\��=JN��<-k�7O�:�@y��.ga*�H�"9uEr*cL;1��@�:C^pl1S!�G'�
            f�ަ#q����ŝ�z �E4C1q���|���~f��� ������)Ǥ g����)t�N%��*a ���/Q�Hyڽ�pI��ER�՜"J�6���ʙ_\=\���E.?v�l������jjHj�����s~��z#�p����~h�������_'����Y�JQ�-�&�]/���(�����z�@Oͫ����f�.�+˂?�t ?4�<��Ȋ�}����_����1WzY�����=��,c��D�Sʡ_�N%:��2��2A�F[�S����D�K�d{��`�O���H�R�l֜��Ntl��5 �Qg)�a�0k�z�V�u�&֢"��{]n"��b
            ��G�5
            !�;���+�Q��"\z��d�wuqv�wm�f�����D=������z*�>�+�P��ll�S��צ�5:SKT�~��F���#���E2�w�Ҝ
            +J";�~2]��K���x�\�0�b"9�x��?��ҏa#�~��̦�h��eݴ]����$ �,�>k��#���h�̣mŦ�ʄ��I�C�
            ��S��b���2O����X��5�G3�(�M�fpD��T=n��:���8k�Rt�p
            ���'�@c��b���/Y � c�#e����
            ��a�9a�w�5wm��N)���ӸYxV����[
            ��<Q���r�U�]��H� �:{;�B�!���敍n{���Q��>Ϲ*?3
                ,d��,��Y.��Zx�)����h�3�`�A��iNy�є��@�w���?�)Z<�Sz�r�^*0jzL��0��y
                    ��q�����p� �M\��&��ٲ͆�zT' uD��&�(}ҋ���h0t�W���8�*�$�q\U�wUwB�l��4���sz�8`-e'g�s>~�cv�\�0դ�.���[�|�p�����qP��n�?d�����75������0=��R�"h=j�I���-�
                    �3�3%D؂��9�w�; ��(�� 0^�ŀ3�+Qr U"1�����8 X"���P�
                    PƐ �j� �Ϙ�;�Z�!�S�VE�A=��E�8�}FD)�B�s�*:�z33f ������;��NVri���h'��Ń��F�k3|ؠ3��t�tm���@v@R��4̓�����������L��B�,Q�d@i�tI��
                    �Ҏ��V�9%�~�t��4�:�K��:�4a�v�쉼+xD��������4�|�2�3 �� ��E�p�����^m79~(u Y���H��9(��]q g8A%��S c�u��xA}��H��?������q�:`���h[��AZ�A�$v�n�� gW��h �"��AwR�}Z����~=U���s��i�մ��� &
                    ��k��y�R ���=�=���� �
                    �^+���7�L�=�@c��+#ݶN������E�/g�",�T�vc�f{gsv0��O���l�����L;?��=���� �i�ѳ ��@��}���9O�Ri_�~�������h-�����o������hT%Z�$W`,�-����$NF��˫�7y�f���N+cN�M'�M=�����
                    �⽏��6 �I�M���
                    ��L�'�f!��C8 U���I�:c�"qfw�LLZ3��w7� ��cl}�mfX̪�,�MSl��:R�ԩ���Co��;�E����ݛݏ@@ëM��ͥ���ؙ.�ᯪYӪha�nP���<>�͆K�f�i���B�T�:��V)`۟��u�|u���Ǐ�A�a
                        �Y!�U�|g����2���j�mK�C�kz�l��Ӡ�����ū&���v}�jSg����`߅&�o`�O��� �g��?����l�|�� �B�����bc�#d���=��W��o\����/���Y�*s;P���Z�7��~ˬ�>t�\�^ܼ7Y �o�:-�g�l.9�cV�h��W_ݵ7Ը)�����hC&���Qkf�����bq;���p^� @�)9�� ����X�*��2�6��!�TkQ�Ѿ:7�љ����3��*�95:߬�V��!ڎ�����d�v�ʴ�v��u���C�@��`X02��N���g!�;l��>�,X+�9(I;�H�\N�0�Oء��DXa�=�4���D��ٵ�����ca�Ba�56(��́�=���>�ul���zK���9�6'ͼh�B��ru�i�0ZM����[��/`&.6��x4�M�uG��t�#|jIj6����:ͱ*�N y�WX �1ƩWl���|ö����g؁�3��C)�y�p����T�U��,�<b���!,���Zy�0PvP��EbX�`A���׿��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             x��}Lw�U���F�YvÉ
                            �]Kkq"�ev-*CLSګ=�w��vT�tE�0��L6LE|�T�q$���2p�eA�v�+�-5��?m�|?����=�>:-�⌃!��f��h��@�
                            0��h�qs��+��Qp�wﶠ���/cm�X�@�E-�A�LW��\#�j*1��s�x�o�v���]^�k*�d�\_:�|�@ȣ
                            �fuU����}_Y�u���-�|.�<����f��߯nl��1s��[`��ey��WՋ����#&��Iw��z����=�r��� ���09J�*lWc[aV�ܮVs�^�Ҭ'�_�T�`�%U8J��*�12\/S�-Ӳ��1�M�����s,�V�t7��g��0�� �|�p�aPQ���mk֕쯚�3F˂��t8fSH�D�T�QZ�Z�����G�74�$t���?���h1������� @�(���(�Sf�m
                                M�vUP$:X�vƽH�:�8d�I��i�۱���>����s��𲥳vm�
                                =�0�P�
                                ���5��t��Hͫ��%����7�C_��Ke��{M���<km<e�(�� /c�6�ܣ�A~�䚇P���v�����|����ӏ��S���ĵ�
                                    Bc���ׄ^^ڽ).5=�����=�o�;��\�C{�ŋ(z�f]
                                    ]����7��r
                                    r�E�A�M1��盥!�_�+�z��̀(���7R� �;e �1sMMw�W�`�_V�����j��S? ��&�z���k�=/?0v^�ܲ45�%f%���
                                    ������(��( �JL����[mU�'���ٷ���c^��3C7;�-i�&c���E�'���9�)>�yuUe�G�;*�0=�#6b�Q8j ��2��Ę�����e�=,��ul�0n�.��f�#Ej�o�m�u��t�H!�B��,�5��\�x޴>�u��sҰ�5��3�RjJ���o�q�t��=���[���kv9���f��yE�Ӳ�������Huϸuʱ��q`�D �}.�q
                                    �}�w��w"�ŗ�
                                    ���FK�g�E�𰨰p`4��$)3�D��s��X�����TO~��/��r�X�*�����
                                    *�i *Y��EuT��Lf����"@�����)����^�܉n���L�tԂ�Ԇ����?�Đ�<Õ��[��6LowQ{�� �QPh�)2\��~����c09eؚڀ�)(˜��_�wn�����A��>�|�����:�4:��
                                        M9�9�Ϟ6d�V��s36B-pK�5!Z��V��kˎm�/\6�Wdv�J����`�f�Z���m_WoN���;��b �
                                        }5��[W��hJ��4��
                                        F`�j� R�()�b��gj|ɟ/��a�U�]����&^ϛ��{\�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            