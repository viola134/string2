<?php
$str1 = "'Привет!' - сказала мама" ;
$str2 = "'Привет! - сказала мама" ;
$rw = sibstr_count($str1, "'");
if ($check % 2 == 0){
    echo "Right";
} else{
    echo "wrong";
}