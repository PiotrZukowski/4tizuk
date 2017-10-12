<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="odbierz.php" method='post'>
        Login: <input type="text" name='login'> <br><br>
        Płeć: 
        <input type="radio" name="plec" value='m' id=""> Mężczyzna
        <input type="radio" name="plec" value='k' id=""> Kobieta 
        <br> <br>
        <select name="sporty[]" id="" multiple= 'multiple'>
            <option value="biegi">biegi</option>
            <option value="rower">rower</option>
            <option value="tenis">tenis</option>
            <option value="narty">narty</option>
            <option value="snowboard">snowboard</option>
        </select>
<br> 
    <input type="submit" value="wyślij">
    </form>
    
</body>
</html>