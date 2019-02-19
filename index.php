<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
        <?php
            include("fgv.php");
            $sorsolt=sorsolas();
            var_dump($sorsolt);
     
     lottoszelveny($sorsolt);
        ?>
    </body>
</html>
