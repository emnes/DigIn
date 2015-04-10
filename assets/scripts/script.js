/* Restaurants Dynamic START */
function changeRestaurantType(clicked_id)
{
	document.getElementById('typeOfRestaurant').innerHTML = clicked_id + " Restaurants";

	document.getElementById('restaurants').innerHTML = "<p><?php $restaurantQuery = \"SELECT * FROM fieldmazcolleen.restaurant R WHERE R.type = '"
	+ clicked_id + "'\"; $rows = $data_access_layer->executeQuery($restaurantQuery); foreach($rows2 as $row){ echo \"<p>\".$row[0].\"</p>\";} ?></p>";
}

/* Restaurants Dynamic END */

function logIn()
{
    $('#logInModal').modal('show');
}

function signUp()
{
    $('#signUpModal').modal('show');
}

$(document).ready(function () {
  $('.dropdown-toggle').dropdown();
});