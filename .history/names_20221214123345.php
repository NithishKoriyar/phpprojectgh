<?php
$name = ['Jack', 'Rock','Smith', 'ads'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .some-names{
            background-color: red;
        }
        .more-names{
            background-color: green;
        }
    </style>
</head>

<body>
    <h1>Names</h1>
    <ul class="<?php?>
    ">
        <?php foreach ($name as $name) { ?>
            <li><?= $name ?></li>
        <?php }?>
    </ul>
</body>

</html>