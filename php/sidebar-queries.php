<?php

if("All" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queriesresults.php?type=All\">All</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=queriesresults.php\">All</a></li>";

if("Restaurants and menus" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queriesresults.php?type=restaurantsmenus.php\">Restaurants and Menus</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=restaurantsmenus.php\">Restaurants and Menus</a></li>";

if("Ratings of Restaurants" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queriesresults.php?type=ratingsrestaurants.php\">Restaurants and Menus</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=ratingsrestaurants.php\">Restaurants and Menus</a></li>";

if("Raters and their ratings" == $_GET['type'])
	echo "<li role=\"presentation\" class=\"active\"><a href=\"queriesresults.php?type=ratersratings\">Raters and their ratings</a></li>";
else
	echo "<li role=\"presentation\"><a href=\"menuitems.php?type=ratersratings.php\">Raters and their ratings</a></li>";

?>