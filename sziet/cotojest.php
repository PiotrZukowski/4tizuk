<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset = 'utf-8'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <fieldset>
    <legend>Dane personalne</legend>
    <form action ="odbierz.php" method = "post">
        Login: &nbsp;<input type = "text" name = "login" value = '' placeholder = 'Twój login' autofocus = 'autofocus' /> <br><br>
        hasło: &nbsp;<input type = "password" name = "haslo" value = '' placeholder = 'haslo'  /> <br><br>
        email: &nbsp;<input type = "email" name = "email" value = '' placeholder = 'email' required = 'required' /> <br><br>
        textarea: &nbsp;<input type = "textarea" name = "txtarea" value = '' placeholder = 'textarea'  /> <br><br>
        data: &nbsp;<input type = "date" name = "date" value = '' placeholder = 'date' required = 'required' /> <br><br>
        url: &nbsp;<input type = "url" name = "url" value = '' placeholder = 'url' required = '' /> <br><br>
        foto: &nbsp;<input type = "file" name = "file" value = '' placeholder = 'file' required = '' /> <br><br> <!-- -->
        hidden: <input type="hidden" name="topsecret" value = 'xyz' >
    
    </fieldset>
    opis: <textarea name="" id="" cols="50" rows="5"></textarea> <br>
    kolor:<select name="kolory" id="">
    <option value="">czerwony</option>
    <option value="">zielony</option>
    <option value="">niebieski</option>
    <option value="">czarny</option>
    <option value="">biały</option>
    </select>

    kolor:<select name="owoce[]" multiple>
    <option value="banan">banan</option>
    <option value="jabłko">jabłko</option>
    <option value="pomelo">pomelo</option>
    <option value="arbuz">arbuz</option>
    <option value="grucha">grucha</option>
    </select>
    
    <br>
    Gdzie wkładasz?<br>
    <label for="pierwsza"><input type = 'radio' id = 'pierwsza' name ='klasa' value = '1'/>1 <br></label>
    <input type = 'radio' name ='klasa' value = '2'/>2 <br>
    <input type = 'radio' name ='klasa' value = '3'/>3 <br>
    <input type = 'radio' name ='klasa' value = '4'/>4 <br>
    Ulubione jedzemnie: <br>
    <input type="checkbox" name="papu[]" value = 'pizza' id="">pizza<br>
    <input type="checkbox" name="papu[]" value = 'pizza' id="">pierogi<br>
    <input type="checkbox" name="papu[]" value = 'pizza' id="">kotlet<br>
    <input type="checkbox" name="papu[]" value = 'pizza' id="">szyski<br>

    <input type= 'submit' value ='Wyślij' />
    <input type="image" src="rec.jpg" alt="" width = '20' height = '20/'>
    <button><img src="rec.jpg" alt="" width = "20" height = "20"/>TAK</button>
</form>
</body>

</html> 