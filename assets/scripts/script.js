/* Restaurants Dynamic START */
function changeRestaurantType(clicked_id)
{
	document.getElementById('typeOfRestaurant').innerHTML = clicked_id + " Restaurants";
}

function changeRestaurantType(clicked_id)
{
	document.getElementById('typeOfRestaurant').innerHTML = clicked_id + " Restaurants";
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