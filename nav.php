<!doctype html>
<html lang="fr">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cabinet watel EURL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site web du cabinet Watel">
        <meta name="author" content="Hibon Francois">

        <!-- CSS -->
        <?php include('import_css.php'); ?>

    </head>
    <body>
        
        <link rel="shortcut icon" href="assets/ico/favicon.ico">

        <!-- Header -->

        <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand wow fadeInDownBig" href="index.php"><img src="assets/img/slider/Office.png" width="150" alt="Office"></a>      
                </div>

                <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a href="index.php">Accueil</a>
                        </li>
                        <li>
                            <a href="entreprise.php">Entreprise</a>
                        </li>
                        <li>
                            <a href="expert.php">Tournée des experts</a>
                        </li>
                        <li>
                            <a href="partenaires.php">Nos partenaires</a>
                        </li>
                        <li>
                            <a href="contact.php"><span>Contact</span></a>
                        </li>
                    </ul>         
                </div>
            </div>
        </nav>

        <!-- End Header -->

        <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                var url = window.location.href;
                $('.nav a[href="'+url+'"]').parent().addClass('active');
            });
        </script>