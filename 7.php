<?php
function gen_one_to_three($n) {
	$num1 = 0;	 
	$num2 = 1; 
	$counter = 0;
    while ($counter <= $n){
		 
		$num3 = $num2 + $num1; 
		$num1 = $num2; 
		$num2 = $num3; 
		$counter = $counter + 1;
		
		yield $num1;
	}
	
		
}
echo "<br />";
echo "<br />";
$k = $_POST['liczba'];
echo "Podana liczba to $k";
echo "<br />";
echo "<br />";
echo "Ciąg fibacciego dla zakresu podanej liczby wynosi:&nbsp; ";
$generator = gen_one_to_three($k);
foreach ($generator as $value) {
    echo "$value\n";
}


?>
