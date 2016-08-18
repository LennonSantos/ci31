$('#sendEmail').submit(function()
{
    $('.fa-spinner').css("visibility", "visible");

    $.ajax(
            {
                type: 'POST',
                url: '/ci31/home/emailenviar',
                data: $(this).serialize()
            }
        )
    .done(
            function(data)
            {
                //location.href = data; 
                $('.fa-spinner').css("visibility", "hidden");
            }
        )
    .fail(
            function(data) 
            {
                //location.href = "#fail";
                $('.fa-spinner').css("visibility", "hidden");
            }
        );

    return false;

});