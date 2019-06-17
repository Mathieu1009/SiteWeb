<html>
  <head>
    <title>Coucou</title>
  </head>
  <body>
    <?php
        include 'functions.php';
        $user = readUsers('3');
        echo $user['nom'];
    ?>
  </body>
</html>