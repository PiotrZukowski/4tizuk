<!DOCTYPE html>
<html lang='pl'>
<head>
    <meta charset='UTF-8'>
</head>
<body>
<?php
if(isset($_POST['login'])) $login = $_POST['login'];
else $login = 'anonim';
echo 'login usera: '.$login."</p>";

if(isset($_POST['haslo'])) $haslo = $_POST['haslo'];
else $haslo = 'anonim';
echo 'haslo usera: '.$haslo."</p>";
$haslo_sz = md5($haslo);
echo 'haslo zaszyfrowane usera: '.$haslo_sz."</p>";

if(isset($_POST['owoce']))

{
    echo "wybrane owoce:<br />";
    $size = count($_POST['owoce']);
    for($i=0;$i<$size;$i++)
    {
        echo ($_POST["owoce"][$i].',');
    }
}
else echo 'Nie wybrano żadnego owocu';

?>  
<br /> 
<form action='cotojest.php'>
<input type="submit" value='Wróć do formularz' />
</form> 
</body>
</html>