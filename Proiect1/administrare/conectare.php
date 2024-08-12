 <!DOCTYPE html>
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
                
                <a class="navbar-brand" href="">Guitar Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item"><a class="nav-link" href="../index.php">Pagina principală</a></li>
                        <li class="nav-item"><a class="nav-link" href="../despre.php">Despre</a></li>
                        <li class="nav-item"><a class="nav-link" href="../servicii.php">Servicii</a></li>
                        <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
       </nav>  
<?php
$user='stefan';
$pass='stefan';
$usernameErr ="";
$passwordErr ="";
$captchaErr ="";
$number1=rand(1,10);
$number2=rand(1,10);
$sum=$number1+$number2;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if($_POST['username']!=$user)    
    {$usernameErr="*Username greșit!";
    }
    
    if($_POST['password']!=$pass)
    {$passwordErr="*Parolă incorectă!";
    }
    
    if($_POST['captcha']!=$_POST['correctsum'])
    {$captchaErr="*Rezultat greșit!";
    }
    
    if(($_POST['username']==$user) && ($_POST['password']==$pass) && ($_POST['captcha']==$_POST['correctsum']))
    {
        if(isset($_POST['rememberme']))
        {
        setcookie('username', $_POST['username'], time()+60*60*24*365);
        setcookie('password', md5($_POST['password']), time()+60*60*24*365);
        }
        else
        {
            setcookie('username', $_POST['username'], false);
            setcookie('password', md5($_POST['password']), false);
        }
        header("location:administrare.php");
        exit;
    }
}
?>  
        <div style="text-align: center">
            <img src="../assets/administrator.svg" width="200px"><br><br>
            <form name="login" method="post">
                <a style="font-family: bold">Username: </a><input type="text" placeholder="Introduceți username" name="username" ><br>
            <span class="error"><?php echo $usernameErr;?></span><br>
            <a style="font-family: bold">Parolă:  </a> <input type="password" placeholder="Introduceți parola" name="password"><br>
            <span class="error"><?php echo $passwordErr;?></span><br>
           <input type="hidden" name="correctsum" value="<?php echo $sum; ?>"> 
            <?php echo $number1.' + '.$number2.' = '; ?> <input type="text" name="captcha" placeholder="Introduceți rezultatul..."><br>
            <span class="error"><?php echo $captchaErr;?></span><br>
            Reține-mă: <input type="checkbox" name="rememberme" value="1"><br>
            <input type="submit" name="submit" value="Conectare!">
        </form>
        </div>
        
    </body>
</html>

