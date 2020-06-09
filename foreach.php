<?php

$sales =[
	"goo" => 134,
	"foo" => 23444
];

$colors = [234,244,412,134];

foreach ($sales as $key => $value){
	echo "key:$key, value:$value";
}

foreach ($sales as $key => $value){
	echo "key:$key, value:$value";
}

foreach ($colors as $value) :
	echo "$value ";
endforeach;

?>

<ul>
	<?php foreach ($sales as $key => $value) :?>
		<li><?php echo "$value"?></li>
	<?php endforeach ?>
</ul>