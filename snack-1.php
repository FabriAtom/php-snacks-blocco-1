<?php
    $partite = [
        $partita,
        [
        'home' => 'heat',
        'guest' => 'bulls',
        'homeScore' => 50,
        'guestScore' => 70,
        ],
        [
        'home' => 'Raptor',
        'guest' => 'Celctics',
        'homeScore' => 20,
        'guestScore' => 85,
        ],
        [
        'home' => 'Dragon',
        'guest' => 'Minions',
        'homeScore' => 830,
        'guestScore' => 870,
        ], 
    ];

    var_dump($partite);

    //  home - guest | homeScore-questScore
?>

<ul>
    <?=
        for ($i = 0; $i < count($partite); $i++) {
            $match = $partite[$i];
            ?>
                <li>
                    <?=
                        echo "{$match['home']} - {$match['guest']}";
                    ?>
                    |
                    <span>
                        <?=
                          echo "{$match['homeScore']} - {$match['guestScore']}";
                        ?>
                    </span>
                </li>
            <?=
        }
    ?>
</ul>