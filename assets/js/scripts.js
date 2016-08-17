$('#sendEmail').submit(function()
{
    $('.fa-spinner').css("visibility", "visible");

    $.ajax(
            {
                type: 'POST',
                url: '/ci31/home/email/enviar',
                data: $(this).serialize()
            }
        )
    .done(
            function(data)
            {
                location.href = data; 
                $('.fa-spinner').css("visibility", "hidden");               
                //alert(data);
            }
        )
    .fail(
            function(data) 
            {
                location.href = data;
                $('.fa-spinner').css("visibility", "hidden");
                //alert( "Posting failed." );
            }
        );

    return false;

});