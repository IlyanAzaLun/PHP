<?php
// UNIQUE MULTIDIM ARRAY
function unique_multidim_array($array, $key)
{
  $temp_array = array();
  $i = 0;
  $key_array  = array();
  foreach($array as $val) {
    if (!in_array($val[$key], $key_array)) {
      $key_array[$i] = $val[$key];
      $temp_array[$i] = $val;
    }
    $i++;
  }
  return $temp_array;
}

// PREPARE DATA
$a=array(
  0 => array("A" => 1, "B"=> "A"),
  1 => array("A" => 2, "B"=> "B"),
  2 => array("A" => 3, "B"=> "C"),
  3 => array("A" => 3, "B"=> "D"),
  4 => array("A" => 4, "B"=> "E"),
  5 => array("A" => 4, "B"=> "F"),
  6 => array("A" => 4, "B"=> "G"),
  7 => array("A" => 5, "B"=> "H"),
);
// PREPARE UNIQUE KEY 'A'
$b = unique_multidim_array($a, 'A');
$i = 0;
// PROCESSING SEARCH AND REDECRALRE VALUE
while ($i < count($a)) { // LOOPING UNTIL END OF ARRAY
  if($a[$i]["A"] == $a[$j]["A"]){ // IF KEY IS SAME ADD COUNTER
    $b[$i]['item'][$j]=$a[$j]; // ADD VALUE TO UNIQUE KEY
    $j++;
  }else{  // SELE ADD ANOTHER COUNTER
    $i++;
  }
}



/* FROM THIS
====================================================
|1|
|  A|
====================================================
|2|
|  B|
====================================================
|3|
|  C|
====================================================
|3|
|  D|
====================================================
|4|
|  E|
====================================================
|4|
|  F|
====================================================
|4|
|  G|
====================================================
|5|
|  H|
====================================================
*/

/* TO THIS
====================================================
|1|
|  A|
====================================================
|2|
|  B|
====================================================
|3|
|  C|
|  D|
====================================================
|4|
|  E|
|  F|
|  G|
====================================================
|5|
|  H|
====================================================
*/
?>
