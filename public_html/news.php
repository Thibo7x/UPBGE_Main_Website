<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <title>UPBGE - News</title>
   <meta name="description" content="News about UPBGE" />

   <?php require ("../include/head.php"); ?>
  </head>
  <body>

    <?php require ("../include/header.php"); ?>

    <div class="container">
      <div class="row">
        <div id="newsMain">
        <?php

        require ("../controler/connexionDB.php");

        $req = $bdd->query('SELECT * FROM News ORDER BY datee DESC');
        $req->execute();

        while($donnees = $req->fetch()) {
          ?>
          <article>
            <h4><?php echo $donnees['title']; ?></h4>
            <i><?php echo $donnees['datee']; ?></i>
            <p><?php echo $donnees['texte']; ?></p>
          </article>
          <?php
        }

        $req->closeCursor();

        ?>
        </div>
      </div>
    </div>

    <?php require ("../include/footer.php"); ?>
  </body>
</html>
