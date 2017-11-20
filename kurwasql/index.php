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
    $connect = mysql_connect('localhost','root','');
    if($connect){
        $baza = mysql_select_db("korporacja");
        if($baza){
            $wynik = mysql_query('SELECT * FROM miasta');
            $ile = mysql_num_rows($wynik);
            if($ile > 0){
                for ($i=1; $i <= $ile ; $i++) { 
                  $wiersz = mysql_fetch_assoc($wynik); 
                  $id = $wiersz['id_miasta'];  
                  $miasto = $wiersz['nazwaMiasta'];

                  echo $id." ".$miasto."<br>";
                }
               
            }else "Zapytanie nie zwróciło rekordów";
        }
    }else echo "Brak połączenia z bazą";
    mysql_close($connect);

    $connect = mysqli_connect('localhost','root','','korporacja');
    if($connect){
        $zapytanie = file_get_contents('kwerenda.txt');
        $wynik = mysqli_query($connect,$zapytanie);
        $ile =mysqli_num_rows($wynik);
        if($ile > 0){
            for ($i=1; $i <= $ile ; $i++) { 
                $wiersz = mysqli_fetch_assoc($wynik); 
                $id = $wiersz['id_miasta'];  
                $miasto = $wiersz['nazwaMiasta'];

                echo $id." ".$miasto."<br>";
              }
             
          }else "Zapytanie nie zwróciło rekordów";
        
    }
    mysqli_close($connect);
    ?>
    
</body>
</html>