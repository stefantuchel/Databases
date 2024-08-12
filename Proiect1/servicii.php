  <!DOCTYPE html>
<html lang="ro">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Guitar Store</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v10.0" nonce="xzw97BAJ"></script>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <img src="assets/bike.svg" width="50px">
                <a class="navbar-brand" href="index.php">Guitar Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <img src="assets/guitar-pick.svg" width="50px">
                        <li class="nav-item"><a class="nav-link" href="index.php">Pagina principală</a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="despre.php">Despre</a></li>
                         <li class="nav-item active">
                             <a class="nav-link" href="servicii.php">
                                Servicii
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <img src="assets/bannerf.jpg" class="banner" style="margin-right: 100px" width="400" height="807">
        <div>
            <p class="text">Ne mândrim cu faptul că oferim un serviciu de reparații în garanție de înaltă calitate, toate reparațiile efectuându-se în propria noastră unitate de service, de către tehnicieni specializați, cu o vastă experiență în domeniu. În calitate de distribuitori autorizați de către furnizorii pe care îi reprezentăm, efectuăm reparații până la cele mai complexe asupra tuturor produselor pe care le comercializăm.</p>
            <img src="assets/acoustic-guitar-repair.jpg" width="300" class="right" /><br><br>
            <p class="text-left"><b>Problema ta este în grija noastră!</b></p>
            <img src="assets/guitar-repair.png" width="300"/><br><br>
<p class="text-left">Oricând vei apela departamentul nostru de service, vei putea discuta cu o persoană specializată, ce îți va oferi tot ajutorul pentru soluționarea problemei pe care o întâmpini, așa că nu ezita să ne contactezi atunci când întâmpini o problema și o vom soluționa cu cât mai repede cu putință. Îți stăm la dispoziție de Luni până Vineri, orele 10:00 – 18:00 pentru a stabili o programare a intervenției în service. Ne găsești la sediul nostru din Bulevardul Carol 1 nr.11, la numărul 0232 201 000 sau direct prin email, la adresa contact@uaic.ro</p>
        </div>
        <footer class="py-5 bg-dark" style="margin-top: 85px">
            <div class="container" style="text-align: center"><a class="m-0 text-center text-white" href="administrare/conectare.php" >Administrare site</a></div>
            <div class="container" style="text-align: center"><div class="fb-like" data-href="https://gpinti.000webhostapp.com/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div></div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
            <?php
            date_default_timezone_set('Europe/Bucharest');
            ?>
            <div class="container"><p class="m-0 text-center text-white"> <?php echo "Ora este " . date("h:i:sa"); ?> </p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/js1.js"></script>
        <script src="js/js2.js"></script>
    </body>
</html>

