<?php
echo"<html>";
include('month.php');
$po_wyplacie = $_POST['po_wyplacie'];
$konto = $_POST['konto'];
$pensja = $_POST['pensja'];
$wydatki = $_POST['stale'];
$balans = 0;
echo<<<PL
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
PL;


if(((is_numeric($pensja)==0)) || (is_numeric($konto)==0)){
    die("Wartości pensji i konta MUSZĄ być liczbą"); //obsługa błędu przy podaniu wartości nieliczbowych do zmiennych konto lub pensja
}

if($pensja==0){
    die("Brak przychodu miesięcznego"); //obsługa błędu przy wartości pensji = 0
}
echo"<table>";
echo"<tr><th></th><th>Kwota początkowa</th><th>Balans</th><th>Kwota po obliczeniach</th></tr>";
for($i = $month; $i <= 12; $i++){
    if(isset($_POST[$mies[$i]])){
        if((((is_numeric($_POST[$mies[$i]])) || ($_POST[$mies[$i]]==""))) && ($_POST[$mies[$i]] >= 0)){
            echo"<tr><td>Stan Twojego konta na miesiąc <b>$mies[$i]</b> będzie wynosić: </td><td><b>$konto PLN</b></td> ";
            if((($po_wyplacie == "true")) && ($i == $month)){ 
                $konto = $konto - $wydatki - $_POST[$mies[$i]];
            }
            else $konto = $konto + $pensja - $wydatki - $_POST[$mies[$i]];
            $balans = $pensja - $wydatki - $_POST[$mies[$i]];
            if($balans > 0) echo"<td><b style='color: #0f0;'>+$balans PLN</b></td>";
            elseif($balans == 0) echo"<td><b>$balans PLN</b></td>";
            elseif($balans < 0) echo"<td><b style='color: #f00;'>$balans PLN</b></td>";
            echo"<td><b>$konto PLN</b></td>";
        }
        else die("Wartość wydatków zaplanowanych na <b>$mies[$i]</b> MUSI być liczbą równą lub większą od zera.");
    }
}
echo"</table>";
echo"</body></html>"
?>