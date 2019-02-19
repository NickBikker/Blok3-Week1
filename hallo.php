<html>
<head>
    <title>als je dood wil klik hier ====></title>
</head>
<body>
<?php

function reken($number){
    for($i=1;$i<=10;$i++){
        echo "<br>$number x " . $i . " = " .  $i * $number;
    }
}

reken(6);

$tafels = [3,5,8,12];

foreach ($tafels as $value) {
    reken($value);
    echo "<br>";
}



?>
</body>
</html>