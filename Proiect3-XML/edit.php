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
                                                            if(isset($_POST['submit'])){
                                                                $id=$_POST['id'];
                                                                $data=simplexml_load_file('data.xml');
                                                                if(!isset($_POST['imagine'])){
                                                                    $target="./meniu/".md5(uniqid(time())).basename($_FILES['imagine']['name']);
                                                                }else $target="";
                                                                foreach($data->date as $date){
                                                                    if($date->id==$id){
                                                                        $date->nume=$_POST['nume'];
                                                                        $date->pret=$_POST['pret'];
                                                                        $date->ingrediente=$_POST['ingrediente'];
                                                                        $date->gramaj=$_POST['gramaj'];
                                                                        $date->src=$target; 
                                                                    }
                                                                }
                                                                $handle=fopen("data.xml","wb");
                                                                fwrite($handle,$data->asXML());
                                                                fclose($handle);
                                                                if(move_uploaded_file($_FILES['imagine']['tmp_name'], $target)){
                                                                    header('Location:meniu_adm.php');
                                                                }else{
                                                                    echo "<br>Vai! Vai! Vai!!!";
                                                                }
                                                            }
                                                            ?>
                                                            <?php
                                                            $id=$_GET['id'];
                                                            $data=simplexml_load_file('data.xml');
                                                            foreach($data->date as $date){
                                                                if($date->id==$id){                                                                 
                                                                    ?>
                                                            <div><h2>Editați înregistrarea:</h2></div><br/>
                                                            <form method="post" enctype="multipart/form-data">
                                                                <input type="hidden" name="id" value="<?php echo $date->id; ?>">
                                                                Imagine: <br/><input type="file" name="imagine"><br/>
                                                                <img src="<?php echo $date->src; ?>" width="380" height="250"><br/>
                                                                Nume: <br/><input type="text" name="nume" value="<?php echo $date->nume; ?>"/><br/>
                                                                Preț: <br/><input type="text" name="pret" value="<?php echo $date->pret; ?>"/><br/>
                                                                Ingrediente: <br/><input type="text" name="ingrediente" value="<?php echo $date->ingrediente; ?>"/><br/>
                                                                Gramaj: <br/><input type="text" name="gramaj" value="<?php echo $date->gramaj; ?>"/><br/>
                                                                <input type="submit" name="submit" value="Edit"/>
                                                            </form>
                                                                <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                </section>
            </article>
        </div>
    </body>
</html>