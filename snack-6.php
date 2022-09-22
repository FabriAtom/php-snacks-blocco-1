<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style link="style.css">

        .teachers{
            background:grey;
        }

        .pm{
            background:green;
        }


    </style>
</head>
<body>
    
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
                var_dump($db)
                ?> 

    <?php foreach ($db as $key => $value) { ?>
        <?php echo "<h2>$key</h2>" ?>
        <div class="<?php echo $key ?>">
            <?php foreach ($value as $value) {
                echo "<p>$value[name] $value[lastname] </p>";
            } ?>
        </div> <?php
    } ?>

</body>
</html>
