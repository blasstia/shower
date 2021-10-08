<?php
$on = 1;
$off = 0;
$success = [];

if (isset($_POST['sw'])) {
    $sw = $_POST['sw'];
    $gpio = $_POST['gpio'];
    $led = $_POST['led'];

    $setMode = shell_exec("/usr/bin/gpio -g mode {$gpio} out");

    switch ($_POST['sw']) {
        case "on":
            $gpio_on = shell_exec("/usr/bin/gpio  -g write {$gpio} {$on}");
            $success = ['sw' => 'on', 'gpio' => $gpio, 'led' => $led];
            break;
        case "off":
            $gpio_off = shell_exec("/usr/bin/gpio -g write {$gpio} {$off}");
            $success = ['sw' => 'off', 'gpio' => $gpio, 'led' => $led];
            break;
    }

    //echo $success;   // echo 只能處理字串，所以要轉成 JSON
    echo json_encode($success);

} else {

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <script>
    $(function() {
        $('button').click(function() {
            //console.log($('button').index(this));
            switch ($('button').index(this)) {
                //第一顆、二、三、四 LED ON
                case 0:
                    led = 1;
                    gpio = 26;
                    sw = 'on';
                    break;
                case 2:
                    led = 2;
                    gpio = 27;
                    sw = 'on';
                    break;
                case 4:
                    led = 3;
                    gpio = 22;
                    sw = 'on';
                    break;
                case 6:
                    led = 4;
                    gpio = 23;
                    sw = 'on';
                    break;
                    //第一顆、二、三、四 LED OFF
                case 1:
                    led = 1;
                    gpio = 26;
                    sw = 'off';
                    break;
                case 3:
                    led = 2;
                    gpio = 27;
                    sw = 'off';
                    break;
                case 5:
                    led = 3;
                    gpio = 22;
                    sw = 'off';
                    break;
                case 7:
                    led = 4;
                    gpio = 23;
                    sw = 'off';
                    break;
            }

            $.ajax({
                type: 'post',
                url: 'http://smarthome.edu.tw/gpio/gpio_all.php',
                dataType: 'json',
                data: {
                    sw: sw,
                    gpio: gpio,
                    led: led,
                },
                success: function(data) {
                    console.log(typeof data);
                    console.log(data);
                    console.log(data['sw']);
                    console.log(data['gpio']);
                    console.log(data.led);
                    if (data['sw'] == 'on') {
                        $('#' + data['gpio']).css('color', '#FACE1C');
                        $('#output' + data['led'])
                            .text('LED ' + data['led'] + ' GPIO ' + data['gpio'] +
                                ' is on')
                            .css({
                                color: 'red',
                                backgroundColor: 'green',
                            });
                    } else {
                        $('#' + data['gpio']).css('color', '#000000');
                        $('#output' + data['led'])
                            .text('LED ' + data['led'] + ' GPIO ' + data['gpio'] +
                                ' is off')
                            .css({
                                color: 'green',
                                backgroundColor: 'red',
                            });
                    }
                },
                error: function() {
                    console.log('error')
                }
            });
        });
    });
    </script>
</head>

<body>

    <div id="tf-ee">
        <div class="container">
            <!-- Container -->
            <div class="section-title-black center">
                <h1 style="color:#000000;text-align: center;"><strong>GPIO 控制中心</strong></h1>
                <div class="line">
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-0">
        <div class="row">
            <div class="text-center col-12 col-md-3 col-sm-6">
                <h2 class="mt-5"><i id="26" class="far fa-lightbulb" style="font-size: 40px"></i> 第一顆</h1>
                    <button class="btn btn-primary btn-md" type="button">&emsp;開&emsp;</button>
                    <button class="btn btn-danger btn-md" type="button">&emsp;關&emsp;</button>
            </div>
            <div class="text-center col-12 col-md-3 col-sm-6">
                <h2 class="mt-5"><i id="27" class="far fa-lightbulb" style="font-size: 40px"></i> 第二顆</h1>
                    <button class="btn btn-primary btn-md" type="button">&emsp;開&emsp;</button>
                    <button class="btn btn-danger btn-md" type="button">&emsp;關&emsp;</button>
            </div>
            <div class="text-center col-12 col-md-3 col-sm-6">
                <h2 class="mt-5"><i id="22" class="far fa-lightbulb" style="font-size: 40px"></i> 第三顆</h1>
                    <button class="btn btn-primary btn-md" type="button">&emsp;開&emsp;</button>
                    <button class="btn btn-danger btn-md" type="button">&emsp;關&emsp;</button>
            </div>
            <div class="text-center col-12 col-md-3 col-sm-6">
                <h2 class="mt-5"><i id="23" class="far fa-lightbulb" style="font-size: 40px"></i> 第四顆</h1>
                    <button class="btn btn-primary btn-md" type="button">&emsp;開&emsp;</button>
                    <button class="btn btn-danger btn-md" type="button">&emsp;關&emsp;</button>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center py-5">
                <div id="output1" class="text-center w-50 m-1"></div>
                <div id="output2" class="text-center w-50 m-1"></div>
                <div id="output3" class="text-center w-50 m-1"></div>
                <div id="output4" class="text-center w-50 m-1"></div>
            </div>
        </div>
</body>

</html>

<?php
}
?>