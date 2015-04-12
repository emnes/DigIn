<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.restaurant R";

$rows = $data_access_layer->executeQuery($typeQuery);
if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"restaurants.php?type=All&amp;sortid=mp\">All</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"restaurants.php?type=All&amp;sortid=mp\">All</a></li>";

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