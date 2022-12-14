<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $time_now=mktime(date('h')+5,date('i')+30,date('s'));
    $date = date('d-m-Y H:i', $time_now);
    echo $date;
     ?>
</body>
</html>