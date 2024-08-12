
<?php //
    
include '../connection.php';

if(!isset($_POST['renunta']))
{
session_start();
$_SESSION['nume_prod']=$_POST['nume_prod'];
$_SESSION['tip']=$_POST['tip'];
$_SESSION['pret']=$_POST['pret'];
$_SESSION['descriere']=$_POST['text'];
$_SESSION['stoc']=$_POST['stoc'];
$_SESSION['tag']=$_POST['tag'];
$target="./poze/". md5(uniqid(time())). basename($_FILES['poza']['name']);

$sql="INSERT INTO produs (tip, nume_prod, poza, descriere, pret, stoc, tag) VALUES" . "('{$_SESSION["tip"]}', '{$_SESSION["nume_prod"]}', '{$target}', '{$_SESSION["descriere"]}', '{$_SESSION["pret"]}', '{$_SESSION["stoc"]}', '{$_SESSION["tag"]}')";
$query=mysqli_query($con,$sql) or die (mysqli_error($con));

if(move_uploaded_file($_FILES['poza']['tmp_name'],$target))
    {
        header('location:administrare.php');
        exit;
    }
}
else
{
    header('Location:administrare.php');
    exit;
}

?>
<a href="index.php">Back</a>
