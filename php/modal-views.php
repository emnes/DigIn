<?php 
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
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-email\">Email address</label>
							<input name =\"input-email\" type=\"email\" class=\"form-control\" id=\"input-email\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-pw\">Password</label>
							<input name =\"input-pw\" type=\"password\" class=\"form-control\" id=\"input-pw\" required/>
						</div>
					</div>
					<div class=\"text-center\">
						<button type=\"submit\" class=\"btn btn-primary\"><strong>Login!</strong></button>
					</div>
				</form>

			</div>
			<div class=\"modal-footer\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
			</div>
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
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-name\">Name</label>
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-name\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-un\">Username</label>
							<input name =\"input-email\" type=\"text\" class=\"form-control\" id=\"input-un\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-email\">Email address</label>
							<input name =\"input-email\" type=\"email\" class=\"form-control\" id=\"input-email\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-pw\">Password</label>
							<input name =\"input-pw\" type=\"password\" class=\"form-control\" id=\"input-pw\" required/>
						</div>
					</div>
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">User Type</label>
						<select class=\"form-control\" id=\"user-type-selector\">
							<option value=\"critic\">Critic</option>
							<option value=\"blogger\">Blogger</option>
							<option value=\"diner\">Diner</option>
						</select>
					</div>

					<div class=\"text-center\">
						<button type=\"submit\" class=\"btn btn-primary\"><strong>Sign Up!</strong></button>
					</div>
				</form>
			</div>
			<div class=\"modal-footer\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
			</div>
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
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/createmenuitem.php\" role=\"form\">
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-id\">Item Id</label>
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-id\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-name\">Item Name</label>
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-name\" required autofocus/>
						</div>
					</div>
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">Type of Food</label>
						<select class=\"form-control\" id=\"user-type-selector\">
							<option value=\"beverage\">Beverage</option>
							<option value=\"food\">Food</option>
							<option value=\"vegetarian\">Vegetarian</option>
						</select>
					</div>
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">Category</label>
						<select class=\"form-control\" id=\"user-type-selector\">
							<option value=\"\appetizer\">Appetizers</option>
							<option value=\"desserts\">Desserts</option>
							<option value=\"mains\">Mains</option>
							<option value=\"sandwiches and burgers\">Sandwiches and Burgers</option>
							<option value=\"snacks\">Snacks</option>
						</select>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-d\">Description</label>
							<input name =\"input-d\" type=\"text\" class=\"form-control\" id=\"input-d\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-price\">Price</label>
							<input name =\"input-price\" type=\"text\" class=\"form-control\" id=\"input-price\" required/>
						</div>
					</div>

					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-id\">Restaurant Id</label>
							<input name =\"input-id\" type=\"text\" class=\"form-control\" id=\"input-id\" required/>
						</div>
					</div>
					<div class=\"text-center\">
						<button type=\"submit\" class=\"btn btn-primary\"><strong>Create!</strong></button>
					</div>
				</form>
			</div>
			<div class=\"modal-footer\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
			</div>
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
			<div class=\"modal-body\">
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/deletemenuitem.php\" role=\"form\">
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">Are you sure you want to delete this item?</label>
						<select class=\"form-control\" id=\"user-type-selector\">
							<option value=\"yes\">Yes</option>
							<option value=\"no\">No</option>
						</select>
					</div>	
					<div class=\"text-center\">
						<button type=\"submit\" class=\"btn btn-primary\"><strong>Delete!</strong></button>
					</div>			
				</form>
			</div>
			<div class=\"modal-footer\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal View to Create Restaurant Item -->
<div class=\"modal fade\" id=\"createRestaurant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"createRestaurant\" aria-hidden=\"true\">
	<div class=\"modal-dialog\">
		<div class=\"modal-content\">
			<div class=\"modal-header\">
				<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
				<h4 class=\"modal-title\" id=\"myModalLabel\">Create Restaurant</h4>
			</div>
			<div class=\"modal-body\">
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/createrestaurant.php\" role=\"form\">
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-id\">Restaurant Id</label>
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-id\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-name\">Restaurant Name</label>
							<input name =\"input-name\" type=\"text\" class=\"form-control\" id=\"input-name\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-type\">Restaurant Type</label>
							<input name =\"input-type\" type=\"text\" class=\"form-control\" id=\"input-type\" required autofocus/>
						</div>
					</div>
					<div class=\"row\">
						<div class=\"form-group-xs\">
							<label for=\"input-url\">Restaurant URL</label>
							<input name =\"input-url\" type=\"text\" class=\"form-control\" id=\"input-url\" required autofocus/>
						</div>
					</div>
					<div class=\"text-center\">
						<button type=\"submit\" class=\"btn btn-primary\"><strong>Create!</strong></button>
					</div>
				</form>
			</div>
			<div class=\"modal-footer\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
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
			<div class=\"modal-body\">
				<form class=\"form-horizontal\" name=\"formID\" method=\"post\" action=\"php/deleterestaurant.php\" role=\"form\">
					<div class=\"form-group\">
						<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">Are you sure you want to delete this restaurant?</label>
						<select class=\"form-control\" id=\"user-type-selector\">
							<option value=\"yes\">Yes</option>
							<option value=\"no\">No</option>
						</select>
					</div>	
					<div class=\"text-center\">
						<button type=\"submit\" class=\"btn btn-primary\"><strong>Delete!</strong></button>
					</div>				
				</form>
			</div>
			<div class=\"modal-footer\">
				<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
			</div>
		</div>
	</div>
</div>"

?>