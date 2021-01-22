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

$a = 1;
$midA = $a / 2;

while($a <= 10) {
    echo $a . '<br>';

    $a+= $midA;
}

for($x = 1; $x < 15; $x++) {
    echo "On y est presque" . '<br>';
}

for($x = 20; $x > 0; $x--) {
    echo "C'est presque bon" . '<br>';
}

for($x = 1; $x < 100; $x+=15) {
    echo "On tient le bon bout" . '<br>';
}

for($x = 200; $x > 0; $x-=12) {
    echo "Enfin" . '<br>';
}
?>
