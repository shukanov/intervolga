<?php 
	$a = "If snow is able to warm me up Don’t hesitate to help Nobody here is up To sing me last farewell I will become white dream And deep in your thoughts will gleam Shelter myself within… Refrain: On my moon I stay All the time alone Watching bonfire burn Hearing shadows groan On my own moon vanish I away I'm my own king, judge of my own fate.";
	
	$link = "https://music.yandex.ru/artist/4873936";
	
	$c = mb_strimwidth($a, 0, 180);
	$word1;
	$word2;
	$array1 = explode(" ", $c);
	for($i = count($array1); $i>=0; $i--)
	{
		$word1 = $array1[0];
		$word2 = $array1[1];
	}

	

	echo $c;
	

	echo '<a href="' . $link . '"><br><br>radio </a>'
	
?>