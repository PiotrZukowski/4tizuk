<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odbieranie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id = 'container'>
        <div id= 'header'>
            <a href="index.php"><img src="baner.jpg" alt=""></a>
        </div>
        <div id='menu'>
        <a href="index.php">STRONA GŁÓWNA</a> <br><br>
        <a href="logowanie.php">LOGOWANIE</a> <br><br>
        <a href="strona1.html">LICZBY</a> <br><br>
        </div>
        <div id='content'> Login: 
            <?php
            $x = $_POST['rok'] ;
            $z = $_POST['nazwisko'] ;
            $y = $_POST['imie'] ; 
            $txt = $y.$z.$x;
            echo $txt;
             ?>
        </div>
        <div id='footer'>Copyright 2017</div>




    </div>
    
</body>
</html>