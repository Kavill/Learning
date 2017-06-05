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
                <form method="post" action="index.php">
                    <table>
                        <?php
                            include('month.php');
                            echo"<tr><td>Na ile miesięcy: </td><td><select>";
                            for($i=1; $i<=24; $i++){
                                echo"<option value='$i'>$i</option>";
                            }
                            echo"</select></td></tr>";
                        ?>
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
                    
                    </table>
                   <input type="submit" value="Dalej">
                </form>
            </article>
        </section>
    </body>
</html>