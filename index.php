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
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <script src="js/jquery-2.2.1.min.js"></script>
  <script src="js/question_rotator.js"></script>
  <script src="js/evaluate_user.js"></script>
  <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
  <title>Pension poll</title>
</head>
<body>

<!-- POPUP -->

<div style="display:none">
  <div id="data">
    <h1>Your are interested in:</h1>
    <div id="Category1" class="category-row easy-hidden">This is none</div>
    <div id="Category2" class="category-row easy-hidden">
      <img src="img/logos/logo_1.png" alt="">
      <div>
        <header>Pension</header>
        <span>The pension is interesting to you</span>
      </div>
    </div>
    <div id="Category3" class="category-row easy-hidden">
      <img src="img/logos/logo_2.png" alt="">
      <div>
        <header>Driving licence</header>
        <span>You are interested the cars</span>
      </div>
    </div>
    <div id="Category4" class="category-row easy-hidden">
      <img src="img/logos/logo_3.png" alt="">
      <div>
        <header>House</header>
        <span>You are interested new house</span>
      </div>
    </div>
    <div id="Category5" class="category-row easy-hidden">
      <img src="img/logos/logo_4.png" alt="">
      <div>
        <header>Wedding</header>
        <span>You are interested marriage</span>
      </div>
    </div>
    <div id="Category6" class="category-row easy-hidden">
      <img src="img/logos/logo_5.png" alt="">
      <div>
        <header>Children</header>
        <span>You want to bring children</span>
      </div>
    </div>
    <div id="Category7" class="category-row easy-hidden">
      <img src="img/logos/logo_6.png" alt="">
      <div>
        <header>Travel</header>
        <span>You are interested travel</span>
      </div>
    </div>
  </div>
</div>

<!-- /POPUP -->

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
            <a class="btn btn-danger fancybox" href="#data"><span class="glyphicon glyphicon-align-justify"></span></a>
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
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>



<div class="container">
  <div class="pagination-centered">
    <div id="QuestionNumbers">
      <span class="red">0</span>
      <?php
        render_question_numbers();
      ?>
      <span>e</span>
    </div>
  </div>
                  
  <form id="QuestionForm" class="questions" action="app/evaluate_test.php" method="POST">
    <div id="Question0" class="question-card intro">
      <table>
        <tr>
          <th valign="middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio commodi deserunt, dolorum doloribus porro qui expedita cupiditate, sequi voluptates nostrum temporibus cum error. Numquam aperiam labore ut illo fugiat distinctio.</th>
        </tr>
      </table>

      <br>

      <div>
        <table>
          <tr>
            <td><img src="img/questions/opt-0.png" alt="opt-0"></td>
            <td class="btn-start-test" onclick="nextQuestion()">Jetzt starten <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></td>
          </tr>
        </table>
      </div>
    </div>

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


<script type="text/javascript">

  function setQuestionFormMode(mode) {
    var form = document.getElementById('QuestionForm');
    if ( mode == 'pdf' ) {
      form.setAttribute('action', 'app/functions/post_create_pdf.php');
    }
  }
</script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script>



</body>

</html>
