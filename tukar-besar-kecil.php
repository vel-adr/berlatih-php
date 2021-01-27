<?php
function tukar_besar_kecil($string){
    $newstr = '';
    for($i=0; $i<strlen($string); $i++){
        $asci = ord($string[$i]);
        if($asci >= 65 && $asci <= 90){
            $newstr .= chr($asci+32);
        }
        else if ($asci >= 97) {
            $newstr .= chr($asci-32);
        }
        else{
            $newstr .= chr($asci);
        }
    }
    return $newstr."<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>