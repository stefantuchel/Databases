<?php
session_start();
$_SESSION["prenume"]=$_POST["prenume"];
$_SESSION["nume"]=$_POST["nume"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["subiect"]=$_POST["subiect"];
$_SESSION["mesaj"]=$_POST["mesaj"];
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
		<title>Mannschaft Omlette</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">
        <div id="page-wrapper">
            <article id="main">
                <section class="wrapper style4">
                    <div class="inner">
                        <form method="post" action="mesaj.php">
                            <div class="col-12">
                                <h3>Introduceți numărul de telefon<br/> la care putem să vă contactăm:</h3>
                                <input type="text" name="telefon" value="" placeholder="Telephone number" /><br/>
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" class="primary" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </section>
            </article>
        </div>
    </body>
</html>