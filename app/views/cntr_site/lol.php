<p>lol</p>
<table>
<?php

foreach($res as $city){
		echo '<tr>';
		for($j=0;$j<10;$j++){
				echo '<td style="color:'.($j*255*255).'">'.$name.'</td>';
		}
		echo  '<td style="color:red">'.$city['name'].'</td>';
		echo  '<td style="color:blue">'.$city['population'].'</td>';
		echo'</tr>';
}
?>
</table>