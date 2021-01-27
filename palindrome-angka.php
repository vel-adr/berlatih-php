<?php

function palindrome_angka($angka) {
    if ($angka < 9){
        return $angka+1;
    }
    else{
        while (strval($angka) != strrev(strval($angka))){
            $angka += 1;
        }
        return $angka;
    }
}

// TEST CASES

echo palindrome_angka(8) . "<br>"; // 9
echo palindrome_angka(10) . "<br>"; // 11
echo palindrome_angka(117) . "<br>"; // 121
echo palindrome_angka(175) . "<br>"; // 181
echo palindrome_angka(1000) . "<br>"; // 1001

?>