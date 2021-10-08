<?php
$arr = array("a"=>1,"b"=>3,"c"=>5,"d"=>3,"e"=>1);
$result = json_encode($arr);
$obj = json_decode($result);
print_r($obj);
print "<hr>";
print $obj->a . "<br>";
print $obj->b . "<br>";
print $obj->c . "<br>";
print $result;
$arr = json_decode($result, true);
print "<hr>";
print_r($arr);
print $arr["a"] . "<br>";
print $arr["b"] . "<br>";
print $arr["c"] . "<br>";
?>