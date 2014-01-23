<html>
<head>
	<?php
		include('include/styles.html');
	?>
	<link href="/assets/css/login-form.css" rel="stylesheet">
</head>
<body onload="$('#message').hide();">
	<div id="message"></div>
	<?php include('include/navbar.php');?>
	<div class="container">
		<form class='form-signin' id="login" method='post'>
			<h2 class="form-signin-heading">Please sign in</h2>
			<p>		
				<input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus>
			</p>
			<p>		
		        <input type="password" id="password" name='password' class="form-control" placeholder="Password">
			</p>
			<p>
                <input type="submit" id="login" name="login" class="btn btn-lg btn-primary btn-block" value="Log In"/>
			</p>
		</form>
	</div>
	<?php include('include/scripts.html');?>
	<script src="/assets/js/users/login.js"></script>
</body>
</html>
