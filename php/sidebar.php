<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.restaurant R";

$rows = $data_access_layer->executeQuery($typeQuery);
$restaurantsQuery = "SELECT * FROM fieldmazcolleen.location L";
$row_count = count($data_access_layer->executeQuery($restaurantsQuery));
if("All" == $_GET['type']){
	echo "<li role=\"presentation\" class=\"active\"><a href=\"restaurants.php?type=All&amp;sortid=mp\">All<span class=\"badge\">".$row_count."</span></a></li>";
}
else{
	echo "<li role=\"presentation\"><a href=\"restaurants.php?type=All&amp;sortid=mp\">All<span class=\"badge\">".$row_count."</span></a></li>";
}

foreach ($rows as $row) 
{

	$restaurantQuery = "SELECT * FROM fieldmazcolleen.location L, fieldmazcolleen.restaurant R WHERE L.restaurantid = R. restaurantid AND R.type = '".$row[0]."'";
	$row_count = count($data_access_layer->executeQuery($restaurantQuery));

	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"restaurants.php?type=".$row[0]."&amp;sortid=mp\">".$row[0]."<span class=\"badge\">".$row_count."</span></a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"restaurants.php?type=".$row[0]."&amp;sortid=mp\">".$row[0]."<span class=\"badge\">".$row_count."</span></a></li>";
	}
}

?>