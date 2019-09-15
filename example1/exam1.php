<?php 
	$a = "If snow is able to warm me up Don’t hesitate to help Nobody here is up To sing me last farewell I will become white dream And deep in your thoughts will gleam Shelter myself within… Refrain: On my moon I stay All the time alone Watching bonfire burn Hearing shadows groan On my own moon vanish I away I'm my own king, judge of my own fate.";
	
	$link = "https://music.yandex.ru/artist/4873936";
	
	$text = mb_strimwidth($a, 0, 180);	//обрезание текста до 180 символов
	$arr = str_split($text);			// преобразованиестроки в массив
	$r = 0;

	$count = count($arr);				// возврат количества символов
	for($i = 0; $i < $count; $i++)
	{
		if($arr[$i] == " ")
		{
			$t = $r;
			$r = $i;
		}
	}
	
	$b = substr_replace($text, ' <a href="' . $link . '">', $t, 1);	// замена на пробел с добавлением тега
	echo $b."...</a>";

?>