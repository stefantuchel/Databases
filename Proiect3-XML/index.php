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
        <script src="assets/js/js1.js"></script>
        <script src="assets/js/js2.js"></script>
	<body class="landing is-preload">
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v10.0" nonce="A5AKoYPJ"></script>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
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

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Mannschaft<br/>
                                                        Omlette</h2>
							<p>Echipa Mannschaft alege ingrediente de cea mai bună calitate<br />
							 pentru a putea prepara o mâncare sănătoasă,<br />
							delicioasă dar și bogată în nutrienți!</p><br/>
                                                        <?php
                                                        $xslDoc=new DOMDocument();
                                                        $xslDoc->load("doc.xsl");
                                                        $xmlDoc=new DOMDocument();
                                                        $xmlDoc->load("doc.xml");
                                                        $proc=new XSLTProcessor();
                                                        $proc->importStylesheet($xslDoc);
                                                        echo $proc->transformToXML($xmlDoc);
                                                        ?>
                                                        <br/><br/>
							<ul class="actions special">
                                                            <li><a href="meniu.php" class="button primary">Vezi meniul</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Povestea noastră</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Cum a luat viață Restaurantul<br />
								Mannschaft Omlette?</h2>
								<p>Pentru că suntem oameni într-o continuă expansiune, pentru că trecem prin timp grăbiți cu vise mărețe,<br />
                                                                    pentru că studiem arta frumosului și știm că românul se autodepășește mereu prin tehnică și inventivitate,<br />
                                                                    am adunat toată energia noastră aducând concepte noi, reușind astfel prin pasiune, sacrificiu,<br />
                                                                     devotament și multă muncă să dăm viață restaurantului nostru.</p>
							</header>
							<ul class="icons major">
								<li><span class="icon fa-gem major style1"><span class="label">Lorem</span></span></li>
								<li><span class="icon fa-heart major style2"><span class="label">Ipsum</span></span></li>
								<li><span class="icon solid fa-code major style3"><span class="label">Dolor</span></span></li>
							</ul>
						</div>
                                            <a href="#three" class="more scrolly button">
                                                <canvas id="myCanvas" ></canvas>

<script>
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.font = "20px Arial";
ctx.strokeText("Vezi galeria",80,30);
</script>
                                            </a>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic01.jpg" alt="" /></div><div class="content">
								<h2>Cine suntem noi și ce dorim să oferim clienților noștri?</h2>
								<p>Noi suntem o echipă tânără și ambițioasă care vrem să oferim „gust” vieții tale! Vrem să vă aducem pe masă produse proaspete, bio, pline de savoare presărate de influențe îndrăznețe din bucătăriile lumii. Cum o să ne pășiți pragul, veți fi întâmpinați de un decor relaxant, caracterizat de ospitalitate și atenție pentru detaliu. </p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic02.jpg" alt="" /></div><div class="content">
								<p>Pasiunea pentru gătit este călăuza noastră către produse fără cusur, remarcându-ne prin diversitate, fără a renunța la gusturile românești, noi promitem să vă oferim mereu ceva care să vă surprindă papilele gustative.<br/>
                                                                Totul a început de la cum am reinventat noi OUL și cum l-am făcut în bucătăria noastră pionul principal al mâncărilor noastre! Dimineața o să fie mult mai bună dacă ne pășiți pragul pentru un mic dejun copios.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic03.jpg" alt="" /></div><div class="content">
								<h2>Cu ce ne deosebim de restul restaurantelor?</h2>
								<p>Pentru noi succesul unei mese perfecte este  mâncarea perfectă iar totul este posibil atunci când ai un personal profesionist ce inovează constant și folosește ingrediente de top! Ambientul pe care noi vrem să vi-l oferim trebuie să vă aducă o experiență unică în viața dumneavoastră încă din momentul în care v-ați așezat la masă!</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
						<div class="inner">
							<header class="major">
								<h2>Galerie</h2>
								<p>Încă nu te-am convins?<br/>
                                                                Îți prezentăm o selecție de fotografii și videoclipuri cu care sperăm să te impresionăm.</p>
							<svg width="200" height="200">
                                                        <polygon points="100,10 40,198 190,78 10,78 160,198"
                                                                 style="fill:gray;stroke:white;stroke-width:5;fill-rule:evenodd;" />
                                                        </svg>
                                                        </header>
                                                        <div class="box alt">
                                                                <div class="row gtr-50 gtr-uniform">
                                                                    
                                                                    <div class="col-4"><span class="image fit"><img src="images/c.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/cc.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/ccc.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/2.jpg" alt="" /></span></div>
	    						            <div class="col-4"><span class="image fit"><img src="images/22.jpg" alt="" /></span></div>
				 			            <div class="col-4"><span class="image fit"><img src="images/222.jpg" alt="" /></span></div>
                                                                    <div class="col-12"><span class="image fit"><img src="images/2222.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/7.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/77.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/777.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/b.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/bb.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/bbb.jpg" alt="" /></span></div>
                                                                    <div class="col-12"><span class="image fit"><img src="images/7777.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/5.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/55.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/555.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/a.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/aa.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/aaa.jpg" alt="" /></span></div>
                                                                    <div class="col-12"><span class="image fit"><img src="images/aaaa.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/4.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/44.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/444.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/8.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/88.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/888.jpg" alt="" /></span></div>
                                                                    <div class="col-12"><span class="image fit"><img src="images/8888.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/9.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/99.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/999.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/6.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/66.jpg" alt="" /></span></div>
                                                                    <div class="col-4"><span class="image fit"><img src="images/666.jpg" alt="" /></span></div>
                                                                    <div class="col-12"><span class="image fit"><img src="images/9999.jpg" alt="" /></span></div>
                                                                    <audio controls style="width: 2200px;">
                                                                        <source src="multimedia/Mannschaft.mp3" type="audio/mpeg">
                                                                        Your browser does not support the audio element.
                                                                    </audio>
                                                                    <iframe src="https://www.youtube.com/embed/XX8YsfiVb44" width="526" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                                    <video width="526" height="300" controls>
                                                                        <source src="multimedia/Mannschaft.mp4" type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
							        </div>
						        </div>
						</div>
					</section>

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h4>Ești gata să ne pășești pragul pentru un mic dejun, <br/>
                                                                    un prânz sau o cină copioasă? <br/>
                                                                    Sau poate doar pentru o gustare?</h4>
								<p>Dacă da, atunci te așteptăm să deguști delicioasele preparatele din meniul nostru la adresa menționată în pagina de contact.</p>
							</header>
							<ul class="actions stacked">
                                                            <li><a href="meniu.php" class="button fit primary">Meniu</a></li>
                                                            <li><a href="contact.php" class="button fit">Contact</a></li>
							</ul>
						</div>
					</section>

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