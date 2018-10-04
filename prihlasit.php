<?php

// nastartování session
session_start();

// nastavení nové hodnoty v session
$_SESSION['loggedIn'] = true ;

// session je uložena na serveru
var_dump($_SESSION);
