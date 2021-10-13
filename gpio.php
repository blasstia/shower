<?php
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel='stylesheet' href='css/bootstrap.css' />
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css'>
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container p-0">
            <span class="navbar-brand mb-0 h1 text-white">
            <a href="gpio_all.php" class="text-white" style="text-decoration:none">控制燈泡中心</a>
            <div class="row st-5">
                <div class="col-12" text-center>
                    <h1 class="mt-5"><i id="26" class="far fa-lightbulb style='font-size:40px'"></i>第一顆</h1>
                    <input class="btn btn-lg my-3 btn-info" type="submit" value="開" name="on">
                    <input class="btn btn-lg my-3 btn-secondary" type="submit" value="關" name="off">
                </div>
            </div>
        </span>
    </div>
</nav>

