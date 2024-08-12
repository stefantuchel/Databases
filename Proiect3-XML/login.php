<?php

$captcha = $_POST['captcha']; //required
$correctsum = $_POST['correctsum']; //required
$error_message = "";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['captcha'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Load user data from XML file
    $xml = simplexml_load_file('users.xml');
    $user = $xml->xpath("//user[username='$username']")[0];
    
    if (!$user) {
        $error_message = "Invalid username or password.";
    } else if ($user->password != $password) {
        $error_message = "Invalid username or password.";
    } else if ($captcha != $correctsum) {
        $error_message = "The sum is not correct.";
    } else {
        // Login successful
        session_start();
        $_SESSION['username'] = $username;
        header('Location: meniu_adm.php');
        exit;
    }
}

// Login failed
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
            <div class="align-center">
                <?php if ($error_message) { ?>
                    <h4><?php echo $error_message; ?></h4>
                    <a href="administrare.php" class="button primary">Reîncearcă</a>
                <?php } else { ?>
                    <h2>Hurray, I'm in!</h2>
                    <?php if (isset($_POST['rememberMe'])) { ?>
                        <h4>Remember me cookie set!</h4>
                    <?php } else { ?>
                        <h4>Remember me cookie not set!</h4>
                    <?php } ?>
                    <br/>
                    <a href="meniu_adm.php" class="button">Administrare bază de date</a><br/><br/>
                    <a href="logout.php" class="button primary">Deconectează-te</a>
<?php 
}
?>
            </div>
        </section>
    </article>
</div>
</body>
</html>

             