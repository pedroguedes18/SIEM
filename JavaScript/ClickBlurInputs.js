$(function(){
    /* Hide form input text values on focus*/
    $('input:text').each(function(){
        var value = $(this).val();
        $(this).focus(function(){
            if($(this).val() == value){
                $(this).val('')
            }
        });
        $(this).blur(function(){
            if($(this).val() == ""){
                $(this).val(value);
            }
        });
    });
});
