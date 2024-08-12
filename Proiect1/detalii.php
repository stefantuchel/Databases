<?php
session_start();

include 'connection.php';
$sql1="SELECT * FROM produs WHERE id='{$_GET['id']}'";
$query=mysqli_query($con,$sql1) or die(mysqli_error($con));
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
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v10.0" nonce="xzw97BAJ"></script>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Guitar Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Pagina principală</a></li>
                       <li class="nav-item"><a class="nav-link" href="despre.php">Despre</a></li>
                       <li class="nav-item"><a class="nav-link" href="servicii.php">Servicii</a></li>
                       <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <div style="text-align: center; margin-left: 150px; margin-right: 150px;">
            <?php
           $row=mysqli_fetch_array($query);

           echo "<h4 class=\"card-title\">".$row["nume_prod"]."</h4><br/>";
           echo "<img src=\"administrare/".$row['poza']."\"><br/>";
           echo $row["descriere"]."<br/><br/>";
           echo "<img src=\"assets/coins.svg\" width=\"25px\">  ".$row["pret"]." LEI<br/><br/>";
           
?>
             <a href="index.php" style="color: #6c757d" onclick="return confirm('Comandă plasată cu succes! Vă mulțumim!')"><img src="assets/shopping-cart.svg" width="30px">  Cumpără</a><br><br>
           <a href="index.php">Înapoi</a>       
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

