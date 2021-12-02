<!-- Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 

$calendarioA1 = [
    'giornata2' => [
        'partita' => [
            [
                'squadre' => ["AX Armani Exchange Milano", "Virtus Segafredo Bologna"],
                'risultato' => ['55', '60'],
            ],

            [
                'squadre' => ["Dolomiti Energia Trentino", "Happy Casa Brindisi"],
                'risultato' => ['58', '54'],
            ],
            
            [
                'squadre' => ["GeVi Napoli", "Umana Reyer Venezia"],
                'risultato' => ['65', '58'],
            ],

            [
                'squadre' => ["Umana Reyer Venezia", "Allianz Pallacanestro Trieste"],
                'risultato' => ['65', '58'],
            ],

            [
                'squadre' => ["Nutribullet Treviso Basket", "Unahotels Reggio Emilia"],
                'risultato' => ['65', '58'],
            ],

            [
                'squadre' => ["Bertram Derthona Tortona", "Vanoli Basket Cremona"],
                'risultato' => ['65', '58'],
            ],

            [
                'squadre' => ["Germani Brescia", "Openjobmetis Varese"],
                'risultato' => ['65', '58'],
            ],

            [
                'squadre' => ["Banco di Sardegna Sassari", "Fortitudo Bologna"],
                'risultato' => ['65', '58'],
            ],
            	

        ]   

    ]
]

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
    <div>
        <ul>
            <?php for ($i, $i < count($calendarioA1['giornata2'['partita']], $i++) { ?>
                <li>
                    <?php echo $calendarioA1['giornata2'['partita[$i]'['squadre']]]
                </li>
            }

        </ul>
    </div>
</body>
</html>