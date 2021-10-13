<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.1/js/bootstrap.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css' />
    <!-- <link rel='stylesheet' href='css/bootstrap.css' /> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css'>
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container p-0">
            <span class="navbar-brand mb-0 h1 text-white">
                <a href="gpio_all.php" class="text-white" style="text-decoration:none">控制燈泡中心</a></span>

            <?php
$on = 1;
$off = 0;

//$setMode26 = shell_exec("/usr/bin/gpio -g mode 26 out");
//$setOutput26 = shell_exec("/usr/bin/gpio -g w 26 1");

if (isset($_GET['on']) && $_GET['port']) {
    //GPIO 腳位控制
    $setMode = shell_exec("/usr/bin/gpio -g mode {$_GET['port']} out");
    shell_exec("/usr/bin/gpio -g write {$_GET['port']} {$on}");

    //修改畫面
    echo "<span class='text-success mb-0 h5'>LED {$_GET['port']} is on</span>";
    echo "<script> $(function(){  $('#{$_GET['port']}').css('color','#FACE1C')})</script>";

} else if (isset($_GET['off']) && $_GET['port']) {
    //GPIO 腳位控制
    $setMode = shell_exec("/usr/bin/gpio -g mode {$_GET['port']} out");
    shell_exec("/usr/bin/gpio -g write {$_GET['port']} {$off}");
    //修改畫面
    echo "<span class='text-danger mb-0 h5'>LED {$_GET['port']} is off</span>";
}

?>

        </div>
    </nav>



    <div class="container p-0">
        <div class="row mt-5">
            <!-- <div class="col-12">
                <form action="gpio1.php" method="get">
                    <h1 class="mt-5"><i id="26" class="far fa-lightbulb style='font-size:40px'"> </i> 第一顆</h1>
                    <input type="hidden" name="port" value="26">
                    <input class="btn btn-lg my-3 btn-info" type="submit" value="開" name="on">
                    <input class="btn btn-lg my-3 btn-secondary" type="submit" value="關" name="off">
                </form>
            </div> -->

            <!-- 第一顆 LED -->
            <div class="col-12 col-sm-5 offset-sm-1 offset-lg-0 col-lg  text-center">
                <form action="gpio_all.php" method="get">
                    <h1 class="mt-5"><i id="26" class="far fa-lightbulb style='font-size:40px'"> </i> 第一顆</h1>

                    <input type="hidden" name="port" value="26">
                    <input class="btn btn-lg my-3 btn-info" type="submit" value="開" name="on">
                    <input class="btn btn-lg my-3 btn-secondary" type="submit" value="關" name="off">
                </form>
            </div>

            <!-- 第二顆  -->
            <div class="col-12 col-sm-5 col-lg text-center">
                <form action="gpio_all.php" method="get">
                    <h1 class="mt-5"><i id="27" class="far fa-lightbulb style='font-size:40px'"> </i> 第二顆</h1>

                    <input type="hidden" name="port" value="27">
                    <input class="btn btn-lg my-3 btn-info" type="submit" value="開" name="on">
                    <input class="btn btn-lg my-3 btn-secondary" type="submit" value="關" name="off">
                </form>
            </div>

            <!-- 第三顆 -->
            <div class="col-12 col-sm-5 col-lg offset-sm-1 offset-lg-0  text-center">
                <form action="gpio_all.php" method="get">
                    <h1 class="mt-5"><i id="22" class="far fa-lightbulb style='font-size:40px'"> </i> 第三顆</h1>

                    <input type="hidden" name="port" value="22">
                    <input class="btn btn-lg my-3 btn-info" type="submit" value="開" name="on">
                    <input class="btn btn-lg my-3 btn-secondary" type="submit" value="關" name="off">
                </form>
            </div>

            <!-- 第四顆 -->
            <div class="col-12  col-sm-5  col-lg   text-center">
                <form action="gpio_all.php" method="get">
                    <h1 class="mt-5"><i id="23" class="far fa-lightbulb style='font-size:40px'"> </i> 第四顆</h1>

                    <input type="hidden" name="port" value="23">
                    <input class="btn btn-lg my-3 btn-info" type="submit" value="開" name="on">
                    <input class="btn btn-lg my-3 btn-secondary" type="submit" value="關" name="off">
                </form>
            </div>

        </div>
    </div>









</body>

</html>