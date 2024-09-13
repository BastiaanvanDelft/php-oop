<?php
session_start(); // Start of hervat een sessie
// Sessievariabele instellen
$_SESSION['taal'] = "Nederlands";
// Sessievariabele uitlezen
echo "Language: " . $_SESSION['taal'];