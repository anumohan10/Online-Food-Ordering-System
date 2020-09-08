<?php
// Array with names
$a[] = "Avocado Soup";
$a[] = "Biryani";
$a[] = "Chana Masala";
$a[] = "Dosa";
$a[] = "Idli";
$a[] = "Wheat Pasta";
$a[] = "Spinach Rice";
$a[] = "Coconut Curry";
$a[] = "Stuffed Parathas";
$a[] = "Fajita Pasta";
$a[] = "Pasta";
$a[] = "Fried Rice";
$a[] = "Potato Soup";
$a[] = "Tacos";
$a[] = "Avocado Pasta";

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

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "not available currently" : $hint;
?>
