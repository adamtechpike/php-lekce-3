
<?php
session_start();
if (isset($_SESSION['login'])) {
    echo 'Welcome ' . $_SESSION['login'];
    echo '<table class="table table-bordered">';
    foreach ($_SESSION['data'] as $klic => $hodnota) {
        echo "<tr>
        <td> $klic </td>
        <td> $hodnota </td>
        </tr>";
    }
    echo '</table>';
    echo '<br><a href="/php-lekce-3/logout.php">Logout</a> <br>';
} 

else{
    echo 'Access denied';
};
?>


