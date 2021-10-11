<!DOCTYPE html><!-- 宣告文件類型 -->
<html lang="zh-tw"><!-- 指定網頁使用的語言 -->
<head><!-- 文件的標頭 -->
<meta charset="utf-8"><!-- 指定網頁編碼 -->
<title>網頁標題文字</title><!-- 文件標題 -->
<style>
        table, td {
            border-width:1px;
            border-style:solid;
            border-color:#0094ff;
            text-align:center;
        }
    </style>
</head>
<body><!-- 文件主體 -->
<?php
$student = array(array('學號'=>101, '姓名'=>'李雲毓', '性別'=>'女', '生日'=>'2000/3/14', '電話'=>'(02)2704-2762'), 
				array('學號'=>102, '姓名'=>'黃冠妮', '性別'=>'女', '生日'=>'2000/6/6', '電話'=>'(02)2093-8123'),
				array('學號'=>103, '姓名'=>'韋國書', '性別'=>'男', '生日'=>'2000/7/15', '電話'=>'(02)2502-1314'),
				array('學號'=>104, '姓名'=>'劉子芸', '性別'=>'女', '生日'=>'2000/8/7', '電話'=>'(04)2530-7996'),
				array('學號'=>105, '姓名'=>'李政昀', '性別'=>'男', '生日'=>'2000/12/24', '電話'=>'(02)2740-8965'));
echo '<table>';
foreach($student as $data){
	echo '<tr>';
	print "<td>學號:".$data["學號"]."，</td>";
	print "<td>姓名:".$data["姓名"]."，</td>";
	print "<td>性別:".$data["性別"]."，</td>";
	print "<td>生日:".$data["生日"]."，</td>";
	print "<td>電話:".$data["電話"]."。</tr>";
	echo '</tr>';
}
echo '</table>';
?>
</body>
</html>

