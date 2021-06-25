<?php
    if(isset($_POST['cName']) && isset($_POST['cSex']) && isset($_POST['cBirthday']) && isset($_POST['cEmail']) && isset($_POST['cPhone']) && isset($_POST['cAddr'])){
        require_once("../connmysql.php");
        $sql = "insert into students (cName, cSex, cBirthday, cEmail, cPhone, cAddr) VALUES (";
        $sql .="'" . $_POST['cName'] . "',";
        $sql .="'" . $_POST['cSex'] . "',";
        $sql .="'" . $_POST['cBirthday'] . "',";
        $sql .="'" . $_POST['cEmail'] . "',";
        $sql .="'" . $_POST['cPhone'] . "',";
        $sql .="'" . $_POST['cAddr'] . "')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        print "success..";
    } else {
        print "fail..";
    }
    
?>