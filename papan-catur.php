<?php

function papan_catur($angka) {
    $str = '';
    for($i=0; $i<$angka; $i++){
        if($i%2 == 0){
            for($x=0; $x<$angka; $x++){
                $str .= "# ";
            }
        }
        else {
            for($y=0; $y<$angka-1; $y++){
                $str .= " #";
            }
        }
        $str .= "<br>";
    }
    return $str."<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
# # #
# # # #
# # #
*/

echo papan_catur(8);
/*
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
# # # #
# # # # #
# # # #
# # # # #
*/