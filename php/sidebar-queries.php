<?php

if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queries.php?type=All\">All</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"queries.php?type=All\">All</a></li>";

if("Restaurants and Menus" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queries.php?type=Restaurants and Menus\">Restaurants and Menus</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"queries.php?type=Restaurants and Menus\">Restaurants and Menus</a></li>";

if("Ratings of Restaurants" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queries.php?type=Ratings of Restaurants\">Restaurants and Menus</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"queries.php?type=Ratings of Restaurants\">Restaurants and Menus</a></li>";

if("Raters and Their Ratings" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queries.php?type=Raters and Their Ratings\">Raters and Their Ratings</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"queries.php?type=Raters and Their Ratings\">Raters and Their Ratings</a></li>";

?>