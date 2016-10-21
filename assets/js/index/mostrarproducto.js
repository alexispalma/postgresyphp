$(document).ready(function() {
    $.ajax({
        url: 'phps/products.php',
        type: 'GET',
        dataType: 'json'
    })
    .done(function(data) {
        console.log(data);
        var $select = $('#producto');
        $select.empty();
        $select.append($("<option></option>")
            .attr('value', 0)
            .text('- nombre -'));
        $.each(data, function(i, item) {
             $select.append($("<option></option>")
                .attr('value', item.pk)
                .text(item.name))
        });
    });
});