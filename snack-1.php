<?php
    $partite = [
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
    //  home - guest | homeScore-questScore
?>

<ul>
    <?php
        for ($i = 0; $i < count($partite); $i++) {
            $match = $partite[$i];
            ?>
                <li>
                    <?php
                        echo "{$match['home']} - {$match['guest']}";
                    ?>
                    |
                    <span>
                        <?php
                          echo "{$match['homeScore']} - {$match['guestScore']}";
                        ?>
                    </span>
                </li>
            <?php
        }
    ?>
</ul>