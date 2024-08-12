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
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v10.0" nonce="A5AKoYPJ"></script>
            
		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php"><img src="images/logo.png" width="125" height="50"/></a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Mai multe</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.php">Despre</a></li>
											<li><a href="meniu.php">Meniu</a></li>
											<li><a href="contact.php">Contact</a></li>
                                                                                        <li><a href="administrare.php">Administrare<br/>site</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
                                            <header class="major">
							<h2>Meniu_adm</h2>
						</header>
						<section class="wrapper style5">
							<div class="inner">
                                                            <?php
                                                            //include 'connection.php';
                                                            //$sql='SELECT * FROM restaurant;';
                                                            //$query= mysqli_query($con, $sql) or die(mysqli_error($con));
                                                            $xml_data=simplexml_load_file("data.xml") or die("Error: Object Creation failure");
                                                            ?>
                                                            <form name='search_form' method="post" action="search.php">
                                                                <h3>Căutare:<input type='text' name="search_box" value=""/></h3>
                                                                <input type="submit" name="search" value="Caută în meniu"/>
                                                                <input type="reset" class="button primary" value="Resetează"/>
                                                            </form><br/>
                                                            <ul class="features">
                                                                <?php //while($row=mysqli_fetch_array($query)) { 
                                                                foreach ($xml_data->children() as $data){
                                                                ?>
                                                                <li>
                                                                    <div class="align-center">
                                                                        <h2><?php echo "<td>".$data->nume . "</td>";?></h2>
                                                                        <?php echo "<td><img src=".$data->src." height='350' width='250'>". "</td>";?>
                                                                        <br/><br/><h4><?php echo "<td>".$data->pret . "</td>";?></h4>
                                                                        <p><?php echo "<td>".$data->ingrediente . "</td>";?>
                                                                        <br/><?php echo "<td>".$data->gramaj . "</td>";?></p>
                                                                        <div class="button "><?php echo "<a href=".$data->view.">Vizualizare</a>"?><br/></div>
                                                                        <div class="button "><?php echo "<a href=".$data->edit.">Editare</a>"?></div><br/>
                                                                        <div class="button primary"><?php echo "<a href=".$data->delete." onclick=\"return confirm('Are you sure?')\">Ștergere</a>"?></div>
                                                                    </div>
                                                                </li>
                                                                <?php } ?>
                                                            </ul>
                                                            <div class="align-center">
                                                                <a href="upload.php" class="button fit">Încarcă un nou preparat</a><br/>
                                                                <a href="administrare.php" class="button primary fit">Deconectare</a>
                                                            </div>
                                                        </div>
                                                </section>
                                        </article>

				<!-- Footer -->
					<footer id="footer">
                                            <div class="fb-like" data-href="http://localhost/PROIECT1/meniu.php" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false"></div>
                                            <div class="fb-share-button" data-href="http://localhost/PROIECT1/meniu.php" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FPROIECT1%2Fmeniu.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"></a></div><br/><br/>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>