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

        function BBcode($txt) {  //Conversion BBCode
            $tab = array(
            '#\[u\](.*)\[/u\]#Ui' => '<strong>$1</strong>',
            '#\[b\](.*)\[/b\]#Ui' => '<big>$1</big>',
            '#\[i\](.*)\[/i\]#Ui'   => '<em>$1</em>',
            '#\[url=(.+)\](.+)\[/url\]#Ui' => '<a href="$1">$2</a>',
            '#\[img\](.+)\[/img\]#Ui' => '<img src="$1" alt="$1"/>'
            );
            return(preg_replace(array_keys($tab) , array_values($tab) , $txt));
        }

        $req = $bdd->query('SELECT * FROM News ORDER BY datee DESC');
        $req->execute();

        while($donnees = $req->fetch()) {
          ?>
          <article>
            <h4><?php echo $donnees['title']; ?></h4>
            <i><?php echo $donnees['datee']; ?></i>
            <p><?php echo BBcode($donnees['texte']); ?></p>
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
