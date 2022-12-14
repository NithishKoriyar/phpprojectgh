<?php
    $names = ['Jhon', 'Rock','SKull', 'Leo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .more-names{
            background-color: grey;
        }
        .some-names{
            background-color: yellow;
        }
        

    </style>
</head>
<body class="">
    <h1>Names</h1>
    <ul class="<?= count($names) > 3 ? 'more-names' : 'some-names' ?>">
        <?php foreach($names as $name) { ?>
        
          <li><?= $name ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>