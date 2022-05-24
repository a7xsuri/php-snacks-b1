<?php 
$alunni = [
    [
        'nome' => 'Luigi',
        'cognome' => 'Wluigi',
        'voti' => array(6, 5, 3, 1)
    ],
    [
        'nome' => 'Mario',
        'cognome' => 'Wmario',
        'voti' => array(1, 2, 4, 1)
    ],
    [
        'nome' => 'Gatto',
        'cognome' => 'Gatto',
        'voti' => array(1, 5, 4, 6)
    ],
    [
        'nome' => 'Sonic',
        'cognome' => 'Sonic',
        'voti' => array(1, 10, 4, 2)
    ],
    [
        'nome' => 'Vanna',
        'cognome' => 'Vanna',
        'voti' => array(10, 4, 10, 10)
    ],
    [
        'nome' => 'Thiago',
        'cognome' => 'Thiago',
        'voti' => array(2, 5, 6, 2)
    ],
    [
        'nome' => 'Paolo',
        'cognome' => 'Paolo',
        'voti' => array(3, 2, 10, 10)
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
    <style>
        .lists {
            display: flex;
        }
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <main>
        <h2>Elenco alunni:</h2>
        <div class="lists">
        <ul>
            <li>
                <h2>Nome</h2>
            </li>
            <?php 
                for ($i = 0; $i < count($alunni); $i++) {
                    echo "<li>{$alunni[$i]['nome']}</li>";
                }
            ?>
        </ul>
        <ul>
            <li>
                <h2>Cognome</h2>
            </li>
            <?php 
                for ($i = 0; $i < count($alunni); $i++) {
                    echo "<li>{$alunni[$i]['cognome']}</li>";
                }
            ?>
        </ul>
        <ul>
            <li>
                <h2>Media dei voti</h2>
            </li>
            <?php
                for ($i = 0; $i < count($alunni); $i++) {
                    $media = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']);
                    echo "<li>{$media}</li>";
                }
            ?>
        </ul>
        </div>
    </main>
</body>
</html>