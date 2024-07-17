$(document).ready(function(){

    $("#jquery-submit-ajax").submit(function(e) {
    
        $.ajax({
    
            type: "POST",
    
            url: "jquery-ajax-control.php",
    
            data: $(e.target).serialize(),
    
            dataType: "json",
    
            beforeSend:function(){
    
                $('.alert-error,.alert-success').hide();
    
            },
    
            error: function(jqXHR, textStatus, errorThrown){
    
                $('.alert-error').fadeIn();
    
                $('#error-output').html(errorThrown);
    
            },
    
            success: function(data){
    
                $('.alert-success').fadeIn();
    
                $('#success-output').html(data);
    
            }
    
        });
    
        return false;
    
    });