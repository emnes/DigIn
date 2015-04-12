<?php 
echo 
"<body>
<!-- Modal View for Log In -->
<div class=\"modal fade\" id=\"logInModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"logInModal\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
<div class=\"modal-content\">
<div class=\"modal-header\">
<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
<h4 class=\"modal-title\" id=\"myModalLabel\" style=\"text-align: center;\">Log In</h4>
</div>
<div class=\"modal-body\">
<form class=\"form-horizontal\">
<div class=\"form-group\">
<label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
<div class=\"col-sm-10\">
<input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
</div>
</div>
<div class=\"form-group\">
<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
<div class=\"col-sm-10\">
<input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
</div>
</div>
<div class=\"form-group\">
<div class=\"col-sm-offset-2 col-sm-10\">
<div class=\"checkbox\">
<label>
<input type=\"checkbox\"> Remember me
</label>
</div>
</div>
</div>
</form>
</div>
<div class=\"modal-footer\">
<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
<button type=\"submit\" class=\"btn btn-primary\" >Log in</button>
</div>
</div>
</div>
</div>

<!-- Modal View for Sign Up -->
<div class=\"modal fade\" id=\"signUpModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"logInModal\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
<div class=\"modal-content\">
<div class=\"modal-header\">
<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
<h4 class=\"modal-title\" id=\"myModalLabel\">Sign Up</h4>
</div>
<div class=\"modal-body\">
<form class=\"form-horizontal\">
<div class=\"form-group\">
<label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Name\">
</div>
</div>
<div class=\"form-group\">
<label for=\"inputUsername\" class=\"col-sm-2 control-label\">Username</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"inputUsername\" placeholder=\"Username\">
</div>
</div>
<div class=\"form-group\">
<label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
<div class=\"col-sm-10\">
<input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
</div>
</div>
<div class=\"form-group\">
<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
<div class=\"col-sm-10\">
<input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
</div>
</div>

<div class=\"form-group\">
<label for=\"user-type-selector\" class=\"col-sm-2 control-label\">User Type</label>
<select class=\"form-control\" id=\"user-type-selector\">
<option value=\"one\">Critic</option>
<option value=\"two\">Blogger</option>
<option value=\"three\">Diner</option>
</select>
</div>

<div class=\"form-group\">
<div class=\"col-sm-offset-2 col-sm-10\">
<div class=\"checkbox\">
<label>
<input type=\"checkbox\"> Remember me
</label>
</div>
</div>
</div>
</form>
</div>
<div class=\"modal-footer\">
<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">OK</button>
</div>
</div>
</div>
</div>

<!-- Modal View for Create Menu Item -->
<div class=\"modal fade\" id=\"signUpModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"logInModal\" aria-hidden=\"true\">
<div class=\"modal-dialog\">
<div class=\"modal-content\">
<div class=\"modal-header\">
<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
<h4 class=\"modal-title\" id=\"myModalLabel\">Sign Up</h4>
</div>
<div class=\"modal-body\">
<form class=\"form-horizontal\">
<div class=\"form-group\">
<label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Name\">
</div>
</div>
<div class=\"form-group\">
<label for=\"inputUsername\" class=\"col-sm-2 control-label\">Username</label>
<div class=\"col-sm-10\">
<input type=\"text\" class=\"form-control\" id=\"inputUsername\" placeholder=\"Username\">
</div>
</div>
<div class=\"form-group\">
<label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
<div class=\"col-sm-10\">
<input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
</div>
</div>
<div class=\"form-group\">
<label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
<div class=\"col-sm-10\">
<input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
</div>
</div>
<div class=\"form-group\">
<div class=\"col-sm-offset-2 col-sm-10\">
<div class=\"checkbox\">
<label>
<input type=\"checkbox\"> Remember me
</label>
</div>
</div>
</div>
</form>
</div>
<div class=\"modal-footer\">
<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">OK</button>
</div>
</div>
</div>
</div>"

?>