<?php
    if(isset($_GET['cName']) && isset($_GET['cSex']) && isset($_GET['cBirthday']) && isset($_GET['cEmail']) && isset($_GET['cPhone']) && isset($_GET['cAddr'])){
        require_once("../connmysql.php");
        $sql = "insert into students (cName, cSex, cBirthday, cEmail, cPhone, cAddr) VALUES (";
        $sql .="'" . $_GET['cName'] . "',";
        $sql .="'" . $_GET['cSex'] . "',";
        $sql .="'" . $_GET['cBirthday'] . "',";
        $sql .="'" . $_GET['cEmail'] . "',";
        $sql .="'" . $_GET['cPhone'] . "',";
        $sql .="'" . $_GET['cAddr'] . "')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        print "success..";
    } else {
        print "fail..";
    }
    
?>