<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'proiect1');

// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Create the procedure
mysqli_query($conn, 'DROP PROCEDURE IF EXISTS update_produs');
mysqli_query($conn, "CREATE PROCEDURE `update_produs`(
    IN id INT,
    IN nume_prod VARCHAR(255),
    IN poza VARCHAR(255),
    IN tip CHAR(1),
    IN descriere TEXT,
    IN pret DECIMAL(10, 2),
    IN stoc INT,
    IN tag VARCHAR(255)
  )
  BEGIN
    UPDATE produs SET
      nume_prod = nume_prod,
      poza = poza,
      tip = tip,
      descriere = descriere,
      pret = pret,
      stoc = stoc,
      tag = tag
    WHERE id = id;
  END");

// Create the trigger
mysqli_query($conn, 'DROP TRIGGER IF EXISTS update_produs_trigger');
mysqli_query($conn, "CREATE TRIGGER `update_produs_trigger` BEFORE UPDATE ON `produs` FOR EACH ROW 
BEGIN
    SET NEW.nume_prod = IFNULL(NEW.nume_prod, OLD.nume_prod),
        NEW.poza = IFNULL(NEW.poza, OLD.poza),
        NEW.tip = IFNULL(NEW.tip, OLD.tip),
        NEW.descriere = IFNULL(NEW.descriere, OLD.descriere),
        NEW.pret = IFNULL(NEW.pret, OLD.pret),
        NEW.stoc = IFNULL(NEW.stoc, OLD.stoc),
        NEW.tag = IFNULL(NEW.tag, OLD.tag);
END");

// Get the row to update
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM produs WHERE id = $id");

if (!$result) {
    die('Error retrieving row: ' . mysqli_error($conn));
}

$record = mysqli_fetch_assoc($result);

// Close the connection
mysqli_close($conn);
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
            <h1>Modificați înregistrarea:</h1><br/>
            <form method="post" action="salveaza_modificare.php" enctype="multipart/form-data">
            Nume produs:<br> 
            <div>
                    <textarea name="nume_prod" cols="80" rows="1"><?php echo $record['nume_prod'] ;?></textarea>
            </div><br>
            Adaugă imagine:<input type="hidden" name="size" value="1000000">
             <div>
                  <input type="file" name="poza" value="<?php echo $record['poza'] ;?>">
                  <img src="<?php echo $record['poza'];?>"><br/>
             </div><br><br>
            Tipul de chitara:<br>
            <input type="radio" id="tipm" name="tip" value="M"><label for="tipm"> Chitara clasica</label><br>
            <input type="radio" id="tipf" name="tip" value="F"><label for="tipf"> Chitara electrica</label><br>
            <input type="radio" id="tipc" name="tip" value="C"><label for="tipc"> Chitara bass</label><br><br>
            <div>
                    <textarea name="text" cols="80" rows="10"><?php echo $record['descriere'] ;?></textarea>
            </div><br>
            Preț:<br> 
            <input type="text" name="pret" value="<?php echo $record['pret'] ;?>"><br><br>
            Stoc:<br> 
            <input type="text" name="stoc" value="<?php echo $record['stoc'] ;?>"><br><br>
            Tag:<br> 
            <input type="text" name="tag" value="<?php echo $record['tag'] ;?>"><br><br>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                <div>
                    <input type="submit" name="modifica" value="Modifică produs">
                    <input type="submit" name="renunta" value="Renunță">
                </div>
            </form>
        </div>
    </body>
</html>