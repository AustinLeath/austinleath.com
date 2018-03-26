<?php
// Array with names
// First and last names as well as just last names
$a[] = "Ben Pearson ---> TSG.Slurgus";
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
$a[] = "Logan Romich ---> TSG.Phishz";
$a[] = "Romich ---> TSG.Phishz";
$a[] = "Brennan Carr ---> TSG.Pluxt";
$a[] = "Carr ---> TSG.Pluxt";
$a[] = "Dalton Cady ---> TSG.Prince";
$a[] = "Cady ---> TSG.Prince";
$a[] = "Brandon Gonzalez ---> TSG.Kazuhira";
$a[] = "Gonzalez ---> TSG.Kazuhira";
//usernames
$a[] = '<p>test</p>';
$a[] = "TSG.Slurgus2.0";
$a[] = "TSG.Lethal";
$a[] = "TSG.Temp-0";
$a[] = "TSG.Jiffy";
$a[] = "TSG.Struck";
$a[] = "TSG.Phishz";
$a[] = "TSG.Prince";
$a[] = "TSG.Kazuhira";
$a[] = "TSG.Pluxt";

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
// if when output is == 0 then return asset = 0 > 1 => 1

// Output "There is no member with this name on record" if no hint was found or output correct values
echo $hint === "" ? "There is no member with this name on record" : $hint;
?>
