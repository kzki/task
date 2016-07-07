<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
$array = array('apple', 'banana', 'orange');
	 ?>
	 <pre>
	 	<?php print_r($array); 
	 		echo $array[0];
	 	?>
	 	<?php
			$array = array('red' => 'apple', 'yellow' => 'banana', 'orange' => 'orange');
	 		print_r($array);
	 	?>
	 	<?php 
	 		$array = array(
	 			'red' => array('apple', 'cherry'),
	 			'yellow' => array('banana', 'mango'), 
	 			'orange' => 'orange');
	 		print_r($array);
	 		echo $array['yellow'][1];
	 		echo $array['red'][1], $array['yellow'][1];
	 	 ?>
	 </pre>
</body>
</html>
