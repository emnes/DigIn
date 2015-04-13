<?php

$typeQuery = "SELECT DISTINCT type FROM fieldmazcolleen.rater WHERE name != 'DELETED'";

$rows = $data_access_layer->executeQuery($typeQuery);
if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"raters.php?type=All&sortid=Name\"\">All</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"raters.php?type=All&sortid=Name\">All</a></li>";

foreach ($rows as $row) 
{
	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"raters.php?type=".$row[0]."&sortid=Name\">".$row[0]."</a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"raters.php?type=".$row[0]."&sortid=Name\">".$row[0]."</a></li>";
	}
}

?>