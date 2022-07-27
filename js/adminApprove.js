$(document).ready( function () {
    $("#registration").load("/admin/approve-table");
    $("#refresh").click(function () {
        $("#registration").load("/admin/approve-table");
    });

    $("#refresh").click(function () { //Note: refresh all data on all admin pages
    $(".fa-rotate-right").addClass("rotate").delay(500).queue(function(){
        $(this).removeClass("rotate");
        $(this).dequeue();
    });
    });
    
} );
  