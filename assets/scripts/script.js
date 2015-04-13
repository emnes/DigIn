function logIn()
{
    $('#logInModal').modal('show');
}
function signUp()
{
    $('#signUpModal').modal('show');
}
function createMenuItem(givenRestId, givenRestName)
{
    //alert(givenRestId);
    // Creates a label
    var label = document.createElement("label");
    label.for = "input-rid";
    label.class = "col-sm-2 control-label";
    // Restaurant ID: givenid text
    var text = document.createTextNode("Restaurant ID: " + givenRestName);
    // Adds text to label
    label.appendChild(text);
    // Adds label to form
    document.getElementById("restIdForm").appendChild(label);
    var input = document.createElement("input");
    input.type = "hidden";
    input.name = "input-rid";
    input.id = "input-rid";
    input.value = givenRestId;
    document.getElementById("restIdForm").appendChild(input);

    $('#createMenuItem').modal('show');
}

function deleteMenuItem(givenItemId)
{
    //alert(givenItemId);
    $('#deleteMenuItem').modal('show');
    // Edit form to input hidden with value itemId
    // DEBUG
    var input = document.createElement("input");
    input.type = "hidden";
    input.name = "remove-item";
    input.id = "remove-item";
    input.value = givenItemId;
    document.getElementById("menu-item-delete").appendChild(input);
}
function createRestaurant()
{
    $('#createRestaurant').modal('show');
}
function deleteRestaurant(givenRestaurantId)
{
    //alert(givenRestaurantId);
    $('#deleteRestaurant').modal('show');
    var input = document.createElement("input");
    input.type = "hidden";
    input.name = "remove-restaurant";
    input.id = "remove-restaurant";
    input.value = givenRestaurantId;
    document.getElementById("restaurant-delete").appendChild(input);
}

$(document).ready(function () {
  $('.dropdown-toggle').dropdown();
});