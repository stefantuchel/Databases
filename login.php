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
							<div class="align-center">
                                                            <?php

$user = '111';
$pass = '222';

$captcha=$_POST['captcha'];//required
$correctsum=$_POST['correctsum'];//required
$error_message="";

if ((isset($_POST['username'])) && (isset($_POST['password'])) && (isset($_POST['captcha']))) {
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass) && ($_POST['captcha'] == $_POST['correctsum'])) {?>
                                                            <h2>Hurray, I'm in!</h2>
                                                            <?php
        if (isset($_POST['rememberMe'])) {
            setcookie('username', $_POST['username'], time() + 60 * 60 * 24 * 365);
            setcookie('password', md5($_POST['password']), time() + 60 * 60 * 24 * 365);?>
                                                            <h4>Remember me cookie set!</h4>
                                                            <?php
                                                            } else {
            setcookie('username', $_POST['username'], false);
            setcookie('password', md5($_POST['password']), false);?>
                                                            <h4>Remember me cookie not set!</h4>
                                                            <?php } ?>
                                                            <br/>
                                                            <a href="meniu_adm.php" class="button">Administrare bază de date</a><br/><br/>
                                                            <a href="logout.php" class="button primary">Deconectare</a>
                                                            <?php } else if((($_POST['username'] != $user) || ($_POST['password'] != $pass)) && ($_POST['captcha'] == $_POST['correctsum'])) {?>
                                                            <h4>Username/Password Invalid</h4>
                                                            <a href="administrare.php" class="button primary">Reîncearcă</a>
                                                            <?php } else if(($_POST['username'] == $user) && ($_POST['password'] == $pass) && ($_POST['captcha'] != $_POST['correctsum'])) {?>
                                                            <h4>The sum is not correct!</h4>
                                                            <a href="administrare.php" class="button primary">Reîncearcă</a>
                                                            <?php } else { ?>
                                                            <h4>The data entered is incorrect!</h4>
                                                            <a href="administrare.php" class="button primary">Reîncearcă</a>
                                                            <?php } } ?>
							</div>
						</section>          