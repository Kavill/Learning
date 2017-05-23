<?php
$konto = $_POST['konto'];
$pensja = $_POST['pensja'];
$wydatki = $_POST['stale'];


if(((is_numeric($pensja)==0)) || (is_numeric($konto)==0)){
    die("Wartości pensji i konta MUSZĄ być liczbą"); //obsługa błędu przy podaniu wartości nieliczbowych do zmiennych konto lub pensja
}

if($pensja==0){
    die("Brak przychodu miesięcznego"); //obsługa błędu przy wartości pensji = 0
}

if(isset($_POST['Styczeń'])){
    if((is_numeric($_POST['Styczeń'])) || $_POST['Styczeń']=="" ){
    $konto = $konto + $pensja - $wydatki - $_POST['Styczeń'];
    echo"Wartość Twojego konta w styczniu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na styczeń musi być liczbą");
}

if(isset($_POST['Luty'])){
    if((is_numeric($_POST['Luty'])) || $_POST['Luty'] =="" ){
    $konto = $konto + $pensja - $wydatki - $_POST['Luty'];
    echo"Wartość Twojego konta w lutym: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na luty musi być liczbą");
}

if(isset($_POST['Marzec'])){
    if((is_numeric($_POST['Marzec'])) || $_POST['Marzec'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Marzec'];
    echo"Wartość Twojego konta w marcu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na marzec musi być liczbą");
}

if(isset($_POST['Kwiecień'])){
    if((is_numeric($_POST['Kwiecień'])) || $_POST['Kwiecień'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Kwiecień'];
    echo"Wartość Twojego konta w kwietniu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na kwiecień musi być liczbą");
}

if(isset($_POST['Maj'])){
    if((is_numeric($_POST['Maj'])) || $_POST['Maj'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Maj'];
    echo"Wartość Twojego konta w maju: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na maj musi być liczbą");
}

if(isset($_POST['Czerwiec'])){
    if((is_numeric($_POST['Czerwiec'])) || $_POST['Czerwiec'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Czerwiec'];
    echo"Wartość Twojego konta w czerwcu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na czerwiec musi być liczbą");
}

if(isset($_POST['Lipiec'])){
    if((is_numeric($_POST['Lipiec'])) || $_POST['Lipiec'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Lipiec'];
    echo"Wartość Twojego konta w lipcu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na lipiec musi być liczbą");
}

if(isset($_POST['Sierpień'])){
    if((is_numeric($_POST['Sierpień'])) || $_POST['Sierpień'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Sierpień'];
    echo"Wartość Twojego konta w sierpniu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na sierpień musi być liczbą");
}

if(isset($_POST['Wrzesień'])){
    if((is_numeric($_POST['Wrzesień'])) || $_POST['Wrzesień'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Wrzesień'];
    echo"Wartość Twojego konta we wrześniu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na wrzesień musi być liczbą");
}

if(isset($_POST['Październik'])){
    if((is_numeric($_POST['Październik'])) || $_POST['Październik'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Październik'];
    echo"Wartość Twojego konta w październiku: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na październik musi być liczbą");
}

if(isset($_POST['Listopad'])){
    if((is_numeric($_POST['Listopad'])) || $_POST['Listopad'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Listopad'];
    echo"Wartość Twojego konta w listopadzie: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na listopad musi być liczbą");
}

if(isset($_POST['Grudzień'])){
    if((is_numeric($_POST['Grudzień'])) || $_POST['Grudzień'] =="" ){
    $konto =$konto + $pensja - $wydatki - $_POST['Grudzień'];
    echo"Wartość Twojego konta w grudniu: <b>$konto</b><br/><br/>";
    }
    else die("Wartość wydatków zaplanowanych na grudzień musi być liczbą");
}

?>