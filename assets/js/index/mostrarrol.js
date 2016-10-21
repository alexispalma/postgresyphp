$(document).ready(function() {
    $.ajax({
        url: 'phps/rolm.php',
        type: 'GET',
        dataType: 'json'
    })
    .done(function(data) {
        console.log(data);
        var $select = $('#role');
        $select.empty();
        $select.append($("<option></option>")
            .attr('value', 0)
            .text('- mostrar roleses -'));
        $.each(data, function(i, item) {
             $select.append($("<option></option>")
                .attr('value', item.pk)
                .text(item.name))
        });
    });
});