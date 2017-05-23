<?php
include('month.php');
$konto = $_POST['konto'];
$pensja = $_POST['pensja'];
$wydatki = $_POST['stale'];
$balans = 0;



if(((is_numeric($pensja)==0)) || (is_numeric($konto)==0)){
    die("Wartości pensji i konta MUSZĄ być liczbą"); //obsługa błędu przy podaniu wartości nieliczbowych do zmiennych konto lub pensja
}

if($pensja==0){
    die("Brak przychodu miesięcznego"); //obsługa błędu przy wartości pensji = 0
}

for($i = $month; $i <= 12; $i++){
    if(isset($_POST[$mies[$i]])){
        if((((is_numeric($_POST[$mies[$i]])) || ($_POST[$mies[$i]]==""))) && ($_POST[$mies[$i]] >= 0)){
            $konto = $konto + $pensja - $wydatki - $_POST[$mies[$i]];
            $balans = $pensja - $wydatki - $_POST[$mies[$i]];
            echo"Stan Twojego konta na miesiąc <b>$mies[$i]</b> będzie wynosić: <b>$konto</b>. ";

        }
        else die("Wartość wydatków zaplanowanych na <b>$mies[$i]</b> MUSI być liczbą równą lub większą od zera.");
    }
}



?>