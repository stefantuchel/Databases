<?php
session_start();

include '../connection.php';
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
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand">Guitar Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">  
                        <li class="nav-item"><a class="nav-link" href="logout.php">Deconectează-te  <img src="../assets/logout.png" width="25px"></a></li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div style="text-align: center; margin-left: 150px; margin-right: 150px;">
            <?php
           $row=mysqli_fetch_array($query);

           echo "<h4 class=\"card-title\">".$row["nume_prod"]."</h4><br/>";
           echo "<img class=\"card-img-top\" src=\"".$row['poza']."\"></a>";
           echo $row["descriere"]."<br/>";
           echo "Pret:".$row["pret"]."<br/>";
           echo "Stoc:".$row["stoc"]."<br/>";
           echo "Tag:".$row["tag"]."<br/>";
?>
            <a href="administrare.php">Înapoi</a>
        </div> 
    </body>
</html>