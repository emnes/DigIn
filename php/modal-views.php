<?php if(isset($_GET['locationid']) == false)
		{
			$locationId = "";
		}
		if(isset($_GET['type']) == false)
		{
			$type = "";
		}
echo "

<!-- Modal View for Log In -->
<div class=\"modal fade\" id=\"logInModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"logInModal\" aria-hidden=\"true\">
	<div class=\"modal-dialog\">
		<div class=\"modal-content\">
			<div class=\"modal-header\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<h4 class=\"modal-title\" id=\"myModalLabel\" style=\"text-align: center;\">Log In</h4>
			</div>
			<div class=\"modal-body\">
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/login.php\" role=\"form\">
					<div class=\"form-group\">
							<label for=\"input-email\" class=\"col-sm-2 control-label\">Email</label>
						<div class=\"col-sm-10\">
							<input name =\"input-email\" type=\"email\" class=\"form-control\" id=\"input-email\" placeholder=\"example@example.com\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
							<label for=\"input-pw\" class=\"col-sm-2 control-label\">Password</label>
						<div class=\"col-sm-10\">
							<input name =\"input-pw\" type=\"password\" class=\"form-control\" id=\"input-pw\" required autofocus/>
						</div>
					</div>
			</div>
			<div class=\"modal-footer\" style=\"text-align: center;\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
				<button type=\"submit\" class=\"btn btn-primary\">Log In</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal View for Sign Up -->
<div class=\"modal fade\" id=\"signUpModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"signUpModal\" aria-hidden=\"true\">
	<div class=\"modal-dialog\">
		<div class=\"modal-content\">
			<div class=\"modal-header\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<h4 class=\"modal-title\" id=\"myModalLabel\">Sign Up</h4>
			</div>
			<div class=\"modal-body\">
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/signup.php\" role=\"form\">
					<div class=\"form-group\">
							<label for=\"input-email\" class=\"col-sm-2 control-label\">Email</label>
						<div class=\"col-sm-10\">
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-name\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
							<label for=\"input-un\" class=\"col-sm-2 control-label\">Username</label>
						<div class=\"col-sm-10\">
							<input name =\"input-un\" type=\"text\" class=\"form-control\" id=\"input-un\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
							<label for=\"input-email\" class=\"col-sm-2 control-label\">Email</label>
						<div class=\"col-sm-10\">
							<input name =\"input-email\" type=\"email\" class=\"form-control\" id=\"input-email\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
							<label for=\"input-pw\" class=\"col-sm-2 control-label\">Password</label>
						<div class=\"col-sm-10\">
							<input name =\"input-pw\" type=\"password\" class=\"form-control\" id=\"input-pw\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">User Type</label>
						<select name=\"input-type\" class=\"form-control\" id=\"user-type-selector\">
							<option value=\"Critic\">Critic</option>
							<option value=\"Blogger\">Blogger</option>
							<option value=\"Diner\">Diner</option>
						</select>
					</div>
			</div>
			<div class=\"modal-footer\" style=\"text-align: center;\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
				<button type=\"submit\" class=\"btn btn-success\">Sign Up</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal View to Create Restaurant -->
<div class=\"modal fade\" id=\"createRestaurant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"createRestaurant\" aria-hidden=\"true\">
	<div class=\"modal-dialog\">
		<div class=\"modal-content\">
			<div class=\"modal-header\" align=\"center\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<h4 class=\"modal-title\" id=\"myModalLabel\">Create Restaurant</h4>
			</div>
			<div class=\"modal-body\">
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/createrestaurant.php?type=".$type."\" role=\"form\">
					<div class=\"form-group\">
							<label for=\"input-id\" class=\"col-sm-2 control-label\">ID</label>
						<div class=\"col-sm-10\">
							<input name =\"input-id\" type=\"text\" class=\"form-control\" id=\"input-id\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
							<label for=\"input-name\" class=\"col-sm-2 control-label\">Name</label>
						<div class=\"col-sm-10\">
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-name\" required autofocus/>
						</div>
					</div>	
					<div class=\"form-group\">
							<label for=\"input-type\" class=\"col-sm-2 control-label\">Type</label>
						<div class=\"col-sm-10\">
							<input name =\"input-type\" type=\"text\" class=\"form-control\" id=\"input-type\" required autofocus/>
						</div>
					</div>
						<div class=\"form-group\">
								<label for=\"input-url\" class=\"col-sm-2 control-label\">Website</label>
							<div class=\"col-sm-10\">
							<input name =\"input-url\" type=\"url\" class=\"form-control\" id=\"input-url\" required autofocus/>
							</div>
					</div>
						<div class=\"form-group\">
								<label for=\"input-lid\" class=\"col-sm-2 control-label\">Location ID</label>
							<div class=\"col-sm-10\">
							<input name =\"input-lid\" type=\"text\" class=\"form-control\" id=\"input-lid\" required autofocus/>
							</div>
					</div>
							<div class=\"form-group\">
									<label for=\"input-address\" class=\"col-sm-2 control-label\">Address</label>
								<div class=\"col-sm-10\">
							<input name =\"input-address\" type=\"text\" class=\"form-control\" id=\"input-address\" required autofocus/>
								</div>
					</div>
							<div class=\"form-group\">
									<label for=\"input-man\" class=\"col-sm-2 control-label\">Manager</label>
								<div class=\"col-sm-10\">
							<input name =\"input-man\" type=\"text\" class=\"form-control\" id=\"input-man\" required autofocus/>
								</div>
					</div>
							<div class=\"form-group\">
									<label for=\"input-pn\" class=\"col-sm-2 control-label\">Phone Number</label>
								<div class=\"col-sm-10\">
							<input name =\"input-pn\" type=\"text\" class=\"form-control\" id=\"input-pn\" required autofocus/>
								</div>
					</div>
							<div class=\"form-group\">
									<label for=\"input-open\" class=\"col-sm-2 control-label\">Hour Open</label>
								<div class=\"col-sm-10\">
							<input name =\"input-open\" type=\"text\" class=\"form-control\" id=\"input-open\" required autofocus/>
								</div>
					</div>
							<div class=\"form-group\">
									<label for=\"input-close\" class=\"col-sm-2 control-label\">Hour Close</label>
								<div class=\"col-sm-10\">
							<input name =\"input-close\" type=\"text\" class=\"form-control\" id=\"input-close\" required autofocus/>
								</div>
					</div>
							<div class=\"form-group\">
									<label for=\"input-date\" class=\"col-sm-2 control-label\">Date Opened</label>
								<div class=\"col-sm-10\">
							<input name =\"input-date\" type=\"date\" class=\"form-control\" id=\"input-date\" required autofocus/>
								</div>
						</div>
			</div>
			<div class=\"modal-footer\" style=\"text-align: center;\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
				<button type=\"submit\" class=\"btn btn-success\">Create Restaurant</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal View for Create Menu Item -->
