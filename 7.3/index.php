<?php
session_start();
$_SESSION['taal'] = "Nederlands";
echo "Language: " . $_SESSION['taal'];
unset($_SESSION['taal']);