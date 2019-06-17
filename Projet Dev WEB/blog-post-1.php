<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Mathieu Raynaud - YNOV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sunshine - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/transition-animations.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php
      require('database.php')
    ?>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="my-photo">
            <video width="200" height="200" autoplay loop muted>
                <source src="images/profil.mp4" type='video/mp4'/>
            </video>
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">Mathieu Raynaud</h1>
          <p class="site-description">Etudiant YNOV / Developper WEB</p>
        </div>

        <!-- Navigation & Social buttons -->
        <div class="site-nav">
          <!-- Main menu -->
          <ul id="nav" class="site-main-menu">
            <!-- About Me Subpage link -->
            <li>
              <a class="pt-trigger" href="#home" data-animation="58" data-goto="1">Accueil</a><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
            </li>
            <!-- /About Me Subpage link -->
            <!-- About Me Subpage link -->
            <li>
              <a class="pt-trigger" href="#about_me" data-animation="59" data-goto="2">Qui suis-je ?</a>
            </li>
            <!-- /About Me Subpage link -->
            <li>
              <a class="pt-trigger" href="#resume" data-animation="60" data-goto="3">Mon CV</a>
            </li>
            <li>
              <a class="pt-trigger" href="#portfolio" data-animation="61" data-goto="4">Me contacter</a>
            </li>
            
          </ul>
          <!-- /Main menu -->

          <!-- Social buttons -->
          <ul class="social-links">
            <li><a class="tip social-button" href="https://twitter.com/RaynaudMathieu1" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
            <li><a class="tip social-button" href="https://www.facebook.com/MathieuRaynaud10" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          </ul>
          <!-- /Social buttons -->
        </div>
        <!-- Navigation & Social buttons -->
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title"><?php $resultat = $prenom->fetch(); echo $resultat['prenom']; ?><?php $resultat = $nom->fetch(); echo $resultat['nom']; ?></div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <div id="main" class="site-main">
        <div class="page-wrapper">
          <a class="blog-back-button" href="index.php"><i class="fa fa-angle-left"></i></a>

          <div class="blog-post-main-image">
            <img class="post-image img-responsive" src="images/cuisine.png" alt="blog-post-1" />
          </div>

          <div class="blog-post-content">
            <h1>Le site de la cuisine de pauline</h1>
            <ul class="tags">
                <li><a>HTML5</a></li>
                <li><a>CSS3</a></li>
                <li><a>jQuery</a></li>
                <li><a>PHP</a></li>
                <li><a>MySQL</a></li>
            </ul>
            <p class="lead">L’entreprise  " La Cuisine de Pauline " m’a contacté pour la création de son site Web, cette entreprise voulait un site vitrine pour y afficher ses tarifs, ses réalisations, un formulaire de contact et présenter son activité.</p>

            <p>l'enjeux de ce projet été de faire un site pour que cette entreprise puisse y afficher son actualité, ses tarifs et une petite présentation, l'entreprise voulait un site qu'elle pouvait administrer elle même, c'est pour cela que j'ai décidé de lui stockés ses données
              dans une base de données MySql, et ensuite qui sont affichés sur le site, l'entreprise voulait aussi que son site soit administrable, donc pour cela je lui ai fait une interface où elle peut ajouter, modifier, et lire le contenu de son site.
            </p>

            
    <!-- /Single Post page -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/page-transition.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
