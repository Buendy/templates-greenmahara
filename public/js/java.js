$(function(){

    $("#btnprivate").click(function(eve){
        eve.preventDefault();
        $("#divleft").slideToggle("fast");
    });
});
