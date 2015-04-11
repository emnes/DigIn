<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.restaurant R";

$rows = $data_access_layer->executeQuery($typeQuery);
if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"restaurants.php?type=All&amp;sortid=mp\">All</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"restaurants.php?type=All\">All</a></li>";

foreach ($rows as $row) 
{
	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"restaurants.php?type=".$row[0]."&amp;sortid=mp\">".$row[0]."</a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"restaurants.php?type=".$row[0]."&amp;sortid=mp\">".$row[0]."</a></li>";
	}
}

?>

<!-- <select id="first-choice">
	<option selected value="base">Please Select</option>
	<option value="beverages">Beverages</option>
	<option value="snacks">Snacks</option>
</select>

<br>
<select id="second-choice">
	<option>Please choose from above</option>
</select> -->

<!-- <li><input type="checkbox" name="type[]" id="Indian" value="Indian"/><label for="Indian">Indian</label></li
<li><input type="checkbox" name="type[]" id="Breakfast/Lunch" value="Breakfast/Lunch"/><label for="Breakfast/Lunch">Breakfast/Lunch</label></li> -->
<!-- class=\"btn btn-default\" type=\"submit\" name=\"type[]\" id=\"" . $row[0] . "\" value=\"" . $row[0] . "\" onClick=\"changeRestaurantType(this.id)\"> -->