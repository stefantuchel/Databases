<?php
session_start();
$_SESSION["telefon"]=$_POST["telefon"];
?>
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
                        <h3>Mesajul trimis:</h3>
                        <?php 
class Date1{
    protected $prenume;
    private $nume;
    protected $email;
    public $subiect;
    public $mesaj;
    public function setPrenume($var){
        $this->prenume=$var;
    }
    public function setNume($var){
        $this->nume=$var;
    }
    public function setEmail($var){
        $this->email=$var;
    }
    public function setSubiect($var){
        $this->subiect=$var;
    }
    public function setMesaj($var){
        $this->mesaj=$var;
    }
     public function showPrenume(){
        echo "<b>Prenume:</b> ".$this->prenume;
    }
    public function showNume(){
        echo "<b>Nume:</b> ".$this->nume;
    }
     public function showEmail(){
        echo "<b>Email:</b> ".$this->email;
    }
     public function showSubiect(){
        echo "<b>Subiect:</b> ".$this->subiect;
    }
     public function showMesaj(){
        echo "<b>Mesaj:</b> ".$this->mesaj;
    }
}
class Date2 extends Date1{
    public $telefon;
    public function setTelefon($var){
        $this->telefon=$var;
    }
    public function showTelefon(){
        echo "<b>Telefon:</b> ".$this->telefon;
    }
    public function setData(){
    $this->setPrenume($_SESSION["prenume"]);
    $this->setNume($_SESSION["nume"]);
    $this->setEmail($_SESSION["email"]);
    $this->setSubiect($_SESSION["subiect"]);
    $this->setMesaj($_SESSION["mesaj"]);
    }
}

$date2=new Date2();
$date2->setData();
$date2->setTelefon($_SESSION["telefon"]);
$date2->showPrenume();
echo "<br/><br/>";
$date2->showNume();
echo "<br/><br/>";
$date2->showTelefon();
echo "<br/><br/>";
$date2->showEmail();
echo "<br/><br/>";
$date2->showSubiect();
echo "<br/><br/>";
$date2->showMesaj();
?>
                        <br/><br/>
                        <a href="contact.php" class="button primary">Înapoi</a>
                    </div>
                </section>
            </article>
        </div>
    </body>
</html>