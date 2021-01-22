<?php
for($x = 0; $x < 10; $x++) {
    echo "Nombre actuel " . $x . '<br>';
}

$y = 0;
$z = rand(1, 100);

while($y < 21) {

    $y *= $z;
    echo $y . '<br>';
    if($y > 20) {
        break;
    }
    $y++;
}
?>
