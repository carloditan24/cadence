$("form").submit(function(e){
    var postData = $(this).closest('form').serializeArray();
    postData.push({ name: this.name, value: this.value });
    var formURL = $(this).attr("action");
    $.ajax(
        {
            url : formURL,
            type : "POST",
            data : postData,
            success: function(data, textStatus, jqXHR){
                $(".msg").fadeIn().append(
                    "<div class='alert alert-success'>" +
                        "<span class='glyphicon glyphicon-check'></span>&nbsp"+data+
                    "</div>");
                window.setTimeout(function(){window.location.replace('add')},3000);
            }
        });
    e.preventDefault();
})

var regex = {
    'emp_no':/\d{3,3}/,
    'name':/[A-Za-z ]{2,}/,
    'username':/[A-za-z0-9]{5,}/,
    'password': /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}/,
    'contact_number': /09\d{9}/
};

$('#id').on('input',function(){
    if(!regex.emp_no.test($('#id').val())){
        document.getElementById('id').setCustomValidity('Employee number must have exactly three digits.');
    }else{
        $.get("check_duplicate_id", {id:$('#id').val()},
            function(data){
                document.getElementById('id').setCustomValidity(data);
            }
        );
    }
});

$('#l_name').on('input',function(){
    if(!regex.name.test($('#l_name').val())){
        document.getElementById('l_name').setCustomValidity('Last name must have at least 2 letters (no numbers and special characters).');
    }else{
        document.getElementById('l_name').setCustomValidity('');
    }
});

$('#f_name').on('input',function(){
    if(!regex.name.test($('#f_name').val())){
        document.getElementById('f_name').setCustomValidity('First name must have at least 2 letters (no numbers and special characters).');
    }else{
        document.getElementById('f_name').setCustomValidity('');
    }
});

$('#m_name').on('input',function(){
    if(!regex.name.test($('#m_name').val())){
        document.getElementById('m_name').setCustomValidity('Middle name must have at least 2 letters (no numbers and special characters).');
    }else{
        document.getElementById('m_name').setCustomValidity('');
    }
});

$('#username').on('input',function(){
    if(!regex.username.test($('#username').val())){
        document.getElementById('username').setCustomValidity('Username must have at least 5 alphanumeric characters.');
    }else{
        $.get("check_duplicate_username", {username:$('#username').val()},
            function(data){
                document.getElementById('username').setCustomValidity(data);
            }
        );
    }
});

$('#password').on('input',function(){
    if(!regex.password.test($('#password').val())){
        document.getElementById('password').setCustomValidity('Password must contain 6-15 characters with at least one upper case letter, one lower case letter, and one digit.');
    }else{
        document.getElementById('password').setCustomValidity('');
    }
});

$('#conf_pass').on('input',function(){
    if($('#password').val() != $('#conf_pass').val()){
        document.getElementById('conf_pass').setCustomValidity('The two passwords must match.');
    }else{
        document.getElementById('conf_pass').setCustomValidity('');
    }
});

$('#contact_number').on('input',function(){
    if(!regex.contact_number.test($('#contact_number').val())){
        document.getElementById('contact_number').setCustomValidity('Contact number must follow the standard cellphone number format (09xxxxxxxxx)');
    }else{
        document.getElementById('contact_number').setCustomValidity('');
    }
});