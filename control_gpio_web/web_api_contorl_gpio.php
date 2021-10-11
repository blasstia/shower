<?php
if(isset($_GET["status1"]) && isset($_GET["status2"]) && isset($_GET["status3"]) && isset($_GET["status4"])){
    if ($_GET["status1"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 14 out");
        shell_exec("/usr/bin/gpio -g write 14 1");
    }elseif ($_GET["status1"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 14 out");
        shell_exec("/usr/bin/gpio -g write 14 0");
    }
    if ($_GET["status2"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 15 out");
        shell_exec("/usr/bin/gpio -g write 15 1");
    }elseif ($_GET["status2"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 15 out");
        shell_exec("/usr/bin/gpio -g write 15 0");
    }
    if ($_GET["status3"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 18 out");
        shell_exec("/usr/bin/gpio -g write 18 1");
    }elseif ($_GET["status3"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 18 out");
        shell_exec("/usr/bin/gpio -g write 18 0");
    }
    if ($_GET["status4"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 23 out");
        shell_exec("/usr/bin/gpio -g write 23 1");
    }elseif ($_GET["status4"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 23 out");
        shell_exec("/usr/bin/gpio -g write 23 0");
    }
    print "使用GET控制成功";     
}

if(isset($_POST["status1"]) && isset($_POST["status2"]) && isset($_POST["status3"]) && isset($_POST["status4"])){
    if ($_POST["status1"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 14 out");
        shell_exec("/usr/bin/gpio -g write 14 1");
    }elseif ($_POST["status1"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 14 out");
        shell_exec("/usr/bin/gpio -g write 14 0");
    }
    if ($_POST["status2"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 15 out");
        shell_exec("/usr/bin/gpio -g write 15 1");
    }elseif ($_POST["status2"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 15 out");
        shell_exec("/usr/bin/gpio -g write 15 0");
    }
    if ($_POST["status3"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 18 out");
        shell_exec("/usr/bin/gpio -g write 18 1");
    }elseif ($_POST["status3"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 18 out");
        shell_exec("/usr/bin/gpio -g write 18 0");
    }
    if ($_POST["status4"]=="on"){
        shell_exec("/usr/bin/gpio -g mode 23 out");
        shell_exec("/usr/bin/gpio -g write 23 1");
    }elseif ($_POST["status4"]=="off"){
        shell_exec("/usr/bin/gpio -g mode 23 out");
        shell_exec("/usr/bin/gpio -g write 23 0");
    }
    print "使用POST控制成功";    
}








?>