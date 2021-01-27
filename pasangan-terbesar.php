<?php
function pasangan_terbesar($angka){
    $max = 0;
    for($i=0; $i<strlen($angka); $i++){
        $subint = intval(substr($angka,$i,2));
        if($subint > $max){
            $max = $subint;
        }
    }
    return $max."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>