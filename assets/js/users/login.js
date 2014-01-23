$('#login').submit(function(e){
	var username = $('#username').val();
	var password = $('#password').val();
	var login = $('#login').val();
	if(username == "" && password == ""){
		$('#message').text("Please input username and password").fadeIn().delay(3000).fadeOut();
	}else{
		$.post('login', {username: username, password: password, login: login},
		function(data){
			if(data == "Invalid username/password"){
				$('#message').text(data).fadeIn().delay(3000).fadeOut();
			}else{
				window.location.replace('home');	
			}
		});
	}
    e.preventDefault();
});