<?php
session_start();

include '../connection.php';
$sql='SELECT * FROM produs;';
$query= mysqli_query($con, $sql) or die(mysqli_error($con));
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
        
        <div class="container">
        <div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4">Guitar Store</h1>
                    <div class="list-group">
                        <a class="list-group-item" href="adauga.php">Adaugă produs <img src="../assets/add.svg" width="20px"></a>
                    </div>
                </div>
        <div class="col-lg-9">
            <div class="row">
           <?php while($row=mysqli_fetch_array($query)) { ?> 
            
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <?php echo "<a href=\"vizualizeaza.php?id=".$row['id']."\"><img class=\"card-img-top\" src=\"".$row['poza']."\"></a>" ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo "<a href=\"vizualizeaza.php?id=".$row['id']."\">".$row['nume_prod']."</a>" ?></h4>
                                    <h5>Preț:<?php echo $row['pret'];?>  Stoc:<?php echo $row['stoc'];?></h5>
                                    <p class="card-text"><?php echo $row['descriere'];?></p>
                                </div>
                                <div class="card-footer"><small class="text-muted"><?php echo "<a href=\"modifica.php?id=".$row['id']."\">Modifică  <img src=\"../assets/edit.svg\" width=\"20px\"></a><a href=\"sterge.php?id=".$row['id']."\" onclick=\"return confirm('Ești sigur?')\">  Șterge <img src=\"../assets/delete.svg\" width=\"20px\"></a>"?></small></div>
                            </div>
                        </div>
            <?php } ?> 
             </div> 
            </div>
         </div>
      </div>
    </body>
</html>