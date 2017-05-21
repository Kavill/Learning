<?php

$konto = $_POST['konto'];
$pensja = $_POST['pensja'];

if(((is_numeric($pensja)==0)) || (is_numeric($konto)==0)){
    die("Wartości pensji i konta MUSZĄ być liczbą"); //obsługa błędu przy podaniu wartości nieliczbowych do zmiennych konto lub pensja
}

if($pensja==0){
    die("Brak przychodu miesięcznego"); //obsługa błędu przy wartości pensji = 0
}

echo <<<PL
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="description" content="To jest strona do testowania nauczonych skryptów">
        <meta name="viewport" content="width-device-width initial-scale=1">
    </head>
    
    <body>
        <header>Kalkulator oszczędności</header>
        
        <section>
            <article>
                Stan konta na aktualny miesiąc:<b> $konto</b><br/>
                Twój przychód miesięczny:<b> $pensja</b>
            </article>
        </section>
    </body>
</html>
PL

?>