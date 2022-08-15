<pre>
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

// 
$j = 0;
$i = 0;

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
$b = unique_multidim_array($a, 'A');		

// PROCESSING SEARCH AND REDECRALRE VALUE
while ($i < count($a)) {
  if($a[$i]["A"] == $a[$j]["A"]){
    echo $i.' '.$j;
    $b[$i]['item'][$j]=$a[$j];
    $j++;
  }else{
    $i++;
  }
  echo '<br>';
}

// VIEW RESULT
echo 'start<br>';
print_r("====================================================<br>");
foreach ($b as $key => $value) {
  print_r("|".$value['A']."|<br>");
  foreach ($value['item'] as $key => $item) {
    print_r("|  ".$item['B']."|<br>");
    # code...
  }
print_r("====================================================<br>");
}
echo 'end<br>';
?>
</pre>
