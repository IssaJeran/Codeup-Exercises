<?php 

$array1 = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Tim', 'Jon'];

$array2 = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Tom'];

// if some elements dont exists, "add" them...
if(count($array1) != count($array2))
{
  foreach($array as $key => $value):
      if(!isset($array2[$key]) $array2[$key] = NULL;
  endforeach;
}

// now, combine them in classic way...
$combined = array_combine($array1,$array2);