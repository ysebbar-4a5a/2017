<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$text = "  dEzE TeKSt wOrDt opgeSchoond  ";
echo $text. "<br>";
function textCleaner($krommetext){
    $newtext = strtolower($krommetext);
    $newtext = ltrim($newtext);
    $newtext = rtrim($newtext);
    return ucwords($newtext);
}

echo textCleaner($text);