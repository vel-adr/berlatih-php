<?php
function skor_terbesar($arr){
    $max = array();
    for($i=0; $i<count($arr); $i++){
        $key = $arr[$i]["kelas"];
        if (!array_key_exists($key, $max)){
            $max[$key] = $arr[$i];
        }
        else{
            if($max[$key]["nilai"] < $arr[$i]["nilai"]){
                $max[$key] = $arr[$i];
            }
        }
    }
    return $max;
}

// TEST CASES
$skor = [
[
"nama" => "Bobby",
"kelas" => "Laravel",
"nilai" => 78
],
[
"nama" => "Regi",
"kelas" => "React Native",
"nilai" => 86
],
[
"nama" => "Aghnat",
"kelas" => "Laravel",
"nilai" => 90
],
[
"nama" => "Indra",
"kelas" => "React JS",
"nilai" => 85
],
[
"nama" => "Yoga",
"kelas" => "React Native",
"nilai" => 77
],
];

print_r(skor_terbesar($skor));
/* OUTPUT
Array (
[Laravel] => Array
(
[nama] => Aghnat
[kelas] => Laravel
[nilai] => 90
)
[React Native] => Array
(
[nama] => Regi
[kelas] => React Native
[nilai] => 86
)
[React JS] => Array
(
[nama] => Indra
[kelas] => React JS
[nilai] => 85
)
)
*/
?>