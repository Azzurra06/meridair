
<?php require_once("fonctions/requete.php"); 
    $jour_json = date("Y-m-d");
?> 


<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once ("head.php"); ?>
    <title>Accueil</title>
</head>


<body>

    <!--header start-->
    <header>

        <div>
            <img src="img/meridair.png" alt="Mérid'Air" id="logo">
        </div>
        
    </header>
    <!--header end-->


    <!--main content start-->

    <main>    

<!-- SECTION 1 : TOULON IQA -->
    <section id="section1" class="widget"> 

        <!-- ligne pour les infos IQA -->
        <div id="iqa" class="test">

            <div> <!-- bloc 1 -->
                <p style="font-size:14px; font-weight:400; opacity:0.8;">Toulon, France</p>
                <?php 
                    echo "<p style='font-size:30px; font-weight:600;'>".$tab[83137]['valeurs'][$jour_json]['indice']['qualificatif'].'</p>' ; 
                ?>
                <p style="font-size:14px; font-weight:400; opacity:0.5;"><?php echo date ('d/m/Y'); ?></p>
            </div>

            <div> <!-- bloc 2 -->
                <p>IQA : </p>
                <?php 
                    echo "<p style='font-size:50px; font-weight:500;'>".$tab[83137]['valeurs'][$jour_json]['indice']['valeur'].'</p>' ; 
                ?>
            </div>

        </div>
        
        <!-- ligne pour les prévisions journalières -->
        <div id="previsions" class="test"> 

            <div> <!-- bloc 1 -->
                <h3>PREVISIONS</h3>
                <p style="font-size:14px; font-weight:400; opacity:0.5;">Moyenne journalière</p>
            </div>

            <div id="bloc2_previsions"> <!-- bloc 2 -->
                <div class="jour_previsions">
                    <?php 
                    $jour = date('D'); // Notre date par defaut
                    echo ($jour);
                    
                    echo"<img src='".$tab[83137]['valeurs'][$jour_json]['indice']['image']."' alt='point' style='width:30px;'>"
                    ?>
                </div>
                <div class="jour_previsions">
                    <?php echo date('D', strtotime($jour. ' + 1 days')); // On ajoute 1 jour
                    $jour_json_plus1 = date('Y-m-d', strtotime($jour_json. ' + 1 days'));
                    echo"<img src='".$tab[83137]['valeurs'][$jour_json_plus1]['indice']['image']."' alt='point' style='width:30px;'>";
                    ?>
                </div>
                <div class="jour_previsions">
                    <?php echo date('D', strtotime($jour. ' + 2 days')); // On ajoute 2 jour
                    $jour_json_plus2 = date('Y-m-d', strtotime($jour_json. ' + 2 days'));
                    echo"<img src='".$tab[83137]['valeurs'][$jour_json_plus2]['indice']['image']."' alt='point' style='width:30px;'>";
                    ?>             
                </div>
            </div>

        </div>
    </section>


<!-- SECTION 2 (L'air dans ma commune + L'air en région PACA) -->
    <section id="section2">

        <div id="air_en_region" class="widget">

            <div style="margin-bottom:20px;">
                <h2>Qu'est-ce qu'un IQA ?</h2>
            </div>

            <div>
                <video width="400" controls>
                    <source src="https://youtu.be/GLPg01rHUr0" type=video/mp4>
                </video>
            </div>

        </div>
    </section>


<!-- SECTION 3 (Les derniers articles) -->
    <section id="section3">
        <div>
            <h2 style="text-align:start!important;">Les derniers articles</h2>
        </div>

        <section id="articles">
            <section id="article1" class="widget">
                <div>
                    <img src="img/article.jpeg">
                    <h4>Les principaux polluants</h4>
                    <a href="article1.php">En savoir plus ></a>
                </div>
            </section>

            <section id="article2" class="widget">
                <div>
                    <img src="img/conseils_pollution1.jpeg">
                    <h4>5 conseils en cas de forte pollution</h4>
                    <a href="article2.php">En savoir plus ></a>
                </div>
            </section>

            <section id="article3" class="widget">
                <div>
                    <img src="img/iqa.jpeg">
                    <h4>Comprendre l'indice de qualité de l'air</h4>
                    <a href="article3.php">En savoir plus ></a>
                </div>
            </section>
        </section>    
        
    </section>



    </main> 
    

    <!--main content end-->


    <!--footer start-->
    <footer>
        <?php require_once ("footer.php"); ?>
    </footer>
    <!--footer end-->

</section>


</body>


</html>


                

