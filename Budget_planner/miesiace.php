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
                        session_start();
                        include('month.php');
                        $overflow = 0;
                        $_SESSION['na_ile'] = $_POST['na_ile'];
                        $_SESSION['po_wyplacie'] = $_POST['po_wyplacie'];
                        $_SESSION['konto'] = $_POST['konto'];
                        $_SESSION['pensja'] = $_POST['pensja'];
                        $_SESSION['stale'] = $_POST['stale'];
                        
                        for($i=$month; $i<=$_SESSION['na_ile']+$month; $i++){          // wypisanie wydatków na daną ilość miesięcy
                            if($i<=12){
                                echo'<tr><td>Wprowadź planowane wydatki na miesiąc <b>',$mies[$i],' ',$year,'</b>: </td>';
                                echo"<td><input class='pole' type='text' name='$mies[$i]'></td></tr>";
                            }
                            if($i>12){
                                $overflow = $i - 12;
                                echo'<tr><td>Wprowadź planowane wydatki na miesiąc <b>',$mies[$overflow],' ',$year+1,'</b>: </td>';
                                echo"<td><input class='pole' type='text' name='$mies[$overflow]'></td></tr>";
                            }
                        }
                    ?>
                    </table>
                   <input type="submit" value="Oblicz">
                </form>
            </article>
        </section>
    </body>
</html>