<?php
  $ukuran = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];
  $nilai = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
  

  function noUkuran($value){
    $results = '';
    
    for ($index = 0; $index < $value; $index++) {
      while ($value >= $GLOBALS['nilai'][$index]) {
        $results = $results . $GLOBALS['ukuran'][$index];
        $value -= $GLOBALS['nilai'][$index];
      }
    }

    return $results;
  }

  echo '58 <br/>';
  echo noUkuran(58) . '<br /><br />';
  echo '1994 <br/>';
  echo noUkuran(1994) . '<br /><br />';
  echo '119 . 140 . 150 <br/>';
  echo noUkuran(119) . ' . ' . noUkuran(140) . ' . ' . noUkuran(150) . '<br />';
?>
