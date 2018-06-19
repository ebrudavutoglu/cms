<?php
function convertToSEO($text){
    
        $turkce     = array("ç", "Ç", "ğ", "Ğ", "ü","Ü","ö","Ö","ş","Ş","ı","İ",".",",","/","?","*","_","|","=","!","(",")","{","}","[","]"," ");
        $convert    = array("c", "c", "g", "g", "u","U","o","o","s","s","i","i","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-","-");

        return strtolower(str_replace($turkce, $convert, $text));

}