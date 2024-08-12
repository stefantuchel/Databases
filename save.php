<?php
require_once "connection.php";
$msg="";
$bulk=new MongoDB\Driver\BulkWrite;

if(isset($_POST['upload']))
{
    $imagine="./meniu/". md5(uniqid(time())). basename($_FILES['imagine']['name']);
    $data=array(
        '_id'=>new MongoDB\BSON\ObjectID,
        'nume'=>$_POST['nume'],
        'imagine'=>$imagine,
        'pret'=>$_POST['pret'],
        'ingrediente'=>$_POST['ingrediente'],
        'gramaj'=>$_POST['gramaj']
    );
    $bulk->insert($data);
    $client->executeBulkWrite('restaurant2.restaurant',$bulk);
    if(move_uploaded_file($_FILES['imagine']['tmp_name'],$imagine))
    {
        header('location:meniu_adm.php');
    }
    else
    {
        $msg="Vai!Vai!Vai!";
    }
}
?>