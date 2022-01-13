<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$computer = array
("CPU" => "Intel Core i7-11700",
"RAM" => "HyperX Predator RGB 16GB 2x8GB DDR4 2933 CL15",
"SSD" =>"SSD Samsung 870 QVO 2,5 TB MZ-77Q4T0BW",
"case" => "GameMax Ares / 6830",
"keyboard" => "HyperX Alloy Core RGB - Membrane Gaming Keyboard" ,
"GPU" => "ASUS GeForce GT1030-2G-BRK, 2GB GDDR5"  ,
"mouse" => "Razer DeathAdder V2",
"headphones" => "Razer Nari Ultimate",
"display" => "Dell S2421HS",
"mainboard" => "ASUS ROG STRIX X570-E GAMING - AMD X570",
"fan" => "Noctua NF-A20 PWM Chromax Black Swap",
);

?>
<h1>Můj počítač</h1>
<ul>
    <li><p>CPU: <?= $computer['CPU']; ?></p></li>
    <li><p>RAM: <?= $computer['RAM']; ?></p></li>
    <li><p>SSD: <?= $computer['SSD']; ?></p></li>
    <li><p>case: <?= $computer['case']; ?></p></li>
    <li><p>keyboard: <?= $computer['keyboard']; ?></p></li>
    <li><p>GPU: <?= $computer['GPU']; ?></p></li>
    <li><p>mouse: <?= $computer['mouse']; ?></p></li>
    <li><p>headphones: <?= $computer['headphones']; ?></p></li>
    <li><p>display: <?= $computer['display']; ?></p></li>
    <li><p>mainboard: <?= $computer['mainboard']; ?></p></li>
    <li><p>fan: <?= $computer['fan']; ?></p></li>
</ul>

</body>
</html>