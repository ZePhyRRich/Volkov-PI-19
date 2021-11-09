<?php
    setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%m');
	$year = strftime('%Y');
	define('COPYRIGHT','Веб-мастер');	
	$hours = (int)strftime('%H');
	$welcome ='';
	if ($hour > 0 && $hour < 6)
		$welcome = 'Доброй ночи';
	elseif ($hour >= 6 && $hour < 12)
		$welcome = 'Доброе утро';
	elseif ($hour >= 12 && $hour < 18)
		$welcome = 'Добрый день';	
	elseif ($hour >= 18 && $hour < 23)
		$welcome = 'Доброй вечер';
	else
		$welcome = 'Доброй ночи';

	$leftMenu = [
		['link'=>'Домой','href'=>'index.php'],
		['link'=>'О нас','href'=>'about.php'],
		['link'=>'Контакты','href'=>'contact.php'],
		['link'=>'for','href'=>'for.php'],
		['link'=>'while','href'=>'while.php'],
		['link'=>'Таблица','href'=>'table.php']
	];
?>