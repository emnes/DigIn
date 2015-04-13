function logIn()
{
    $('#logInModal').modal('show');
}
function signUp()
{
    $('#signUpModal').modal('show');
}
function createMenuItem()
{
    $('#createMenuItem').modal('show');
}

function deleteMenuItem()
{
    $('#deleteMenuItem').modal('show');
    // Edit form to input hidden with value itemId
    // DEBUG
    /*var input = document.createElement("input");
    input.type = "text";
    input.name = "remove-item";
    input.id = "remove-item";
    input.value = itemId;
    document.getElementById("menu-item-delete").appendChild(input);*/
}
function createRestaurant()
{
    $('#createRestaurant').modal('show');
}
function deleteRestaurant()
{
    $('#deleteRestaurant').modal('show');
}

$(document).ready(function () {
  $('.dropdown-toggle').dropdown();
});