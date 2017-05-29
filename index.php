<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($i=0; $i<250000;$i++){
            
            if ( ($i % 100) == 0){
                echo ("i:$i, ");    
                if (($i % 10) == 0) {
                    echo '</br>';
                }
            } 
        if ($i<10) {echo ("i:$i");}
        require_once 'DbMysql.php';
        dbmysql::connect('localhost', 'dbrhr', 'root', '');
        $uzivatele = DbMySql::queryAll('select * from uzivatel order by datumNarozeni desc');
        }
        //echo '<table border ="7" style="text-align: center">';
        // nadpisy sloupců
        /*
        echo ("Spuštěno na php verzi:".phpversion()."<br/>");
        echo("<tr style>");
        echo ("<td>"."JMÉNO"."</td>");
        echo ("<td>"."PŘÍJMENÍ"."</td>");
        echo ("<td>"."DATUM NAROZENÍ"."</td>");
        echo ("<td>"."VÁHA"."</td>");
        echo ("<td>"."PSČ"."</td>");
        echo("</tr>");
         * 
         */
        //hodnoty sloupců:
        /*foreach ($uzivatele as $uzv){
            echo'<tr style="text-align: left">' ;
            echo ("<td>".$uzv['jmeno']."</td>");
            echo ("<td>".$uzv['prijmeni']."</td>");
            echo ("<td>".$uzv['datumNarozeni']."</td>");
            echo ("<td>".$uzv['vaha']."</td>");
            echo ("<td>".$uzv['psc']."</td>");
            echo'</tr>' ;
        }
       echo ("2, prijmeni".$uzivatele[2]['prijmeni']."<br/>");
       $pocetZaznamu = count($uzivatele);
       echo ("Posledni:".$uzivatele[$pocetZaznamu -1]['prijmeni']."<br/>");
         * 
         */
               
       

        /* výpis Adresáře Vario */
        /*require_once 'DbMssql.php';
        dbmssql::connect('localhost', 'dbrhr', 'root', '');*/
        ?>
    </body>
</html>
