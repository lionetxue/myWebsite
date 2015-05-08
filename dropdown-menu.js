/**
 * Created by lin on 5/7/15.
 */
$(document).ready(function(){

    $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
    });

});