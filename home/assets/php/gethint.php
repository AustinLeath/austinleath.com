<?php
// Array with names
$a[] = "Ben Pearson ---> TSG.Slurgus ('<a href="https://r6db.com/player/8894b513-7067-473e-a001-e316104e32ea" target="_blank">R6DB Statistics</a>)'";
$a[] = "Pearson ---> TSG.Slurgus";
$a[] = "Ben Pearson ---> TSG.Slurgus2.0";
$a[] = "Pearson ---> TSG.Slurgus2.0";
$a[] = "Austin Leath ---> TSG.Lethal";
$a[] = "Leath ---> TSG.Lethal";
$a[] = "Jake Martin ---> TSG.Temp-0";
$a[] = "Martin ---> TSG.Temp-0";
$a[] = "Henry Jardine ---> TSG.Jiffy";
$a[] = "Jardine ---> TSG.Jiffy";
$a[] = "Matthew Osten ---> TSG.Struck";
$a[] = "Osten ---> TSG.Struck";
$a[] = "Logan ---> TSG.Phishz";

$a[] = "Dalton Cady ---> TSG.Prince";
$a[] = "Cady ---> TSG.Prince";
$a[] = "Brandon Gonzalez ---> TSG.Kazuhira";
$a[] = "Gonzalez ---> TSG.Kazuhira";
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
