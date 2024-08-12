 <?php
include "connection.php";

$sql = "SELECT * FROM produs ";
$tip='C';
$search_term = mysqli_real_escape_string($con, $tip);
$sql .= "WHERE tip='{$search_term}'";

$query = mysqli_query($con, $sql) or die(mysqli_error($con));
?>
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
        <!-- Buton like -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v10.0" nonce="xzw97BAJ"></script>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <img src="assets/bike.svg" width="50px">
                <a class="navbar-brand" href="">Magazin de chitari</a>
                <form name="search_form" method="post" action="cauta.php">
                    <input type="text" name="cauta1" value="" placeholder="Caută..."/>
                <input type="submit" name="cauta" value="Caută">
                 </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <img src="assets/guitar-pick.svg" width="50px">
                        <li class="nav-item"><a class="nav-link" href="index.php">Pagina principală</a></li>
                        <li class="nav-item"><a class="nav-link" href="despre.php">Despre</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicii.php">Servicii</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4"><canvas id="canvas" width="270" height="90"/></h1>
                    <div class="list-group">
                        <a class="list-group-item" href="index1.php"><img src="assets/guitar-c.svg" width="40px">  Chitări clasice</a>
                        <a class="list-group-item" href="index2.php"><img src="assets/guitar-e.svg" width="40px">  Chitări electrice</a>
                        <a class="list-group-item" href="index3.php"><img src="assets/guitar-b.svg" width="40px">  Chitări bass</a>
                    </div>
                </div>
                <div class="col-lg-9">      
        <div class="row">
        <?php while($row=mysqli_fetch_array($query)) { ?> 
                 <div class="col-lg-4 col-md-6 mb-4">
                 <div class="card h-100">
                                <?php echo "<a href=\"detalii.php?id=".$row['id']."\"><img class=\"card-img-top\" src=\"administrare/".$row['poza']."\"></a>" ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo "<a href=\"detalii.php?id=".$row['id']."\">".$row['nume_prod']."</a>" ?></h4>
                                    <h5><img src="assets/coins.svg" width="25px">  <?php echo $row['pret'];?> LEI</h5>
                                    <p class="card-text"> <?php echo "<a href=\"detalii.php?id=".$row['id']."\"> Detalii  <img src=\"assets/plus.svg\" width=\"20px\"></a>" ?> </p>
                                </div>
                     <div class="card-footer"><small class=text-muted><a href="" style="color: #6c757d" onclick="return confirm('Comandă plasată cu succes! Vă mulțumim!')"><img src="assets/shopping-cart.svg" width="30px">  Cumpără</a></small></div>
                 </div>
                 </div>       
     <?php } ?> 
         </div>
    </div>
    </div>
    </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container" style="text-align: center"><a class="m-0 text-center text-white" href="administrare/conectare.php" >Administrare site</a></div>
            <div class="container" style="text-align: center"><div class="fb-like" data-href="https://gpinti.000webhostapp.com/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div></div><br>
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
        <!--<script src="js/js2.js"></script>-->
    </body>
</html>


