<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
        <?php
            //függvények kezdete
            include("fgv.php");
            $sorsolt=sorsolas();
            var_dump($sorsolt);
            lottoszelveny($sorsolt);
            //függvények vége
            
            //objektumorientált kezdete
            include("lottosorsolas.php");
            $friss=new lottosorsolas(5);
            $friss->lottoszelveny();
            //objektumorientált vége
        ?>
    </body>
</html>
