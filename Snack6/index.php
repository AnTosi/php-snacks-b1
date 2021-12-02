<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->


<?php
 
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];

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
    <?php foreach ($db as $key => $job) { 
        if ($key == 'teachers') { ?>
        <div style="border: 1px solid black; background-color: lightgrey; display: inline-block;width: 40%; padding-left:1rem;">
            <?php foreach ($job as $person) { ?>
                <p>
                    <?php echo $person['name'] . ' ' . $person['lastname']; ?>
                </p>
            <?php } ?>
        </div>
            
        <?php } elseif ($key == 'pm'){ ?>
        <div style="border: 1px solid black; background-color: lightgreen; display: inline-block;width: 40%; padding-left:1rem;">
        <?php foreach ($job as $person) { ?>
                <p>
                    <?php echo $person['name'] . ' ' . $person['lastname']; ?>
                </p>
            <?php } ?>
        </div>
        <?php } ?>

    <?php } ?>
</body>
</html>