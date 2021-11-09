<?php
	function drawTable($cols, $rows, $color){
		for ($tr = 1; $tr <= $rows; $tr++)
		{
			echo '<tr>';
			for($td = 1; $td <= $cols; $td++)
			{
				$background = 'white';
				if($tr == 1 || $td == 1)
					$background = $color;
				echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
			}
			echo "</tr>";
		}
	}

    function drawMenu($leftMenu){
		echo "<ul>";
			foreach ($leftMenu as $item) 
			{					
				echo "<li>";
				echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
				echo "</li>";					
			}
			echo "</ul>";
	}
?>