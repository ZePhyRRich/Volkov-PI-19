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
		['link'=>'О нас','href'=>'index.php?id=about'],
		['link'=>'Контакты','href'=>'index.php?id=contact'],
		['link'=>'for','href'=>'for.php'],
		['link'=>'while','href'=>'while.php'],
		['link'=>'Таблица','href'=>'index.php?id=table'],
		['link'=>'Печеньки','href'=>'index.php?id=cookie'],
		['link'=>'Локация','href'=>'location.php'],
		['link'=>'Ссылки','href'=>'index.php?id=newlocation'],
		['link'=>'Перенаправление','href'=>'refresh.php'],
		['link'=>'content-type','href'=>'content-type.php'],
		['link'=>'charset','href'=>'charset.php'],
		['link'=>'cache-on','href'=>'cache-on.php'],
		['link'=>'cache-off','href'=>'cache-off.php'],
		['link'=>'md5','href'=>'md5.php']
	];

	$title = 'Наш сайт';
	$header = "$welcome, гость!";
	$id = strtolower(strip_tags(trim($_GET['id'])));
	switch($id) {
		case 'about': {			
			$title = 'О сайте';
			$header = 'О нашем сайте';
			break;
		}
		case 'contact': {			
			$title = 'Контакты';
			$header = 'Обратная связь';
			break;
		}
		case 'table': {			
			$title = 'Таблица умножения';
			$header = 'Таблица умножения';
			break;
		}
		case 'cookie': {			
			$title = 'Печеньки';
			$header = 'Счётчик посещений';
			break;
		}
		case 'newlocation': {			
			$title = 'Ссылки';
			$header = 'Яндекс, Гугл и Рамблер';
			break;
		}
	}
?>