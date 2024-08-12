<?php
include '../connection.php';

if(isset($_POST["modifica"])){
    $sql2="SELECT * FROM produs WHERE ID='{$_POST['id']}'";
    $result2=mysqli_query($con,$sql2);
    $rec=mysqli_fetch_array($result2);
    $tip=$_POST['tip'];
    $nume_prod=$_POST['nume_prod'];
    if(isset($_POST['poza'])){
        $target="./poze/".md5(uniqid(time())).basename($_FILES['poza']['name']);
    }else{
        $target=$rec['poza'];
    }
    $descriere=$_POST['text'];
    $pret=$_POST['pret'];
    $stoc=$_POST['stoc'];
    $tag=$_POST['tag'];
    $sql1="UPDATE produs SET tip='{$tip}',nume_prod='{$nume_prod}',poza='{$target}',descriere='{$descriere}',pret='{$pret}',stoc='{$stoc}',tag='{$tag}' WHERE id='{$_POST['id']}'";
    mysqli_query($con,$sql1) or die(mysqli_error($con));
    move_uploaded_file($_FILES['poza']['tmp_name'], $target);
    header('Location:administrare.php');
    exit;
}
else
{
    header('Location:administrare.php');
    exit;
} 
?>