<?php
	if(!empty($_POST)){
		setcookie("rows",$_POST['rows'],time()+31536000);
		setcookie("cols",$_POST['cols'],time()+31536000);
		setcookie("color",$_POST['color'],time()+31536000);
	}
	$rows = !empty($_COOKIE['rows']) ? $_COOKIE['rows'] : '';
	$cols = !empty($_COOKIE['cols']) ? $_COOKIE['cols'] : '';
	$color = !empty($_COOKIE['color']) ? $_COOKIE['color'] : '';
	//работает(при двойном обновлении) странно ибо после нажатия на кнопку он выводи прошлые данные
	//так и не понял как это решить
?>

<!-- Область основного контента -->
<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
	<label>Количество строк: </label><br/>
	<input name='rows' type='text' value="<?echo $rows?>" /><br/>
	<label>Количество колонок: </label><br/>
	<input name='cols' type='text' value="<?echo $cols?>" /><br/>
	<label>Цвет: </label><br/>
	<input name='color' type='text' value="<?echo $color?>" /><br/><br/>
	<input type='submit' value='Создать' />
</form>
<!-- Таблица -->
<table border="1">
	<?php
		drawTable(@$_POST['cols'], @$_POST['rows'], @$_POST['color']);		
	?>
</table>
<!-- Таблица -->
<!-- Область основного контента -->
