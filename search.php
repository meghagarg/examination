<?php
$searchthis = "Anisha";

$handle = fopen("file.txt", "r");
if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
        if(strpos($buffer, $searchthis) !== FALSE)
            $matches = $buffer;
    }
    fclose($handle);
}

$ks = explode("-", $matches);
echo $ks[0];
echo "\n".$ks[1];
//show results:
//print_r($matches);
?>
