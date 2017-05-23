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
                <form method="post" action="kalkulator1.php">
                    Podaj stan Twojego konta: <input type="text" name="konto"><br/><br/>
                    Podaj swoje miesięczne wynagrodzenie: <input type="text" name="pensja"><br/><br/>
                    Podaj stałe miesięczne wydatki (bilet miesięczny, rachunki itp.): <input type="text" name="stale"><br/><br/>
                    <?php
                        include('month.php');
                        for($i=$month; $i<=12; $i++){
                        echo"Wprowadź planowane wydatki na miesiąc <b>$mies[$i]</b>: ";
                        echo"<input class='pole' type='text' name='$mies[$i]'><br/><br/>";
                        }
                    ?>
                   <input type="submit" value="Oblicz">
                </form>
            </article>
        </section>
    </body>
</html>