<div class=\"modal fade\" id=\"createMenuItem\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"createMenuItem\" aria-hidden=\"true\">
	<div class=\"modal-dialog\">
		<div class=\"modal-content\">
			<div class=\"modal-header\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<h4 class=\"modal-title\" id=\"myModalLabel\">Create Menu Item</h4>
			</div>
			<div class=\"modal-body\">
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/createmenuitem.php?locid=".$locationId."\" role=\"form\">
					<div class=\"form-group\">
							<label for=\"input-id\" class=\"col-sm-2 control-label\">Item ID</label>
						<div class=\"col-sm-10\">
							<input name =\"input-id\" type=\"text\" class=\"form-control\" id=\"input-id\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
							<label for=\"input-name\" class=\"col-sm-2 control-label\">Item Name</label>
						<div class=\"col-sm-10\">
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-name\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">Type of Food</label>
						<select name=\"input-type\" class=\"form-control\" id=\"user-type-selector\">
							<option value=\"Beverage\">Beverage</option>
							<option value=\"Food\">Food</option>
							<option value=\"Vegetarian\">Vegetarian</option>
						</select>
					</div>
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">Category</label>
						<select name=\"input-category\" class=\"form-control\" id=\"user-type-selector\">
							<option value=\"\Appetizer\">Appetizers</option>
							<option value=\"Desserts\">Desserts</option>
							<option value=\"Mains\">Mains</option>
							<option value=\"Sandwiches And Burgers\">Sandwiches and Burgers</option>
							<option value=\"Snacks\">Snacks</option>
							<option value=\"Drinks\">Drinks</option>
						</select>
					</div>
					<div class=\"form-group\">
							<label for=\"input-d\" class=\"col-sm-2 control-label\">Description</label>
						<div class=\"col-sm-10\">
							<input name =\"input-d\" type=\"text\" class=\"form-control\" id=\"input-d\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
							<label for=\"input-price\" class=\"col-sm-2 control-label\">Price</label>
						<div class=\"col-sm-10\">
							<input name =\"input-price\" type=\"text\" class=\"form-control\" id=\"input-price\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\" id=\"restIdForm\" style=\"text-align:center\">
					</div>
			</div>
			<div class=\"modal-footer\" style=\"text-align: center;\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
				<button type=\"submit\" class=\"btn btn-success\">Create Menu Item</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal View for Deleting MenuItem -->
<div class=\"modal fade\" id=\"deleteMenuItem\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteMenuItem\" aria-hidden=\"true\">
	<div class=\"modal-dialog\">
		<div class=\"modal-content\">
			<div class=\"modal-header\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<h4 class=\"modal-title\" id=\"myModalLabel\" style=\"text-align: center;\">Delete Item</h4>
			</div>
			<div class=\"modal-body\" style=\"text-align: center;\">
				<form class=\"form-horizontal\" id=\"menu-item-delete\" name=\"formID\" method=\"post\" action=\"php/d-menuitem.php?locid=".$locationId."\" role=\"form\">
						<div class=\"form-group\">
							Are you sure you want to delete this item?
						</div>
			<div class=\"modal-footer\" style=\"text-align: center;\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
				<button type=\"submit\" class=\"btn btn-danger\">Yes</button>
			</div>
			</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal View for Deleting Restaurant -->
<div class=\"modal fade\" id=\"deleteRestaurant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteRestaurant\" aria-hidden=\"true\">
	<div class=\"modal-dialog\">
		<div class=\"modal-content\">
			<div class=\"modal-header\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<h4 class=\"modal-title\" id=\"myModalLabel\" style=\"text-align: center;\">Delete Restaurant</h4>
			</div>
			<div class=\"modal-body\" style=\"text-align: center;\">
				<form class=\"form-horizontal\" id=\"restaurant-delete\" name=\"formID\" method=\"post\" action=\"php/d-restaurant.php\" role=\"form\">
						<div class=\"form-group\">
							Are you sure you want to delete this restaurant?
						</div>
			<div class=\"modal-footer\" style=\"text-align: center;\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
				<button type=\"submit\" class=\"btn btn-danger\">Yes</button>
			</div>
			</form>
			</div>
		</div>
	</div>
</div>";
?>

