<!-- Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 

$giornata2 = [ 
                [ 
                    'squadra_casa' => 'AX Armani Exchange Milano',
                    'squadra_ospite' => 'Virtus Segafredo Bologna',
                    'punteggio_casa' => 55,
                    'punteggio_ospite' => 60
                ],

                [ 
                    'squadra_casa' => 'Dolomiti Energia Trentino',
                    'squadra_ospite' => 'Happy Casa Brindisi',
                    'punteggio_casa' => 63,
                    'punteggio_ospite' => 59
                ],

                [ 
                    'squadra_casa' => 'GeVi Napoli',
                    'squadra_ospite' => 'Umana Reyer Venezia',
                    'punteggio_casa' => 68,
                    'punteggio_ospite' => 76
                ],

                [ 
                    'squadra_casa' => 'Carpegna Prosciutto Pesaro',
                    'squadra_ospite' => 'Allianz Pallacanestro Trieste',
                    'punteggio_casa' => 72,
                    'punteggio_ospite' => 95
                ],

                [ 
                    'squadra_casa' => 'Nutribullet Treviso Basket',
                    'squadra_ospite' => 'Unahotels Reggio Emilia',
                    'punteggio_casa' => 62,
                    'punteggio_ospite' => 67
                ],

                [ 
                    'squadra_casa' => 'Bertram Derthona Tortona',
                    'squadra_ospite' => 'Vanoli Basket Cremona',
                    'punteggio_casa' => 65,
                    'punteggio_ospite' => 60
                ],

                [ 
                    'squadra_casa' => 'Germani Brescia',
                    'squadra_ospite' => 'Openjobmetis Varese',
                    'punteggio_casa' => 58,
                    'punteggio_ospite' => 67
                ],

                [ 
                    'squadra_casa' => 'Banco di Sardegna Sassari',
                    'squadra_ospite' => 'Fortitudo Bologna',
                    'punteggio_casa' => 52,
                    'punteggio_ospite' => 79
                ],

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
            <?php for ($i = 0; $i < count($giornata2); $i++) { ?>
                <li>
                    <!-- <?php var_dump($giornata2);
                        var_dump($i);
                        ?> -->
                    <?php echo $giornata2[$i]['squadra_casa'] . " - " . $giornata2[$i]['squadra_ospite'] . " | " . $giornata2[$i]['punteggio_casa'] . "-" . $giornata2[$i]['punteggio_ospite']; ?>
                     
                </li>
            <?php } ?>

        </ul>
    </div>
</body>
</html>