$(document).ready(function() {
    $('#logear').click(function(event) {
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            url: 'phps/login.php',
            type: 'POST',
            data: {'username': username, 'password': password}
        })
            
                .done(function(data) {
            console.log(data);
            if (data == 'ok') {
                window.location.href="administraccion.php";
            }else if(data == 'error'){
            	$('#messages').text('error en el nombre de usuario o contraseñar');
            }
        }); 
    });
});
