                                            <!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="description" content="To jest strona do testowania nauczonych skryptów">
        <meta name="viewport" content="width-device-width initial-scale=1">
    </head>
    
    <body>
        <header>Planowane wydatki</header>
        
        <section>
            <article>
                <form method="post" action="kalkulator1.php">
                    <table>
                        
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