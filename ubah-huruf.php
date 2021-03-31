<?php
function ubah_huruf($string){
 $abjad = "abcdefghijklmnopqrstuvwxyz";
 $out = "";
 for($i = 0; $i < strlen($string); $i++) {
     $pos = strpos($abjad, $string[$i]);
     $out .= substr($abjad, $pos + 1, 1);
 }
 return $out. "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>