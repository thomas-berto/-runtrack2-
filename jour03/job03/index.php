<?php
			$str ="I'm sorry Dave I'm afraid I can't
do that";
 $voyelles=array("a","e","i","o","u","y","I");
$i = 0;
while ($i < strlen($str)) 
{
    $i2 = 0;
    while ($i2 < count($voyelles)) 
    {
        if ($str[$i] == $voyelles[$i2]) 
        {
            echo $str[$i]; 
        }
        $i2 = $i2 + 1;
            
    }
    $i = $i + 1;
}
?>
