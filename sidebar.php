<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.restaurant R";

$rows = $data_access_layer->executeQuery($typeQuery);
foreach ($rows as $row) 
{
    echo "\n\t\t\t\t<li><input type=\"checkbox\" name=\"type[]\" id=\"" . $row[0] . "\" value=\"" . $row[0] . "\" /><label for=\"" . $row[0] . "\">" . $row[0] . "</label></li>";
}
?>

<!-- <li><input type="checkbox" name="type[]" id="Indian" value="Indian"/><label for="Indian">Indian</label></li
<li><input type="checkbox" name="type[]" id="Breakfast/Lunch" value="Breakfast/Lunch"/><label for="Breakfast/Lunch">Breakfast/Lunch</label></li> -->