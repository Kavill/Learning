<?php
session_start();
echo"<html>";
include('month.php');
$po_wyplacie = $_SESSION['po_wyplacie'];
$konto = $_SESSION['konto'];
$pensja = $_SESSION['pensja'];
$wydatki = $_SESSION['stale'];
$balans = 0;
$overflow = 0;
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
    die("Brak przychodu miesięcznego!"); //obsługa błędu przy wartości pensji = 0
}
echo"<table>";
echo"<tr><th></th><th>Kwota początkowa</th><th>Balans</th><th>Kwota po obliczeniach</th></tr>";
for($i = $month; $i <= $_SESSION['na_ile']+$month; $i++){
    if($i<=12){                         // obliczanie tegorocznych miesięcy
        if(isset($_POST[$mies[$i]])){
            if((((is_numeric($_POST[$mies[$i]])) || ($_POST[$mies[$i]]==""))) && ($_POST[$mies[$i]] >= 0)){
                echo'<tr><td>Stan Twojego konta na miesiąc <b>',$mies[$i],' ',$year,'</b> będzie wynosić: </td><td><b>',$konto,' PLN</b></td> ';
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
    else{                               // obliczanie miesięcy z następnego roku
        $overflow = $i - 12;
        if(isset($_POST[$mies[$overflow]])){
            if((((is_numeric($_POST[$mies[$overflow]])) || ($_POST[$mies[$overflow]]==""))) && ($_POST[$mies[$overflow]] >= 0)){
                echo'<tr><td>Stan Twojego konta na miesiąc <b>',$mies[$overflow],' ',$year+1,'</b> będzie wynosić: </td><td><b>',$konto,' PLN</b></td> ';
                if((($po_wyplacie == "true")) && ($i == $month)){ 
                    $konto = $konto - $wydatki - $_POST[$mies[$overflow]];
                }
                else $konto = $konto + $pensja - $wydatki - $_POST[$mies[$overflow]];
                $balans = $pensja - $wydatki - $_POST[$mies[$overflow]];
                if($balans > 0) echo"<td><b style='color: #0f0;'>+$balans PLN</b></td>";
                elseif($balans == 0) echo"<td><b>$balans PLN</b></td>";
                elseif($balans < 0) echo"<td><b style='color: #f00;'>$balans PLN</b></td>";
                echo"<td><b>$konto PLN</b></td>";
            }
            else die("Wartość wydatków zaplanowanych na <b>$mies[$overflow]</b> MUSI być liczbą równą lub większą od zera.");
        }
    }
}
echo"</table>";
echo"</body></html>"
?>