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
    <body class="is-preload">
        <div id="page-wrapper">
            <article id="main">
                <section class="wrapper style4">
							<div class="inner">
<?php
include 'connection.php';
$bulk=new MongoDB\Driver\BulkWrite;

if(!isset($_POST["submit"])){
$id=new \MongoDB\BSON\ObjectId($_GET['id']);
$filter=['_id'=>$id];
$query=new MongoDB\Driver\Query($filter);
$article=$client->executeQuery("restaurant2.restaurant", $query);
$doc=current($article->toArray());
}else{
    $data=[
        'nume'=>$_POST['nume'],
        'pret'=>$_POST['pret'],
        'ingrediente'=>$_POST['ingrediente'],
        'gramaj'=>$_POST['gramaj']
    ];
    $id=new \MongoDB\BSON\ObjectId($_POST['id']);
    $filter=['_id'=>$id];
    
    $update=['$set'=>$data];
    
    $bulk->update($filter, $update);
    $client->executeBulkWrite('restaurant2.restaurant', $bulk);
    header('location:meniu_adm.php');
}
?>
<div><h2>Editați înregistrarea:</h2></div><br/>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $doc->_id;?>"><br/>
    Imagine: <br/><input type="file" name="imagine"/><br/>
    <?php if ($doc->imagine): ?>
        <img src="<?php echo $doc->imagine;?>" width="250" height="350"><br/>
    <?php endif; ?>
    Nume: <br/><input type="text" name="nume" value="<?php echo $doc->nume;?>"/><br/>
    Preț: <br/><input type="text" name="pret" value="<?php echo $doc->pret;?>"/><br/>
    Ingrediente: <br/><input type="text" name="ingrediente" value="<?php echo $doc->ingrediente;?>"/><br/>
    Gramaj: <br/><input type="text" name="gramaj" value="<?php echo $doc->gramaj;?>"/><br/>
    <input type="submit" name="submit" value="Edit"/>
    <a href="meniu_adm.php"><button type="button">Back</button></a>
</form>