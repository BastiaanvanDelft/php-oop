<?php
// verwerk.php
$color = $_POST['color'];

session_start();
    $_SESSION['color'] = $color;
    echo "Favo kleur: " . $color;
sleep(5);
header("index.php");