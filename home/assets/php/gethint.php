<?php
// Array with names
// First and last names as well as just last names
$a[] = 'Ben Pearson ---> TSG.Slurgus <a href="www.google.com">R6DB</a>';
$a[] = 'Pearson ---> TSG.Slurgus <a href="www.google.com">R6DB</a>';
$a[] = 'Ben Pearson ---> TSG.Slurgus2.0 <a href="www.google.com">R6DB</a>';
$a[] = 'Pearson ---> TSG.Slurgus2.0 <a href="www.google.com">R6DB</a>';
$a[] = 'Austin Leath ---> TSG.Lethal <a href="www.google.com">R6DB</a>';
$a[] = 'Leath ---> TSG.Lethal <a href="www.google.com">R6DB</a>';
$a[] = 'Jake Martin ---> TSG.Temp-0 <a href="www.google.com">R6DB</a>';
$a[] = 'Martin ---> TSG.Temp-0 <a href="www.google.com">R6DB</a>';
$a[] = 'Henry Jardine ---> TSG.Jiffy <a href="www.google.com">R6DB</a>';
$a[] = 'Jardine ---> TSG.Jiffy <a href="www.google.com">R6DB</a>';
$a[] = 'Matthew Osten ---> TSG.Struck <a href="www.google.com">R6DB</a>';
$a[] = 'Osten ---> TSG.Struck <a href="www.google.com">R6DB</a>';
$a[] = 'Logan Romich ---> TSG.Phishz <a href="www.google.com">R6DB</a>';
$a[] = 'Romich ---> TSG.Phishz <a href="www.google.com">R6DB</a>';
$a[] = 'Brennan Carr ---> TSG.Pluxt <a href="www.google.com">R6DB</a>';
$a[] = 'Carr ---> TSG.Pluxt <a href="www.google.com">R6DB</a>';
$a[] = 'Dalton Cady ---> TSG.Prince <a href="www.google.com">R6DB</a>';
$a[] = 'Cady ---> TSG.Prince <a href="www.google.com">R6DB</a>';
$a[] = 'Brandon Gonzalez ---> TSG.Kazuhira <a href="www.google.com">R6DB</a>';
$a[] = 'Gonzalez ---> TSG.Kazuhira <a href="www.google.com">R6DB</a>';
//usernames
$a[] = 'TSG.Slurgus <a href="https://www.google.com">R6DB</a>';
$a[] = 'TSG.Slurgus2.0 <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Lethal <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Temp-0 <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Jiffy <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Struck <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Phishz <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Prince <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Kazuhira <a href="www.google.com">R6DB</a>';
$a[] = 'TSG.Pluxt <a href="www.google.com">R6DB</a>';

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
