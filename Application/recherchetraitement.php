<!DOCTYPE html>
<html>
     <head>
	  <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>representant</title>  
     <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 		 
	 </head>
     <body>
	  <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">HOME</a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="service.html">service</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>traitement</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	   <section class="contact spad">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
  
  
<?php
// Connexion à MySQL
@mysql_connect("localhost", "root", "");
// Sélection de la base test
$tre=$_POST['libelle'];
@mysql_select_db("hopital");
$reponse = @mysql_query("SELECT  traitement_medico.ID_trai, libelle, type_trait, degres_complexiter, employer.CIN_emp, ID_Labo, ID_pharm, Code_metier, Nom_complet  FROM traitement_medico,employer,faire where faire.ID_trai=traitement_medico.ID_trai and faire.CIN_emp=employer.CIN_emp and traitement_medico.libelle='$tre'"); // Requête SQL
// On fait une boucle pour lister tout ce que contient la table :
echo"<table border=1px align=center style=\"color:white;width:50%;height:50%;border:5px outset #34495E\">";
echo"<tr>";
echo"<th>ID_trai</th>";
echo"<th>libelle</th>";
echo"<th>type_trait</th>";
echo"<th>degres_complexiter</th>";
echo"<th>CIN_emp</th>";
echo"<th>ID_Labo</th>";
echo"<th>ID_pharm</th>";
echo"<th>Code_metier</th>";
echo"<th>Nom_complet</th>";
echo"</tr>"; 

WHILE ($donnees = @mysql_fetch_array($reponse) )
{
?>
<tr>
<th><?php echo $donnees['ID_trai']; ?> </th>
 <th><?php echo $donnees['libelle']; ?> </th>
<th><?php echo $donnees['type_trait']; ?></th>
<th><?php echo $donnees['degres_complexiter']; ?> </th>
<th><?php echo $donnees['CIN_emp']; ?> </th>
 <th><?php echo $donnees['ID_Labo']; ?> </th>
<th><?php echo $donnees['ID_pharm']; ?></th>
<th><?php echo $donnees['Code_metier']; ?> </th>
<th><?php echo $donnees['Nom_complet']; ?> </th>
<tr>
<?php
}
@mysql_close(); // Déconnexion de MySQL
?>
     
</table>
	
	</div>

                </div>
            </div>
        </div>
	<?php
// Connexion à MySQL
@mysql_connect("localhost", "root", "");
// Sélection de la base test
$tre=$_POST['libelle'];
@mysql_select_db("hopital");
$reponse = @mysql_query("SELECT COUNT(CIN) FROM patient;"); // Requête SQL
// On fait une boucle pour lister tout ce que contient la table :
echo"<table border=1px align=center style=\"color:white;width:50%;height:50%;border:5px outset #34495E\">";
echo"<tr>";
echo"<th>nombre de patient</th>";
echo"<th>nombre de lit</th>";
echo"</tr>"; 

$donnees = @mysql_fetch_array($reponse);

?>
<tr>
<th><?php echo $donnees[0]; ?> </th>
<th><?php echo"120"; ?> </th>
<tr>
<?php

@mysql_close(); // Déconnexion de MySQL
?>   
</table>	
	<div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li><a href="ajoutpatient.html">Rendre comme patient</a></li>
                                <li><a href="ajoutsortir.html">Faire un trensfaire</a></li>
                            </ul>
                        </nav>
                       
                    </div>
                </div
    </section>
	
	
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer__option__item">
                            <h5>About us</h5>
                            <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                                production company specializing.</p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer__option__item">
                            <h5>Who we are</h5>
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	
	</body>
	</html>
	