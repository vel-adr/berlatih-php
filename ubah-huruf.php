<?php
function ubah_huruf($string){
    $newstr = '';
    for($i=0; $i<strlen($string); $i++){
        $ascval = ord($string[$i]);
        if($ascval == 51){
            $newstr .= chr(26);
        }
        else{
            $newstr .= chr($ascval+1);
        }
    }
    return $newstr."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>