<?php

// nastartování session
session_start();

if (isset($_SESSION['loggedIn'])) {
echo 'přihlášen';
}
else {
echo 'nepřihlášen';
}
