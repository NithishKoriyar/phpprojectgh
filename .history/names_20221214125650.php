<?php
    $names = [ <?php
    if($name > 3){
        $class = "more-names";
        echo $class;
        }else{
        $class = "some-names";
        echo $class;
        }
?>];
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
<?php
    if(count($names) > 3){
        $class = "more-names";
        //echo $class;
        }else{
        $class = "some-names";
        //echo $class;
        }
?>
    <h1>Names</h1>
    <ul class="<?php echo $class;/*count($names) > 3 ? 'more-names' : 'some-names'*/ ?>">
        <?php foreach($names as $name) { ?>
        
          <li><?= $name ?></li>
        <?php } ?>
    </ul>
   
    
</body>
</html>