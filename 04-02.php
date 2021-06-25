<?php
function showDouble1($x2){
		$x2 = $x2 * 2 ;
		echo "函式中的值為：" . $x2 ."<br />";
}
function showDouble2(&$y2){
		$y2 = $y2 * 2 ;
		echo "函式中的值為：" . $y2 ."<br />";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>sample</title>
		<?php
			$x1 = 2;
			showDouble1($x1);
			echo "函式外的值為：" . $x1 ."<br />";
			print "<hr>";
			/////////////////////////////////////////
			$y1 = 2;
			showDouble2($y1);
			echo "函式外的值為：" . $y1 ."<br />";;
		?>
	</body>
</html>