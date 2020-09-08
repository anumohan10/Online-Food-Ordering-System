<?php
// Array with names
$a[] = "Chicken Pancake";
$a[] = "Biryani";
$a[] = "Chingri Macher Malaikari";
$a[] = "Egg Curry";
$a[] = "Idli";
$a[] = "Fish Pickle";
$a[] = "Pomfret Fish";
$a[] = "Mini Chicken Quiche";
$a[] = "Hyderabadi Egg Biryani";
$a[] = "Tandoori Chicken";
$a[] = "Pasta";
$a[] = "Rice";
$a[] = "Chicken Soup";
$a[] = "Tandoori Prawns";
$a[] = "Yakitori Chicken";

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
