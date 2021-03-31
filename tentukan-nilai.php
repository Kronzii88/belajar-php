<?php
function tentukan_nilai($number)
{
    if($number >= 85 && $number <= 100) {
        echo "Sangat Baik <br>";
    } elseif ($number >= 70 && $number < 85) {
        echo "Baik <br>";
    } elseif ($number >= 65 && $number < 70) {
        echo "Cukup <br>";
    } else {
        echo "Kurang <br>";
    }
}

//TEST CASES
tentukan_nilai(98); //Sangat Baik
tentukan_nilai(76); //Baik
tentukan_nilai(67); //Cukup
tentukan_nilai(43); //Kurang
?>