$(document).ready(function () {
    $('.post').submit(function() {
        var url = "intern_details.php";
        var data = $('.post').serialize();
        $.ajax({
            url: url,
            data: data,
            success: post_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var post_success = function (response) {    
    response = JSON.parse(response);    

    if (response.success) {
        //alert(response.message);
        window.location.href = "/";
    } else {
        alert(response.message);
    }
};
var on_error = function () {
    alert("something went wrong");
};