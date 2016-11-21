<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <title>UPBGE : a fork of the BGE</title>
   <meta name="description" content="Main page of the UPBGE project, which is a fork of the BGE." />

   <?php require ("../include/head.php"); ?>

   <link rel="stylesheet" type="text/css" href="/webroot/plugins/owl.carousel.css">
  </head>
  <body>

    <div id="headerBackground">

      <?php require ("../include/header.php"); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7">
          <h3>Last pictures</h3>
          <div id="carousel" class="owl-carousel">
            <div class="item"><img src="/webroot/images/carousel/carousel1.jpg" alt="1"></div>
            <div class="item"><img src="/webroot/images/carousel/carousel2.jpg" alt="2"></div>
            <div class="item"><img src="/webroot/images/carousel/carousel3.jpg" alt="3"></div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="row">
            <div class="col-xs-10">
              <h3>News</h3>
              <div id="newsArticles">
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
              <a href="news.php">More news >></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <h3>Credits</h3>
      	      <ul>
            		<li>Ulysse Martin (youle)</li>
            		<li>Diego Lopes (TwisterGE)</li>
            		<li>Tristan Porteries (panzergame)</li>
            		<li>Jorge Bernal (lordloki)</li>
            		<li>Pierluigi Grassi (pgi)</li>
            		<li>Lee Pugh (pqftgs)</li>
      	      </ul>
            </div>
            <div class="col-md-6 col-xs-12">
              <h3>Contact</h3>
              <h5>IRC irc.freenode.net</h5>
              <ul>
                <li>#upbgeusers</li>
                <li>#upbgecoders</li>
              </ul>
              <h5>MAIL</h5>
              <ul>
                <li><a href="MAILTO:tristan@upbge.org">tristan@upbge.org</a></li>
                <li><a href="MAILTO:alexis.gros99@gmail.com">alexis.gros99@gmail.com</a></li>
                <li><a href="MAILTO:thibaut@upbge.org">thibaut@upbge.org</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <blockquote>
          <p>« UPBGE is a fork of the Blender Game Engine which wants to improve features and fix bugs. »</p>
        </blockquote>
      </div>
    </div>
    </div>

    <div class="container" id="main">
      <section>
        <div class="row">
          <h2>Our websites</h2>
        </div>
        <div class="row">
          <nav id="websites">
            <table class="col-xs-12">
  						<thead>
  							<tr>
  								<th><a href="https://download.upbge.org"><img src="webroot/images/download.png" alt="UPBGE Download" class="websitesImg" /></a></th>
  								<th><a href="https://doc.upbge.org"><img src="webroot/images/doc.png" alt="UPBGE Documentation" class="websitesImg" /></a></th>
  								<th><a href="https://github.com/UPBGE/blender"><img src="webroot/images/git.png" alt="UPBGE Github" class="websitesImg" /></a></th>
  								<th><a href="https://doxygen.upbge.org"><img src="webroot/images/doxygen.png" alt="UPBGE Doxygen" class="websitesImg" /></a></th>
  								<th><a href="https://pythonapi.upbge.org"><img src="webroot/images/pythonAPI.png" alt="UPBGE PyhonAPI" class="websitesImg" /></a></th>
  							</tr>
  						</thead>
  						<tbody>
  							<tr>
  								<td>UPBGE DOWNLOAD</td>
  								<td>UPBGE DOCUMENTATION</td>
  								<td>UPBGE GITHUB</td>
  								<td>UPBGE DOXYGEN</td>
  								<td>UPBGE PYTHONAPI</td>
  							</tr>
  							<tr>
  								<td>Select your OS and let's start !</td>
  								<td>Take a look on releases notes and known bugs.</td>
  								<td>Our Git repository <br />(Gitweb interface : <a href="https://git.upbge.org">here</a>).</td>
  								<td>The C++ Documentation, made by doxygen.</td>
  								<td>The python API documentation.</td>
  							</tr>
  						</tbody>
  					</table>
          </nav>
        </div>
      </section>

  		<div class="row">
        <h2>About the project</h2>
      </div>

			<section>
        <div class="row">
  				<h3>Why we have forked the BGE ?</h3>
        </div>
        <div class="row">
  				<p>We think that a forked and up to date version of the BGE is necessary to improve the engine and make it more competitive with the other game engines, and at least free engines like ogre and crystalspace. Thanks to a shorter developement cycles we can accept the last patchs in a more dynamic behaviour.
 We want to give more freedom to active developers to take the essentials modifications that the BGE need.
  				</p>
        </div>
			</section>

			<section>
        <div class="row">
  				<h3>Our goals</h3>
        </div>
        <div class="row">
  				<p>With this fork, we purpose an other development cycle which is spread on one month :</p>
        </div>
          <br />
        <div class="row">
          <table id="tableCycle">
            <caption>Our development cycle</caption>
            <tr>
              <th class="right"><div id="meterCycleFeatures"></div></th>
              <th class="left"><div id="meterCycleBugs"></div></th>
            </tr>
            <tr>
              <td><span id="meterCycleFeaturesText">3 weeks</span> to add features</td>
              <td><span id="meterCycleBugsText">1 week</span> to correct bugs</td>
            </tr>
          </table>
        </div>
			</section>

      <section>
        <div class="row">
          <h3>The review rules</h3>
        </div>
        <div class="row">
				  <p>To reach this speed, we want to make reviews more efficiently with these rules :</p>
        </div>
        <div class="row">
  				<ul>
  					<li>Each review delay must not take more than one week ;</li>
  					<li>If a developer reject a patch and that he doesn't reply after the limited time of the rewiew, an other can take his seat and continue the review ;</li>
  					<li>If the author of the patch is not longer active after a first reject during more than the limited review time, the patch will be considerated like archived until reopening.</li>
  			  </ul>
        </div>
			</section>

			<section>
        <div class="row">
				  <h3>About the compatibility :</h3>
        </div>
        <div class="row">
          <p>Compatibility is limited to 2 versions. All problems in relation with compatibility must be well documented.</p>
        </div>
			</section>

			<section>
        <div class="row">
				  <h3>The code's style :</h3>
        </div>
        <div class="row">
				  <p>We have in our website a reviewed version of the blender code style which add some precisions about C++ specificities.</p>
        </div>
			</section>

      <section>
        <div class="row">
				  <h3>The patches :</h3>
        </div>
        <div class="row">
				  <p>Patchs must be smalls : one goal, one modification, and we encourage you to make branch as much as possible. No cleaning of features in the same patch.<br />
				  After five successful patches, the author developers can obtain commits rights.</p>
        </div>
			</section>
		</div>

    <?php require ("../include/footer.php"); ?>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>

    <script src="/webroot/plugins/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#carousel").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            items : 1,
            itemsDesktop : false,
            itemsDesktopSmall : false,
            itemsTablet: false,
            itemsMobile : false,
            loop:true,
            dots: true,
      	    autoplay: true,
      	    autoplayTimeout: 4000
        });
      });
    </script>
  </body>
</html>
