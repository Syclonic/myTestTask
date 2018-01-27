$(function() {
    $('.hidden').hide();

    $('body').on('click', 'button', function() {
        var id = $(this).attr('id');
        var activeClass = '.'+ id;

        $('#'+ id).switchClass('btn-primary', 'btn-success');

        if ($(activeClass).hasClass('opened')) {
            $(activeClass).slideUp()
                          .removeClass('opened');
            $('#'+ id).switchClass('btn-success', 'btn-primary');
        } else {

            $.ajax({
                type : 'POST',
                url  : 'controllers/ajax.php',
                data : {'id': id},
                success: function(data) {
                    $(activeClass).html(data)
                            .hide()
                            .slideDown('slow')
                            .addClass('opened');
                }
            });
        }
    });
});
