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
                       <li class="nav-item"><a class="nav-link" href="servicii.php">Servicii</a></li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">
                                Contact
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>  
                    </ul>
                </div>
            </div>
        </nav>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.1682596605438!2d27.57010911502597!3d47.174142125745504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61af5ef507%3A0x95f1e37c73c23e74!2sUniversitatea%20Alexandru%20Ioan%20Cuza%20din%20Ia%C8%99i!5e0!3m2!1sro!2sro!4v1620230493507!5m2!1sro!2sro" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <br><br>
        <div style="text-align: center">
            <a><img src="assets/adresa.svg" width="30px">  <b>Adresă:</b></a><br>
            <a>Universitatea „Alexandru Ioan Cuza” din Iași</a><br>
            <a>Bulevardul Carol I nr. 11, Iași</a><br><br>
            <a><img src="assets/phone.svg" width="30px">  <b>Telefon:</b></a><br>
            <a> 0232 201 000</a><br><br>
            <a><img src="assets/email.svg" width="30px">  <b>Email:</b></a><br>
            <a>contact@uaic.ro</a><br><br><br>
            <a href="https://www.facebook.com/stef.stefutz/" target="_blank"><img src="assets/facebook.svg" width="50px"></a>
            <a href="https://www.instagram.com/stef.stefutz/" target="_blank"><img src="assets/instagram.svg" width="50px"></a>
            <a href="https://www.youtube.com" target="_blank"><img src="assets/youtube.svg" width="50px"></a>
            
        </div>
        
         <footer class="py-5 bg-dark" style="margin-top: 100px">
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

