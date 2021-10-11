<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="06-04-01.php" method="GET">
    您學會的項目為：<br>
    <select name="item[]" id="item" size="4" multiple>
        <option value="linux">LINUX</option>
        <option value="apache">APACHE</option>
        <option value="php">PHP</option>
        <option value="mysql">MYSql</option>
    </select>
    <input type="submit" value="送出">
</form>
</body>
</html>