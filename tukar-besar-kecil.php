<?php
function tukar_besar_kecil($string){
    $out = "";
    for ($i=0; $i < strlen($string) ; $i++) {
        if(ctype_upper($string[$i])) {
            $out .= strtolower($string[$i]);
        } else {
            $out .= strtoupper($string[$i]);
        }
    } 
    return $out . "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>