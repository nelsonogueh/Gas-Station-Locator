$("document").ready(function () {


});

// This function count how many stations have the product passed to it
function count_product_avail(product_name, element_result_holder_id) {
// It requires two arguments; the product_name to query for, and the id of the element that will be displaying the result
    $.ajax({
        url: "php_scripts/count_product_avail_index.php",
        method: "POST",
        data: {product_name_to_query: product_name},
        success: function (data) {
            $('#' + element_result_holder_id).html(data);
        }
    });
    // alert(product_name);
}
function count_product_avail2(product_name, element_result_holder_id) {
// It requires two arguments; the product_name to query for, and the id of the element that will be displaying the result
    $.ajax({
        url: "../php_scripts/count_product_avail_index.php",
        method: "POST",
        data: {product_name_to_query: product_name},
        success: function (data) {
            $('#' + element_result_holder_id).html(data);
        }
    });
    // alert(product_name);
}
function fetch_price(product_name, station, result_holder_element) {
    $.ajax({
        url: "../php_scripts/fetch_price.php",
        method: "POST",
        data: {product_name: product_name, station_accronym: station},
        success: function (data) {
            if (!(data.trim() == "unavailable")) {
                $('#' + result_holder_element).html("N" + data + " / Ltr");
                $('#' + result_holder_element).removeClass("alert alert-danger");
                $('#' + result_holder_element).addClass("alert alert-success");
                // $('#'+result_holder_element).css("margin","50px");
                // $('#'+result_holder_element).css("padding","50px");
            }
            else {
                $('#' + result_holder_element).html(data);
                $('#' + result_holder_element).removeClass("alert alert-success");
                $('#' + result_holder_element).addClass("alert alert-danger");

            }
            // alert(data);
        }
    });
}


function admin_sign_in_form() {
    var username = $('#user').val().trim();
    var password = $('#pass').val().trim();
    $.ajax({
        url: "../php_scripts/admin_signin.php",
        method: "POST",
        data: {admin_username: username, admin_password: password},
        success: function (data) {
            if (data.trim() == "successful") {
                window.location = "admin_portal.php?ref=welcome_user";
            }
            else {
                $('#request_response').addClass('alert alert-danger');
                $('#request_response').text('Username or password is incorrect!');
            }
            //alert(data.trim());
        }
    });
}

// This function updates the product's price
function update_fuel_price(product_name, product_price_input, station_id) {
    var price = $('#' + product_price_input).val().trim();
    $.ajax({
        url: "../php_scripts/update_product_price.php",
        method: "POST",
        data: {product_generic_name: product_name, product_new_price: price, station_id_code: station_id},
        success: function (data) {
            if (data.trim() == "successful") {
                alert("Product price updated successfully");
                //window.location = "admin_portal.php?ref=welcome_user";
                if (!(price == "")) {
                    $('#' + product_price_input).removeClass("alert-danger");
                    $('#' + product_price_input).addClass("alert-success");
                }
            }
            else {
                alert("Sorry! Could not update the price");
            }
            //	 alert(data.trim());

            console.log(data);
        }
    });

    //alert(product_name+"\n"+price+"\n"+station_id);
}

// This function updates the product's status
function update_product_status(product_name, product_status_input, station_id) {

    $.ajax({
        url: "../php_scripts/update_product_status.php",
        method: "POST",
        data: {product_generic_name: product_name, station_id_code: station_id},
        success: function (data) {
            if (data.trim() == "successful") {
                alert("Product status updated successfully");
                window.location = "admin_portal.php?ref=welcome_user";
            }
            else {
                alert("Sorry! You must enter price for the product first and update!");
            }
            // alert(data.trim());
        }
    });
}

function submitContactUs() {
    $('#contact_us_submit').text("Submitting...");


    var name = $('#contact_name').val();
    var email = $('#contact_email').val();
    var message = $('#contact_message').val();
    if (name == "" || email == "" || message == "") {
        $('#success_error').text("Sorry! The inputs cannot be empty.");
        $('#success_error').addClass("alert-danger");
        $('#success_error').removeClass("hidden");  // make it display
        $('#contact_us_submit').text("SUBMIT");
    }
    else { // if the inputs are okay
        $('#contactForm input, button, textarea').prop('disabled', true);
        $.ajax({
            url: "../php_scripts/contact_us_check.php",
            method: "POST",
            data: {nameSent: name, emailSent: email, messageSent: message},
            success: function (data) {
                if (data == "success") {
                    $('#contactForm').trigger('reset');
                    $('#success_error').text("Your message has been sent successfully!");
                    $('#success_error').addClass("alert-success");
                    $('#success_error').removeClass("alert-danger");
                    $('#success_error').removeClass("hidden");  // make it display
                }
                else {
                    $('#success_error').text("Your message could not be sent. Please try again!");
                    $('#success_error').addClass("alert-danger");
                    $('#success_error').removeClass("alert-success");
                    $('#success_error').removeClass("hidden");  // make it display
                }
                $('#contactForm input, button, textarea').prop('disabled', false);
                $('#contact_us_submit').text("SUBMIT");
                //html(data);
                // alert(data);
            }

        });
    }
}