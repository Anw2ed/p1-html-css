<?php

$uur = date("H");

echo $uur;

if($uur > 6 & $uur <12)

{
    echo "Het is ochtend";
}

elseif($uur > 11 & $uur <1
{
    echo "Het is middag";
}

elseif($uur > 18 & $uur <24) 
{
    echo "Het is avond";
}

elseif($uur > 24 & $uur <6)
{
    echo "Het is nacht";
}

?>