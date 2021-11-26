<?php
function prim($primszame)
{
	$osztoi=array();
    $darabszam=0;
    for ($i = 1;$i<= $primszame;$i++)
	{
        if ($primszame % $i == 0)
		{
	    	$darabszam++;
			$osztoi[]="$i";

	    }
	}
	print $primszame;
	print "<br>";
	if ($darabszam == 1)
	{
	    print("Az ".$primszame." nem prímszam");
	}
	else if ($darabszam == 2)
	{
	    print("Ez egy prímszam");
	}
	else
	{
	    print("Ez nem egy prímszam");
	}
	print "<br>";
	print ("Az osztói: ");
	for($i=0;$i<count($osztoi);$i++)
	{
		print $osztoi[$i]."  ";
	}
	print "<br>";
	print("Összesen ".count($osztoi)." db osztója van");
}
print prim(10);
?>