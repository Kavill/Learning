<?php
    $month = date("n");
    $year = date("Y");

    for($i=1; $i<=12; $i++){
        $mies[$i] = $i;
    }

    $ile = count($mies);

    for($i=1; $i<=12; $i++){
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