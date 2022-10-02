<?php
$str1 = "'Привет!' - сказала мама" ;
$str2 = "'Привет! - сказала мама" ;
$rw = substr_count($str1, "'");
if ($rw % 2 == 0){
    echo "Right";
} else{
    echo "wrong";
}
