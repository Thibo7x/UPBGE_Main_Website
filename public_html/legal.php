<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <title>UPBGE - Legal notices</title>
   <meta name="description" content="Legal notices of the websites of the UPBGE Domain" />

   <?php require ("../include/head.php"); ?>
  </head>
  <body>

    <?php require ("../include/header.php"); ?>

    <div class="container" id="legalMain">
      <div class="row">
        <h1>Legal notices</h1>
        <h3>Webmaster</h3>
        <p>MANCEAU Thibaut<br />
        Contact : thibaut@upbge.org<br />
        <a href="https://photonshuttle.space">https://photonshuttle.space</a></p>

        <h3>Hosting provider</h3>
        <p>OVH<br />
        2 rue Kellermann<br />
        59100 Roubaix<br />
        France<br />
        <a href="https://ovh.com">https://ovh.com</a></p>

        <h3>Policy privacy</h3>
        <p>To have an overview of the number of people who visit the domain, we use the open-source <a href="https://piwik.org/">Piwik Analytics Platform</a>.<br />
        The server who treat the informations is hosted on the same server as the websites, and the informations are anonymized like this scheme : 42.42.42.42 => 42.42.x.x<br />
        The informations collected are :
        <ul>
          <li>Your ip (anonymized)</li>
          <li>Your country</li>
          <li>The pages visited</li>
          <li>The time spend on each page</li>
        </ul>
        If this collect embarrass you, you can activate the "Do Not Track" option in your browser. You can also install any ad blocker.<br />
        Finally, you can click here to block the collect (you have to accept cookies) :<br />
        <iframe style="border: 0; height: 200px; width: 600px;" src="https://piwik.upbge.org/index.php?module=CoreAdminHome&action=optOut&language=en"></iframe>

        <h3>Source code</h3>
        <p>The source code of this website is published under GPLv3 licence (<a href="https://github.com/Thibo7x/UPBGE_Main_Website">here</a>).</p>
      </div>
        <br />
      <div class="row">
        <a href="https://upbge.org">Go back to the main page</a>
      </div>
    </div>

    <?php require ("../include/footer.php"); ?>
  </body>
</html>
