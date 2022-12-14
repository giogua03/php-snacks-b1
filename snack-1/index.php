<?php
    $array_partite = [
        [
            [
                $ospiteP = [
                    'punteggio' => 55 . ' -',
                    'nome' => 'Brescia -',
                ],
                $casaP = [
                    'punteggio' => 50,
                    'nome' => 'Milano |',
                ],
            ],
            [
                $ospiteS = [
                    'punteggio' => 55 . ' -',
                    'nome' => 'Milano -',
                ],
                $casaS = [
                    'punteggio' => 130,
                    'nome' => 'Brescia |',
                ],
            ],
            [
                $ospiteT = [
                    'punteggio' => 15 .' -',
                    'nome' => 'Lecce -',
                ],
                $casaT = [
                    'punteggio' => 50,
                    'nome' => 'Milano |',
                ],
            ],
        ],
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
    <h1>PRIMA PARTITA :</h1>
    <h2>
        <?php echo $ospiteP['nome'] ?>
        <?php echo $casaP['nome']?>
        <?php echo $ospiteP['punteggio']?>
        <?php echo $casaP['punteggio']?>
    </h2>
    <h1>SECONDA PARTITA :</h1>
    <h2>
        <?php echo $ospiteS['nome'] ?>
        <?php echo $casaS['nome']?>
        <?php echo $ospiteS['punteggio']?>
        <?php echo $casaS['punteggio']?>
    </h2>
    <h1>TERZA PARTITA :</h1>
    <h2>
        <?php echo $ospiteT['nome'] ?>
        <?php echo $casaT['nome']?>
        <?php echo $ospiteT['punteggio']?>
        <?php echo $casaT['punteggio']?>
    </h2>

</body>
</html>