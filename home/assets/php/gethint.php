<?php
// Array with names
$a[] = "Ben ---> TSG.Slurgus";
$a[] = "Ben ---> TSG.Slurgus2.0";
$a[] = "Austin ---> TSG.Lethal";
$a[] = "Jake ---> TSG.Temp-0";
$a[] = "Henry ---> TSG.Jiffy";
$a[] = "Matthew ---> TSG.Struck";
$a[] = "Logan ---> TSG.Phishz";
$a[] = "Dalton ---> TSG.Prince";
$a[] = "Brandon ---> TSG.Kazuhira";
$a[] = "TSG.Slurgus";
$a[] = "TSG.Slurgus2.0";
$a[] = "TSG.Lethal";
$a[] = "TSG.Temp-0";
$a[] = "TSG.Jiffy";
$a[] = "TSG.Struck";
$a[] = "TSG.Phishz";
$a[] = "TSG.Prince";
$a[] = "TSG.Kazuhira";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "There is no member with this name on record" if no hint was found or output correct values
echo $hint === "" ? "There is no member with this name on record" : $hint;
?>
