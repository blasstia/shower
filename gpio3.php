<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.1/js/bootstrap.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
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
                $on=0;
                $off=1;
                shell_exec("/usr/bin/gpio -g mode 22 output");
                shell_exec("/usr/bin/gpio -g w 22 output");
                if(isset($_GET['on']) && $_GET['port']){
                    $setMode = shell_exec("/usr/bin/gpio -g mode {$_GET['port']} out");
                    shell_exec("/usr/bin/gpio -g write {$_GET['port']} {$on}");

                    echo "<span class='text-success mb-0 h5'>LED {$_GET['port']} is on </span>";
                    echo "<script> $(function(){ $('#{$_GET['port']}').css('color','#FACE1C')})</script>";
                } else if(isset($_GET['off']) && $_GET['port']){
                    $setMode = shell_exec("/usr/bin/gpio -g modee {$_GET['port']} out");
                    shell_exec("/usr/bin/gpio -g write {$_GET['port']} {$off}");

                    echo "<span class='text-success mb-0 h5'>LED {$_GET['port']} is off </span>";
                }
                $_GET['on'];
                $_GET['off'];
                $_GET['port'];
                ?>
        </div>
    </nav>



    <div class="container p-0">
        <div class="row mt-5">
            <div class="col-12" text-center>
                <form action="gpio3.php" method="get">
                    <h1 class="mt-5"><i id="22" class="far fa-lightbulb style='font-size:40px'"> </i> 第三顆</h1>

                    <input class="btn btn-lg my-3 btn-info" type="submit" value="開" name="on">
                    <input class="btn btn-lg my-3 btn-secondary" type="submit" value="關" name="off">


                </form>

            </div>

        </div>
    </div>









</body>

</html>