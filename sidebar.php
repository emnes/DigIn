<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.restaurant R";

$rows = $data_access_layer->executeQuery($typeQuery);
echo "<li><a href=\"restaurants.php?type=All\" class=\"btn btn-default\" type=\"radio\" name=\"type[]\" id=\"All\" value=\"All\" onClick=\"changeRestaurantType(this.id)\">All</a></li>";
foreach ($rows as $row) 
{
	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"restaurants.php?type=".$row[0]."\">".$row[0]."</a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"restaurants.php?type=".$row[0]."\">".$row[0]."</a></li>";
	}
}
?>

<!-- <li><input type="checkbox" name="type[]" id="Indian" value="Indian"/><label for="Indian">Indian</label></li
<li><input type="checkbox" name="type[]" id="Breakfast/Lunch" value="Breakfast/Lunch"/><label for="Breakfast/Lunch">Breakfast/Lunch</label></li> -->
<!-- class=\"btn btn-default\" type=\"submit\" name=\"type[]\" id=\"" . $row[0] . "\" value=\"" . $row[0] . "\" onClick=\"changeRestaurantType(this.id)\"> -->