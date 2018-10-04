<form method="POST">
Jméno: <input type="text"name="firsname"><!-- vstupní pole -->
<br>
Heslo: <input type="text"name="secret"><!-- vstupní pole -->
<br> 
Souhlasím: <input type="checkbox"name="optIn"><!-- vstupní pole -->
<br>
   <input type="submit"><!-- tlačítko pro odeslání formuláře -->
</form>
<?php
echo '<br>POST: ';
var_dump($_POST);
