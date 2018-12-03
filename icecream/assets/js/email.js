$(document).ready(function() {
    $("#submit").click(function() {
        var email = $("#email").val();
// Checking for blank fields.
        if (name == '' || email == '' || contact == '') {
            alert("Please Fill Required Fields");
        } else {
// Returns successful data submission message when the entered information is stored in database.
            $.post("contact_form.php", {
                email1: email,
            }, function(data) {
                if (data == "Your Query has been received, We will contact you soon.") {
                    $("#form")[0].reset(); // To reset form fields on success.
                }
            });
        }
    });
});