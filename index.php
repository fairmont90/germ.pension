<?php 

require_once 'app/bootstrap.php';
require_once 'app/pension_poll.php';

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/question_rotator.js"></script>
  <title>fdfdf</title>
</head>
<body>
  <div class="navbar-collapse collapse menu" style="height:90px !important">

        <?php if ( !isset($_SESSION['id']) ) { ?>

        <form name="login" class="navbar-form navbar login-form" role="form" action="login.php" method="POST">
          <img src="img/name.jpg">
            <div class="form-group">
             

              <input placeholder="Anmeldename" name="login" class="form-control" type="text">
            </div>
            <div class="form-group">
              <input placeholder="PIN" class="form-control" name="password" type="password">
            </div>
            <button type="submit" class="btn btn-success btn-login"><span class="glyphicon glyphicon-play-circle"></span> </button>
        </form>

        <?php }
          else {
        ?>

        <div class="navbar-form navbar login-form">
          <a href="exit.php" class="btn btn-danger">Exit</a>
        </div>

        <?php } ?>

          <form name="search" class="search-field">
              <input  class="form-control" placeholder="Was suchen Sie?" type="text">
          </form>

          </div>

          <div class="img-container">
          <img src="img/famale.jpg" class="img-logo">
          <div class="text-logo"><h1><b>Vorsorgen <br> ist einfach.</b></h1> <h3>Individuell beraten mit Lebensprofil.</h3></div>
          <div class="btn-group-vertical menu-option">
            <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-align-justify"></span></button>
         </div>
          <div class="btn-group-vertical menu-contact">
            <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-earphone"></span></button>
            <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-comment"></span></button>
            <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-envelope"></span></button>
         </div>
       </div>

    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navigation">
            <li><a href="#">Uberblick</a></li>
            <li><a href="#">Detalis</a></li>
            <!-- <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown"> -->
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>



<div class="container">
  <form class="questions">
    <?php 
      render_questions();
     ?>
  </form>
</div>

<!-- <div class="panel panel-default">
 <div class="panel-footer">Ïîäâàë</div>
</div> -->




<div>
 
    <div class="footer-margin "></div>

    <div class="footer">

    	<div class="container">
				<div class="row">
    		<div class="col-md-3">
    			<a class="podvalStyleBig" href="https://www.google.com/"><b>Rund ums Konto</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Girokonto</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Kreditkarte</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Tagesgeld</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Dispositionskredit</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Online-Banking</b></a>
    		</div>

    		<div class="col-md-3">

    			<a class="podvalStyleBig" href="https://www.google.com/"><b>Sparen und Anlegen</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassenbuch</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Festgeld</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Pramiensparen Flexibel</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-PS-Lotterie-Sparen</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>LBS-Bausparen</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Deka-BasisAnlage</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-RiesterRente</b></a>

    		</div>

    		<div class="col-md-3">
    			<a class="podvalStyleBig" href="https://www.google.com/"><b>Finanzieren</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Baufinanzierung</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Privatkredit</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sparkassen-Autokredit</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>SparkassenCard Plus</b></a>

    		</div>

    		<div class="col-md-3">
    			<a class="podvalStyleBig" href="https://www.google.com/"><b>Services</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>SEPA</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Sicherheit im Internet</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Elektronisches Postfach</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Handy aufladen</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Kartenveriust</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Freistellungsauftrag</b></a>

		   		<a class="podvalStyleSmall" href="https://www.google.com/"><b>Filiale finden</b></a>

    		</div>
    		</div>

    		<div class="footerContact">

		   		<a href="https://www.google.com/"><b>AGB</b></a>

		   		<a href="https://www.google.com/"><b>Datenschutz</b></a>


		   		<a href="https://www.google.com/"><b>Impressum</b></a>

		   		<a href="https://www.google.com/"><b>Preise und Hinweise</b></a>

		   		<a href="https://www.google.com/"><b>Kontakt</b></a>
    		</div>

	   	</div>

    </div>
 
</div>






</body>

</html>