<?php

class lottosorsolas {
    var $hanyas;
    var $szamokszama;
    var $oszlopszam;
    // ez hozza létre a sorsolást
    function __construct($hanyas)
    {
        if($hanyas==5)
        {
            $this->hanyas=5;
            $this->szamokszama=90;
            $this->oszlop=15;
        }
    }
    function sorsolas()
    {
    $kihuzottak=0;
    while($kihuzottak<$this->hanyas)
    {
    $sorsoltszam=rand(1,$this->szamokszama);
    if (!isset($tomb[$sorsoltszam]))
        {
        $tomb[$sorsoltszam]=1;
        $kihuzottak++;
        }
    }
    return $tomb;
    //var_dump($tomb);
    }
    function lottoszelveny()
     {
        $sorsolt=$this->sorsolas();
        echo '<table border="1">';
	for($i=1; $i<=$this->szamokszama; $i++)
	{   
		if($i%$this->oszlop==1)
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
		if($i%$this->oszlop==0)
		{
			echo "</tr>\n";
		}
	}
	echo "</table>";
     }
}
