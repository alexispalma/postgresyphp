$(document).ready(function() {
  $('#serra_cesion').click(function(event) {
    $.ajax({
      url: 'phps/destroySession.php',
    })
    .done(function(data) {
      console.log(data);
      if(data == 'session closed') {
        window.location.href="index.php";
      }
    });
    
  });
   $.ajax({
        url: 'phps/users.php',
        type: 'GET',
        dataType: 'json'
    })
    .done(function(data) {
        console.log(data);
        var $select = $('#users');
      	$select.empty();
      	$select.append($("<option></option>")
      		.attr('value', 0)
      		.text('- Seleccione Usuarios -'));

      	$.each(data, function(i, item) {
      		$select.append($("<option></option>")
      			.attr('value', item.pk)
      			.text(item.name))	
        });
    	});
     $.ajax({
        url: 'phps/categoria.php',
        type: 'GET',
        dataType: 'json'
    })
    .done(function(data) {
        console.log(data);
        var $select = $('#categoria');
        $select.empty();
        $select.append($("<option></option>")
            .attr("value", 0)
            .text('- categorias -'));
        $.each(data, function(index, item) {
             $select.append($('<option></option>')
                .attr('value', item.pk)
                .text(item.name))
        });
    }); 
});

