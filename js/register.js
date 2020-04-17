$(document).ready(function (){
    $("form").submit(function () {
        var password = $(".password").val();
        var confirmPassword = $(".psw").val();
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
     });
});