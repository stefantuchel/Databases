<?php
//require_once "connection.php";
//$msg="";
if(isset($_POST['upload']))
{
    $id=$_POST['id'];
    $target="./meniu/". md5(uniqid(time())). basename($_FILES['imagine']['name']);
    $nume=$_POST['nume'];
    $pret=$_POST['pret'];
    $ingrediente=$_POST['ingrediente'];
    $gramaj=$_POST['gramaj'];
    //$sql="INSERT INTO restaurant(nume, imagine, pret, ingrediente, gramaj)VALUES('$nume','$imagine','$pret','$ingrediente','$gramaj')";
    $data=array(
        'id'=>$id,
        'imagine'=>$target,
        'nume'=>$nume,
        'pret'=>$pret,
        'ingrediente'=>$ingrediente,
        'gramaj'=>$gramaj,
        );
    $xml= simplexml_load_file('data.xml');
    $date=$xml->addChild('date');
    $date->addChild('id',$id);
    $date->addChild('src',$target);
    $date->addChild('nume',$nume);
    $date->addChild('pret',$pret);
    $date->addChild('ingrediente',$ingrediente);
    $date->addChild('gramaj',$gramaj);
    $date->addChild('view','view.php?id='.$id);
    $date->addChild('edit','edit.php?id='.$id);
    $date->addChild('delete','delete.php?id='.$id);
    $date->addChild('confirm','return confirm("Are you sure you want to delete this item?")');
    $date->addChild('back','index.php');
    file_put_contents('data.xml', $xml->asXML());

    if(move_uploaded_file($_FILES['imagine']['tmp_name'],$target))
    {
        header('location:meniu_adm.php');
    }else
    {
        echo "Vai!Vai!Vai!";
    }
}
?>