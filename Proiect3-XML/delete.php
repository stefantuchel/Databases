<?php
$id=$_GET['id'];

$xml_data=simplexml_load_file("data.xml") or die("Error: Object Creation failure");
foreach($xml_data->children() as $data)
    if($data->id==$_GET['id'])
    {
        unlink($data->src);
    }
    
    $xml=new DOMDocument();
    $xml->load('data.xml');
    
    $xpath=new DOMXPATH($xml);
    foreach($xpath->query("/root/date[id='$id']")as $node){
        $node->parentNode->removeChild($node);
    }
    $xml->formatoutput=true;
    $xml->save('data.xml');

header('location: meniu_adm.php');  
?>