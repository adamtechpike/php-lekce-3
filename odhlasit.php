<?php

// nastartování session
session_start();

// nastavení nové hodnoty v session
unset($_SESSION['loggedIn']);

// session je uložena na serveru
var_dump($_SESSION);
