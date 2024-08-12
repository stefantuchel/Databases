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
                        <div id="content">
                            <div><h2>Încarcă o nouă înregistrare:</h2></div><br/>
            <form method="post" action="save.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    ID:<br/><input type="text" name="id"/><br/>
                    Imagine:<br/><input type="file" name="imagine"><br/><br/>
                    Nume:<br/><input type="text" name="nume"/><br/>
                    Preț:<br/><input type="text" name="pret"/><br/>
                    Ingrediente:<br/><textarea name="ingrediente" cols="40" rows="4" placeholder="Descriere"></textarea><br/>
                    Gramaj:<br/><input type="text" name="gramaj"/><br/><br/>
                    <input type="submit" name="upload" value="Încarcă produsul">
                </div>
            </form>
        </div>
    </body>
</html>