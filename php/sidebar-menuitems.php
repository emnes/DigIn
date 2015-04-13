<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.menuitem R";

$rows = $data_access_layer->executeQuery($typeQuery);
$restaurantsQuery = "SELECT * FROM fieldmazcolleen.menuitem R";
$row_count = count($data_access_layer->executeQuery($restaurantsQuery));
if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"menuitems.php?type=All&amp;sortid=Name\">All<span class=\"badge\">".$row_count."</span></a></li>";
else
	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=All&amp;sortid=Name\">All<span class=\"badge\">".$row_count."</span></a></li>";

foreach ($rows as $row) 
{
	$restaurantQuery = "SELECT * FROM fieldmazcolleen.menuitem R WHERE R.type = '".$row[0]."'";
	$row_count = count($data_access_layer->executeQuery($restaurantQuery));
	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"menuitems.php?type=".$row[0]."&amp;sortid=Name\">".$row[0]."<span class=\"badge\">".$row_count."</span></a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=".$row[0]."&amp;sortid=Name\">".$row[0]."<span class=\"badge\">".$row_count."</span></a></li>";
	}
}

?>