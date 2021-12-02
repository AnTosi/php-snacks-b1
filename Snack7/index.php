
<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php 
    $alumns = [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
            'gpa' => [5, 8, 2, 4, 6, 7]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'gpa' => [5, 8, 6, 4, 6, 7, 5, 8]
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini',
            'gpa' => [3, 8, 2, 4, 9, 7]
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini',
            'gpa' => [4, 8, 8, 5, 6, 7, 8]
        ]

    ];

    function average($array) {
        return number_format(array_sum($array)/count($array), 2, ",", ".");
    }
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
        <?php for ($i=0; $i < count($alumns); $i++) { ?>
            <div>
                <h4> <?php echo $alumns[$i]['name'] . ' ' . $alumns[$i]['lastname'] ?></h4>
                <p>GPA: <?php echo average($alumns[$i]['gpa']) ?></p>
            </div>
        <?php } ?>
    </body>
    </html>
