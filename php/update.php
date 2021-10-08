<?php

if (isset($_GET["account"]) 
        && isset($_GET["password"]) 
) {
    require_once '/connMysql.php';
    
        $sql = "select * from ATM ";
    $sql .= " where account='" . $_GET["account"] ."'";    
     $result = mysqli_query($conn1, $sql);
     $count=mysqli_num_rows($result);
     if ($count==0)
              print "no such account";
     else {
         
 
    $sql = "update ATM ";
    $sql .= "set password='" . $_GET["password"] ."'";
    $sql .= " where account='" . $_GET["account"] ."'";
//    print $sql;
    mysqli_query($conn1, $sql);
    mysqli_close($conn1);
     print " update ok";
         }
}else   print " update no ok";
    

    ?>