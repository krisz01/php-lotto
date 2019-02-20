<?php

class lottosorsolas {
    var $hanyas;
    var $szamokszama;
    var $oszlopszam;
    // ez hozza létre a sorsolást
    function __construct($hanyas)
    {
    }
    function sorsolas()
    {
    $kihuzottak=0;
    while($kihuzottak<5)
    {
    $sorsoltszam=rand(1,90);
    if (!isset($tomb[$sorsoltszam]))
        {
        $tomb[$sorsoltszam]=1;
        $kihuzottak++;
        }
    }
    return $tomb;
    //var_dump($tomb);
    }
    function lottoszelveny($sorsolt)
     {
        $szamokszama=90;
        $oszlop=15;
        echo '<table border="1">';
	for($i=1; $i<=$szamokszama; $i++)
	{
		if($i%$oszlop==1)
		{
			echo "<tr>";
		}
		if(isset($sorsolt[$i]))
		{
			$hatterszin="#FF0000";
		}
		else
		{
			$hatterszin="FFFFFF";
		}
		echo "<td bgcolor=\"$hatterszin\">";
			echo $i;
		echo "</td>";
		if($i%$oszlop==0)
		{
			echo "</tr>\n";
		}
	}
	echo "</table>";
     }
}
