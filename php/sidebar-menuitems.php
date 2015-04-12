<?php

$typeQuery = "SELECT DISTINCT R.type FROM fieldmazcolleen.menuitem R";

$rows = $data_access_layer->executeQuery($typeQuery);
if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"menuitems.php?type=All&amp;sortid=Name\">All</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=All&amp;sortid=Name\">All</a></li>";

foreach ($rows as $row) 
{
	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"menuitems.php?type=".$row[0]."&amp;sortid=Name\">".$row[0]."</a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=".$row[0]."&amp;sortid=Name\">".$row[0]."</a></li>";
	}
}

?>