<?php

if (isset($_GET["account"]) 

) {
    require_once '/connMysql.php';
    
    $sql = "select * from ATM ";
    $sql .= " where account='" . $_GET["account"] ."'";    
     $result = mysqli_query($conn1, $sql);
     $count=mysqli_num_rows($result);
     if ($count==0)
              print "no such account";
     else {
             $sql = "delete from ATM ";
    $sql .= " where account='" . $_GET["account"] ."'";
//    print $sql;
    mysqli_query($conn1, $sql);
    mysqli_close($conn1);
     print "delete ok";
     }
            
//        print "記錄有" . mysqli_num_rows($result) . "筆";
        

}else   print "delete no ok";
    

    ?>