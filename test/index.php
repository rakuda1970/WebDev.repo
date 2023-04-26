<?php

$deleteCacheTime = date('Y-m-d H:i:s', time() - 180 * 24 * 60 * 60 );
echo $deleteCacheTime;
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, [EE:DWI Less than minimum/EE] do " 
."eiusmod tempor incididunt ut labore et  [EE:DWI Assorted Lid Colors/EE] dolore magna aliqua. "
."Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

echo "<p>".$text."<p> <hr />";




$text = parseEntitiesFromPrintCharges($text);



function parseEntitiesFromPrintCharges($txt){


    preg_match_all('/((?<=\[EE:).*?(?=\/EE\]))/', $txt, $matches,PREG_PATTERN_ORDER);

    foreach($matches[0] AS $k => $v){
     $txt = str_replace('[EE:'.$v.'/EE]',"123456",$txt);
    }

    return $txt;

}


echo "<p>".$text."<p>";

?>
