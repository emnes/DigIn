<?php

$typeQuery = "SELECT DISTINCT type FROM fieldmazcolleen.rater WHERE name != 'DELETED'";

$rows = $data_access_layer->executeQuery($typeQuery);
$ratersQuery = "SELECT * FROM fieldmazcolleen.rater R";
$row_count = count($data_access_layer->executeQuery($ratersQuery));
if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"raters.php?type=All&sortid=Name\"\">All<span class=\"badge\">".$row_count."</span></a></li>";
else
	echo "<li role=\"presentation\"><a href=\"raters.php?type=All&sortid=Name\">All<span class=\"badge\">".$row_count."</span></a></li>";

foreach ($rows as $row) 
{
	$raterQuery = "SELECT * FROM fieldmazcolleen.rater R WHERE R.type = '".$row[0]."'";
	$row_count = count($data_access_layer->executeQuery($raterQuery));
	if($row[0] == $_GET['type'])
	{
		echo "<li role=\"presentation\" class=\"active\"><a href=\"raters.php?type=".$row[0]."&sortid=Name\">".$row[0]."<span class=\"badge\">".$row_count."</span></a></li>";
	}
	else
	{
    	echo "<li role=\"presentation\"><a href=\"raters.php?type=".$row[0]."&sortid=Name\">".$row[0]."<span class=\"badge\">".$row_count."</span></a></li>";
	}
}

?>