<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST["login"])) $login =  $_POST["login"];
    else $login = 'Anonim';

    if(isset($_POST["haslo"])) $haslo =  $_POST["haslo"];
    else $haslo = '';

    if(isset($_POST["music"])) $music =  $_POST["music"];
    else $music = ['nic'];
    
    echo 'Login:  ';
    echo $login,'<br><br>';
    echo 'Haslo:  ';
    echo $haslo,'<br><br>';
    echo 'sHaslo:';  
    echo md5($haslo),'<br><br>';
    echo 'Gatunki: ';
    echo'<br>';
     foreach ($music as $name) {
        echo $name,'<br>'; 
    } ?>
    
</body>
</html>