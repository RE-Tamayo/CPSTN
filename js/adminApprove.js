$(document).ready(
    function() {
        $("#registrationTable").load("/registration-table");
        $("#btn").click(function() {
            $("#registrationTable").load("/registration-table");
        });
    }
);