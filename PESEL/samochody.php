<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wynajmujemy samochody</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>


<div id='container'>

<div id ='baner'><h1>Wynajem Samochodów</h1></div>
<div id ='pl'>

<h2>DZIŚ POLECAMY TOYOTE ROCZNIK 2014</h2>
<br>
<?php
sc1(); 
 ?>
 <br> 
<h2>WSZYSTKIE DOSTĘPNE SAMOCHODDY</h2>
<br> skrypt2 <br>


</div>
<div id ='ps'><h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
<br><br> skrypt 3
</div>
<div id ='pp'><h2>NASZA OFERTA</h2>
<br>
<ul>
    <li>Fiat</li>
    <li>Toyota</li>
    <li>Opel</li>
    <li>Mercedes</li>
    <br>
    <p>Tu pobierzesz naszą <a href="komis.sql">bazę danych</a> </p>
    <br>
    <p> autor strony PESEL</p>
</ul>
</div>
</div> 

 
</body>
</html>

<?php 

function sc1(){
$connect = mysqli_connect('localhost','root','','wynajem');

$wynik = mysqli_query($connect, "SELECT id,model,kolor FROM samochody where marka ='Toyota' and rocznik ='2014'; ");

$ile = mysqli_num_rows($wynik);

for ($i=0; $i<=$ile ; $i+1) { 
    $record = mysqli_fetch_assoc($wynik);
    echo $record['id']." ".$record['model']." ".$record['kolor'];
}


mysqli_close($connect);
}
?>