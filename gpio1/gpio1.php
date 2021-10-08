<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css' />
    <!--<link rel='stylesheet' href='css/bootstrap.css' />-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css' />
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container p-0">
            <span class="navbar-brand mb-0 h1 text-white">
            <a href="gpio_all.php" class="text-white" style="text-decoration:none">控制燈泡中心</a>
            <?php
                $on=0;
                $off=1;
                shell_exec("/usr/bin/gpio -g mode 26 output");
                shell_exec("/usr/bin/gpio -g w 26 output");
            ?>
            </span> 
        </div>
    </nav>
    <div class="container p-0">
        <div class="row mt-5">
            <div class="col-12" text-center>
            <form action="gpio1.php" method="get">
                <h1 class="mt-5"><i id="26" class="far fa-lightbuld">第一顆</h1>
            </form>
            </div>
        </div>
    </div>
</body>

</html>
