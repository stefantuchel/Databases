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
                        <li class="nav-item active">
                            <a class="nav-link" href="despre.php">
                                Despre
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                        <li class="nav-item"><a class="nav-link" href="servicii.php">Servicii</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <img src="assets/banner.jpg" class="banner" width="300" height="870"> 
        <div style="text-align: center">
        <p class="text-body"> Nu am uitat si nu vom uita niciodata ce inseamna prima chitara, primul instrument, primul pas inspre muzica. Aceasta este probabil cea mai mare responsabilitate pe care o avem: sa nu uitam ca nu vindem produse, ci oferim un viitor. Mai jos ai un videoclip care îți arată cum te poți distra cu o chitara:</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/u6tvqJW29-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       <br/>
       <p class="text-info"> Ți-ai cumpărat deja o chitara si nu stii sa o acordezi? Mai jos ai un videoclip care iti va arata cum sa-ti acordezi o chitara:</p>
       <video width="320" height="240" controls>
            <source src="assets/chitara.mp4" type="video/mp4">
      </video>
       <br/>
       <p class="text-success"> Mai jos ai un mix de melodii rock:</p>
        <audio controls>
            <source src="assets/music.mp3" type="audio/mpeg">
    </audio>
        </div>
        
        <footer class="py-5 bg-dark" style="margin-top: 100px">
            <div class="container" style="text-align: center"><a class="m-0 text-center text-white" href="administrare/conectare.php" >Administrare site</a></div>
            <div class="container" style="text-align: center"><div class="fb-like" data-href="https://gpinti.000webhostapp.com/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div></div>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
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

