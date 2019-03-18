<html>
<head>
    <title>Frontpage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
<?php
$timeofday = ["morning", "afternoon", "evening" ,"night"];
$hour = Date("H")+1;
$min = Date("i");

  if($hour >= 6 && $hour < 12){
            $image_url='img/morning.png';
            echo '<div class="time">'.'Good '. $timeofday[0] .'<br>'.'It is currently: '.$hour.":".$min.'</div>';
        }
        elseif($hour >= 12 && $hour < 18){
            $image_url='img/afternoon.png';
            echo '<div class="time">'.'Good '. $timeofday[1] .'<br>'.'It is currently: '.$hour.":".$min.'</div>';

        }
        elseif($hour >= 18 && $hour < 24){
            $image_url='img/evening.png';
            echo '<div class="time">'.'Good '. $timeofday[2] .'<br>'.'It is currently: '.$hour.":".$min.'</div>';
        }
        elseif($hour >= 24 && $timeH < 6){
            $image_url='img/night.png';
            echo '<div class="time">'.'Good '. $timeofday[3] .'<br>'.'It is currently: '.$hour.":".$min.'</div>';
        }

?>
<img src="<?php echo $image_url;?>" id="image">
<?php include "footer.php"; ?>
<?php include "nav.php"; ?>
</body>
</html>
