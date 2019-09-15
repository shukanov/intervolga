<?php
	$my_array = array();
	
	for($i = 0; $i < 5; $i++)
	{
		$my_array[$i] = rand(0, 2);
		echo "$my_array[$i]  ";
	}

	$count = count($my_array);		// количество элементов в массиве
	$counter1 = 0;			// счетчик1
	$counter2 = 0;			// счетчик2
	for($i = 1; $i < $count; $i++)
	{
		if($my_array[$i] == $my_array[$i - 1])
		{
			$counter1++;
		}
	}
	for($i = 1; $i < $count; $i++)
	{
		if($my_array[$i] == $my_array[$i - 1])
		{
			$counter2++;
			$i++;
		}
	}
	echo "<hr>  Number of consecutive pairs1: $counter1 <br>";	// в данном случае считаются все пары, элементы
																// которых
																// стоят рядом. Например, в массиве 13344458
																// 3 пары
	echo "<hr>  Number of consecutive pairs2: $counter2 <br>";	// в этом же случае сравниваются только элементы
																// разбитые по парам. Например, в массиве 13344458
																// 2 пары.


?>