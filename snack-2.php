<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


$name = 'Fabrizio';
if (strlen($name) <= 3) {
    $nameMessage = "Accesso negato";
}else {
    $nameMessage = "Accesso riuscito";
}


$mailChecka = (strpos($mail, '.'));
$mailCheckb = (strpos($mail, '@'));

if ($mailChecka != false && $mailCheckb != false) {
    $mailmsg = 'email ok';
} else{
    $mailmsg = 'email errata';
}

foreach($age as $age) {
}


if(is_numeric($age)) {
    $ageMessage = 'età corretta';
} else {
    $ageMessage = 'età errata';
}
?>


<div>
    <?= $nameMessage ?>
</div>
<div>
    <?= $mailmsgv ?>
</div>
<div>
    <?= $ageMessage ?>
</div>