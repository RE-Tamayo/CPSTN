$(document).ready(function() {

    $('#regTable').DataTable({ 
        bLengthChange: false,
        responsive: true,
        scrollY: '300px',
        scrollCollapse: true,
        paging: false,
        language: {
        searchPlaceholder: "Search",
        search: ""
        }
    })

});

$(document).ready( function () {
    $("#refresh").click(function () {
    });

    $("#refresh").click(function () { //Note: refresh all data on all admin pages
    $(".fa-rotate-right").addClass("rotate").delay(500).queue(function(){
        $(this).removeClass("rotate");
        $(this).dequeue();
    });
    });
    
} );
  