<?php
// Connect to the database
$con = mysqli_connect('localhost', 'root', '', 'proiect1');

// Check connection
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

mysqli_query($con, 'DROP PROCEDURE IF EXISTS adauga_produs');
// Create the procedure
mysqli_query($con, "CREATE PROCEDURE adauga_produs (
  IN nume_prod VARCHAR(255),
  IN imagine LONGBLOB,
  IN tip CHAR(1),
  IN descriere TEXT,
  IN pret DECIMAL(10, 2),
  IN stoc INT,
  IN tag VARCHAR(255)
)
BEGIN
  INSERT INTO produs (nume_prod, imagine, tip, descriere, pret, stoc, tag)
  VALUES (nume_prod, imagine, tip, descriere, pret, stoc, tag);
END");

mysqli_query($con, 'DROP TRIGGER IF EXISTS sterge_produs');
// Create the trigger
mysqli_query($con, "CREATE TRIGGER adauga_produs
BEFORE INSERT ON produs
FOR EACH ROW
BEGIN
  SET NEW.data_adaugarii = NOW();
END");

// Close the connection
mysqli_close($con);
?>


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
        
        <div style="margin-left: 200px" >
        <form method="post" action="salveaza.php" enctype="multipart/form-data">
            Nume produs:<br> 
            <input type="text" name="nume_prod" size="80"><br><br>
            Adaugă imagine:<input type="hidden" name="size" value="1000000">
             <div>
                  <input type="file" name="poza">
             </div><br><br>
            Tipul de chitara:<br>
            <input type="radio" id="tipm" name="tip" value="M"><label for="tipm"> Chitara clasica</label><br>
            <input type="radio" id="tipf" name="tip" value="F"><label for="tipf"> Chitara electrica</label><br>
            <input type="radio" id="tipc" name="tip" value="C"><label for="tipc"> Chitara bass</label><br><br>
            <div>
                    <textarea name="text" cols="80" rows="10" placeholder="Descriere..."></textarea>
            </div><br>
            Preț:<br> 
            <input type="text" name="pret" ><br><br>
            Stoc:<br> 
            <input type="text" name="stoc" ><br><br>
            Tag:<br> 
            <input type="text" name="tag" ><br><br>
                <div>
                    <input type="submit" name="upload" value="Adaugă produs">
                    <input type="submit" name="renunta" value="Renunță">
                </div>
            </form>
        </div>
    </body>
</html>

