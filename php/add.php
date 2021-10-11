<?php
if (isset($_GET["account"]) &&  isset($_GET["password"]) ){
    require_once 'connMysql.php';
    $sql = "INSERT INTO `ATM`( `account`, `password`) VALUES (";
    $sql .= "'" . $_GET["account"] . "'";
    $sql .= ",'" . $_GET["password"] . "')";

//     print $sql;
     mysqli_query($conn1, $sql);
    mysqli_close($conn1);
    print " Add ok ";
}else print " add no ok ";

?>
