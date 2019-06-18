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
              <a class="pt-trigger" href="blog-post-1.php" data-animation="61" data-goto="4">Projet</a>
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

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page pt-page-1 section-with-bg section-paddings-0" style="background-image: url(images/background.jpg);" data-id="home">
              <div class="home-page-block-bg">
                <div class="mask"></div>
              </div>
              <div class="home-page-block">
                <div class="v-align">
                  <h2>Mathieu Raynaud</h2>
                  <div id="rotate" class="text-rotate">
                    <div>
                      <p class="home-page-description">Developer WEB</p>
                    </div>
                    <div>
                      <p class="home-page-description">Pilote de karting</p>
                    </div>
                    <div>
                      <p class="home-page-description">Etudiant</p>
                    </div>
                  </div>

                  <div class="block end" style="text-align: center">
                    <ul class="info-list">
                      <li><span class="title">Age</span>
                        <span class="value">
                            <?php $resultat = $age->fetch(); echo $resultat['age']; ?>
                        </span>
                    </li>
                      <li><span class="title">Ville</span>
                        <span class="value">
                            <?php $resultat = $ville->fetch(); echo $resultat['ville']; ?>
                        </span>
                    </li>
                      <li><span class="title">E-mail</span>
                        <span class="value">
                            <?php $resultat = $email->fetch(); echo $resultat['email']; ?>
                        </span>
                    </li>
                      <li><span class="title">Téléphone</span>
                        <span class="value">
                            <?php $resultat = $tel->fetch(); echo $resultat['tel']; ?>
                        </span>
                    </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- About Me Subpage -->
            <section class="pt-page pt-page-2" data-id="about_me">
              <div class="section-title-block">
                <h2 class="section-title">Qui suis-je ?</h2>
                <h5 class="section-description">Etudiant, Developer, Sportif</h5>
              </div>

              <div class="row">
                
                  <div class="general-info">
                    <h3>Bonjour, je suis étudiant au campus YNOV à Bordeaux</h3>
                    <p>Originaire d'une petite ville proche d’Angoulême, je vis actuellement à Bordeaux pour y effectuer mes études dans le campus Ynov.</p>
                    <p>Je suis une formation d’informatique sur une durée de 5 ans. il s'agit d'un bachelor.</p>
                    <p>A partir de septembre 2019 je continuerais mes études dans le campus ynov de Nantes</p>
                  </div>
                
              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/web_design.png" alt="Responsive Design">
                      <h4>Developpement WEB</h4>
                      <p>Developpement de vos sites WEB (e-commerce, site vitrine), avec ou sans interface d'administration.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/copywrite.png" alt="Copywriter">
                      <h4>Wordpress / PrestaShop</h4>
                      <p>Developper Wordpress ou prestashop pour vos sites de e-commerce.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/management.png" alt="E-Commerce">
                      <h4>Réparation d'ordinateur</h4>
                      <p>En cas de panne de vos ordinateurs, n'hésitez pas à me contacter via le formulaire de connexion.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/web_design.png" alt="Management">
                      <h4>Web design</h4>
                      <p>Possibilité de vous faire le design de votre site ainsi que l'érgonomie.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Services block -->

              <!-- Clients block -->
              <div class="block-title">
                <h3>Quelques clients</h3>
              </div>
              
              <div class="row">
              <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/clients/handicap.jpg" alt="image">
                        <a href="https://handicapautonome.fr" target="_blank"><h4>handicap autonome</h4></a>
                        <p>Le site handicap autonome est un site d'une association pour personne à mobilité reduite</p>
                      </div>
                    </div>
                  </div>

              <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/clients/camion.png" alt="image"><br/><br/>
                        <a href="https://lacuisinedepauline.fr" target="_blank"><h4>la cuisine de pauline</h4></a>
                        <p>Le site la cuisine de pauline est le site d'une entreprise de traiteur livreur</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/clients/osteopath.png" alt="image">
                        <a href="https://emelinepichonosteopathe.com" target="_blank"><h4>Emeline pichon</h4></a>
                        <p>Le site emelinepichonosteopathe est le site d'une osteopath proche d'd’Angoulême</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="images/clients/volteo.jpg" alt="image">
                        <a href="https://batteries-service.fr" target="_blank"><h4>Volteo batteries service</h4></a>
                        <p>Le site batteries-service.fr est un site vitre d'une entreprise de batterie</p>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- End of Clients block -->
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-3" data-id="resume">
              <div class="section-title-block">
                <h2 class="section-title">Mon CV</h2>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Mes études</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Depuis septembre 2018</h5>
                      <h4 class="event-name">bachelor Informatique</h4>
                      <span class="event-description">Ynov Campus</span>
                      <p>Ce bachelor permet de devenir un professionnel dans le milieu de l'informatique ( développement, infra structure réseau, ... )</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2017 - 2018</h5>
                      <h4 class="event-name">BTS SIO</h4>
                      <span class="event-description">Elie Vinet</span>
                      <p>J'ai suivi une première année de BTS SIO au lycée  Élie Vinet, mais cela ne me plaisait pas, donc je suis parti par la suite au campus ynov</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2014 - 2017</h5>
                      <h4 class="event-name">Bac Pro SEN</h4>
                      <span class="event-description">Charles Augustin Coulomb</span>
                      <p>Bac professionnel en 3 ans touchant à plusieurs domaines de l'électronique ( Informatique, électronique, vidéosurveillance,, ...)</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2014 - 2016</h5>
                      <h4 class="event-name">BEP SEN</h4>
                      <span class="event-description">Charles Augustin Coulomb</span>
                      <p>Bac professionnel en 3 ans touchant à plusieurs domaines de l'électronique ( Informatique, électronique, vidéosurveillance,, ...)</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Experiences professionnelles</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2018 - 2019</h5>
                      <h4 class="event-name">développement de plusieurs site Web</h4>
                      <p>Durant ces deux années j'ai pu développer pas mal de site web comme le site WWW.handicapautonome.fr, ou encore WWW.lacuisinedepauline.fr, et d'autre encore</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Janvier - Juin 2019</h5>
                      <h4 class="event-name">Informatique</h4>
                      <span class="event-description">Voltéo développement</span>
                      <p>Mise en place d'un système de partage de document, et la création d'un nouvel extranet interne</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Juillet - aout 2018 </h5>
                      <h4 class="event-name">Agent de raynon</h4>
                      <span class="event-description">Leclerc</span>
                      <p>Mise en rayon de produit alimentaire, et réception de commande magasin</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Juillet 2017 </h5>
                      <h4 class="event-name">Aide aux différentes taches</h4>
                      <span class="event-description">Voltéo Batteries Service</span>
                      <p>Réception et préparation de commandes et mise en rayon et divers petits travaux</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Stages </h5>
                      <p>Pour voir mes différents stages, n'hésitez pas à télécharger mon CV</p></p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Informatique</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Developpement logiciel</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div>

                    <h4>Réseau informatique</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-2"></div>
                    </div>

                    <h4>Linux</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div> 
                  </div>

                  <div class="block-title">
                    <h3>Compétences en développement</h3>
                  </div>
                  <div class="skills-info">
                    <h4>HML5</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>CSS3</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div>

                    <h4>jQuery</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>Wordpress</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>PHP</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="download-cv-block">
                    <a class="button" target="_blank" href="CV_Mathieu_Raynaud.docx">Mon CV</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page pt-page-6" data-id="contact">
              <div class="section-title-block">
                <h2 class="section-title">Contact</h2>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Besoin d'aide ? Un site en projet ?</h3>
                  </div>
                    <p>N'hésitez pas à me contacter via le formulaire suivant </p>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Bordeaux, FRA</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5>mathieu.raynaud@ynov.com</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-call"></i>
                    </div>
                    <div class="ci-text">
                      <h5>06 18 50 52 16</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Freelance</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Pour me contacter </h3>
                  </div>
                  <form id="contact-form" method="post" action="contact_form/contact_form.php">

                    <div class="messages"></div>

                    <div class="controls">
                      <div class="form-group">
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Veuillez entrer un nom." required="required" data-error="Veuillez entrer un nom.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-user"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Veuillez entrer une adresse mail valide." required="required" data-error="Veuillez entrer une adresse mail valide.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-envelope"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <textarea id="form_message" name="message" class="form-control" placeholder="Ecrivez votre message." rows="4" required="required" data-error="Ecrivez voptre message."></textarea>
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-comment"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-callback="correctCaptcha"></div>

                      <input type="submit" class="button btn-send" value="Send message">
                    </div>
                  </form>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

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
