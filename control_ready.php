<?php
require_once("connmysql.php");
if(isset($_POST["action"]) && $_POST["action"]=="add"){
    date_default_timezone_get("ASIA/Taipei");
    //$test = true;
    $sql = "insert into led_status (label, status, datetime) VALUES (";
    $sql .="1,";
    $sql .="'" . $_POST['flipsit'] . "',";
    $sql .="'" . date("Y-m-d H:i:s") . "')";
    $test = $sql;
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    //header("Location:data_page.php");
}

$sql = "SELECT * FROM led_status WHERE label = 1 ORDER BY datetime DESC LIMIT 1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//print_r($row);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
   <head>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   </head>
      
   <body>
      <form method="POST">
         <h3>LED_CONTROL</h3>
         <div class = "ui-field-contain">
            <label>Flip Contain:</label>
            <select name="flipsit" data-role = "flipswitch">
               <option value = "0">Off</option>
               <option value = "1">On</option>
            </select>
        </div>
        <div>
            <input name="action" type="hidden" value="add">
            <input type="submit" value="submit">
            <input type="button" value="refresh" onclick="window.location.reload();">
         </div>
         <?php
            if(isset($test)){
                print $test;
            }
         ?>
      </form>
   </body>
</html>