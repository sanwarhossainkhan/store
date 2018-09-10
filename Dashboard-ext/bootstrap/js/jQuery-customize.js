jQuery(document).ready(function(){
    // Login animaiton =================
    var action = $("#error");        
    action.animate({top: '150px'}, 5);       
    action.animate({top: '170px'}, 5);
    action.animate({top: '150px'}, 20);       
    action.animate({top: '170px'}, 20);
    action.animate({top: '150px'}, 50);       
    action.animate({top: '170px'}, 50);
    action.animate({top: '150px'}, 100);       
    action.animate({top: '170px'}, 100);
    action.animate({top: '150px'}, 100);       
    action.animate({top: '170px'}, 500);
    // Login animaiton =================

    jQuery.fn.ForceNumericOnly =
    function()
    {
        return this.each(function()
        {
            $(this).keydown(function(e)
            {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                    key == 8 || 
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };
    $(".numbers_only").ForceNumericOnly();

});
