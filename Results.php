<?php  
if(isset($_GET['getSum'])) {

	// String passed inside our GET variable comes from the name attribute of our input element 
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];


	// Print the result
	echo "<h2>The answer is " . ($b * $b - (4*($a * $c))) . "</h2>";
}
?>
