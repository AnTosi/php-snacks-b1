<?php 
$invitedlist = [
    'mario',
    'paolo',
    'fabio',
    'valentina',
    'doina',
    'chandra'
];

//didn't work because of $_GET() instead of $_GET[]

$queryname = strtolower($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>
        <!-- cane -->
        <!-- <?php 
            // var_dump($queryname);
            var_dump($queryname);
        ?> -->
        <?php if (in_array($queryname, $invitedlist)) { ?>
            OK
        <?php } else { ?>
            KO
        <?php } ?>
    </h4>
</body>
</html>