<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.restaurant R";

$rows = $data_access_layer->executeQuery($typeQuery);
echo "<li><button class=\"btn btn-default\" type=\"radio\" name=\"type[]\" id=\"All\" value=\"All\" onClick=\"changeRestaurantType(this.id)\">All</button></li>";
foreach ($rows as $row) 
{
    echo "<li><button class=\"btn btn-default\" type=\"submit\" name=\"type[]\" id=\"" . $row[0] . "\" value=\"" . $row[0] . "\" onClick=\"changeRestaurantType(this.id)\">". $row[0] . "</button></li>";
}
?>

<!-- <li><input type="checkbox" name="type[]" id="Indian" value="Indian"/><label for="Indian">Indian</label></li
<li><input type="checkbox" name="type[]" id="Breakfast/Lunch" value="Breakfast/Lunch"/><label for="Breakfast/Lunch">Breakfast/Lunch</label></li> -->