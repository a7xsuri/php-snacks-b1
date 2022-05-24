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
    <style>
        .teachers {
            background-color: grey
        }
        .pm {
            background-color: green

        }
    </style>
</head>
<body>
    <main>
        <?php 
        foreach ($db as $key => $value){
            ?> <div class="<?php echo $key ?>">
            <?php foreach ($value as $value){
                echo "<p>$value[name] $value[lastname] </p>";
            } ?>
            </div> <?php
        }
        ?>
    </main>
</body>
</html>