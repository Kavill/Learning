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
                    <table>
                        <tr>
                            <td>Czy jesteś już po wypłacie?</td><td><input type="radio" name="po_wyplacie" value="true" checked>Tak<input type="radio" name="po_wyplacie" value="false">Nie</td>
                        </tr>
                        <tr>
                            <td>Podaj stan Twojego konta: </td><td><input type="text" name="konto"></td>
                        </tr>
                        <tr>
                            <td>Podaj swoje miesięczne wynagrodzenie:</td> <td><input type="text" name="pensja"></td>
                        </tr>
                        <tr>
                            <td>Podaj stałe miesięczne wydatki (bilet miesięczny, rachunki itp.):</td><td><input type="text" name="stale"></td>
                        </tr>
                    <?php
                        include('month.php');
                        for($i=$month; $i<=12; $i++){
                        echo"<tr><td>Wprowadź planowane wydatki na miesiąc <b>$mies[$i]</b>: </td>";
                        echo"<td><input class='pole' type='text' name='$mies[$i]'></td></tr>";
                        }
                    ?>
                    </table>
                   <input type="submit" value="Oblicz">
                </form>
            </article>
        </section>
    </body>
</html>