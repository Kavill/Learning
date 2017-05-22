                                            <!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="description" content="To jest strona do testowania nauczonych skryptów">
        <meta name="viewport" content="width-device-width initial-scale=1">
    </head>
    
    <body>
     <?php
    $month = date("n");

    for($i=$month; $i<=12; $i++){
        $mies[$i] = $i;
    }

    $ile = count($mies);

    for($i=$month; $i<12; $i++){
        if($mies[$i]==1) $mies[$i]="Styczeń";
        elseif($mies[$i]==2) $mies[$i] = "Luty";
        elseif($mies[$i]==3) $mies[$i] = "Marzec";
        elseif($mies[$i]==4) $mies[$i] = "Kwiecień";
        elseif($mies[$i]==5) $mies[$i] = "Maj";
        elseif($mies[$i]==6) $mies[$i] = "Czerwiec";
        elseif($mies[$i]==7) $mies[$i] = "Lipiec";
        elseif($mies[$i]==8) $mies[$i] = "Sierpień";
        elseif($mies[$i]==9) $mies[$i] = "Wrzesień";
        elseif($mies[$i]==10) $mies[$i] = "Październik";
        elseif($mies[$i]==11) $mies[$i] = "Listopad";
        elseif($mies[$i]==12) $mies[$i] = "Grudzień";
        
    }
    ?>
        <header>Kalkulator oszczędności</header>
        
        <section>
            <article>
                <form method="post" action="kalkulator1.php">
                    Podaj stan Twojego konta: <input type="text" name="konto"><br/><br/>
                    Podaj swoje miesięczne wynagrodzenie: <input type="text" name="pensja"><br/><br/>
                    Podaj stałe miesięczne wydatki (bilet miesięczny, rachunki itp.): <input type="text" name="stale"><br/><br/>
                    <?php
                        for($i=$month; $i<12; $i++){
                        echo"Wprowadź planowane wydatki na miesiąc <b>$mies[$i]</b>: ";
                        echo"<input class='pole' type='text' name='$mies[$i]'><br/><br/>";
                        }
                    var_dump($mies);
                    ?>
                   <input type="submit" value="Oblicz">
                </form>
            </article>
        </section>
    </body>
</html>