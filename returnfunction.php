<?php

function hello($hello1,$hello2)
{
	$result = $hello1 + $hello2;
	return $result;
}


//$sumoflatest = hello(10,20);

//echo "The Answer Is $sumoflatest";

function sum($math,$eng,$bangla)
{
	$result = $math + $eng + $bangla;
	return $result;
}

function avarage($totalValue)
{
	$st = $totalValue / 3;
	return $st;
}

$total = sum(80,30,50);
echo "The Total Result is ".$total ."<br>";

$avarageresult = avarage($total);
echo "Avarage Are: ".$avarageresult."%";

?>