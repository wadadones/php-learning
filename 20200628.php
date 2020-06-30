<?



function returns() {
  $array = array(1, 2, 3, "4", 5, "6", "78", array(1,2,3));
  echo $array[7][2]."\n";
  return $array;
}

foreach (returns() as $key => $value) {
  echo "{$key} => {$value}\n";
}

var_dump(returns());


?>
