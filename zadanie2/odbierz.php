<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Witaj, <?php echo $_POST['login']; ?> <br>
    
    Wybrana płeć: <?php 
    if ($_POST['plec'] == 'm'){echo "Mężczyzna";}
    elseif ($_POST['plec'] == 'k'){echo "Kobieta";}
    else {echo "Nie wybrano";}
    ?>
    <br>

    Wybrane sporty: <?php
   
    if (count($_POST['sporty']) < 2 ) { 
         echo 'Wybrałeś mniej niż 2 sporty', '<form action="index.php"><input type="submit" value="powrót fo formualrza"></form>';
     }
    else {

   
            foreach ($_POST['sporty'] as $sport) {
            echo $sport , " ";
                }
        }
    ?>

</body>
</html>