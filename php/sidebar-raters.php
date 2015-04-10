<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.rater R";

$rows = $data_access_layer->executeQuery($typeQuery);
if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"raters.php?type=All\">All</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"raters.php?type=All\">All</a></li>";

foreach ($rows as $row) 
{
	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"raters.php?type=".$row[0]."\">".$row[0]."</a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"raters.php?type=".$row[0]."\">".$row[0]."</a></li>";
	}
}

?>