<?php
session_start();
include_once("connect/connect_me_to_db.php");

// Date and time variables
$date = date('D d - m - Y');

$second = date('s');
$minute = date('i');
$hour = (date('H') - 1);
if ($hour > 12) {
    $hour = $hour - 12;
    $time = $hour . ":" . $minute . ":" . $second . " PM";
} else {
    $time = $hour . ":" . $minute . ":" . $second . " AM";
}

// This function accepts product name, and returns product id
function prod_name_to_prod_id($product_name, $conn)
{
    $product_name = trim(mysqli_real_escape_string($conn, $product_name));
    $query_product = mysqli_query($conn, "SELECT * FROM products WHERE Product_Generic_Name='$product_name'") or mysql_error();
    $count = mysqli_num_rows($query_product);
    if ($count > 0) {
        $row = mysqli_fetch_array($query_product);
        $product_id = $row['Product_Id'];
        return $product_id;
    } else {
        return $product_name;
    }
}

// This function accepts product id, and returns product name
function prod_id_to_prod_name($product_id, $conn)
{
    $product_id = trim(mysqli_real_escape_string($conn, $product_id));
    $query_product = mysqli_query($conn, "SELECT * FROM products WHERE Product_Id='$product_id'") or mysql_error();
    $count = mysqli_num_rows($query_product);
    if ($count > 0) {
        $row = mysqli_fetch_array($query_product);
        $product_name = $row['Product_Generic_Name'];
        return $product_name;
    } else {
        return $product_id;
    }
}

// This function accepts station id, and returns station name
function station_id_to_station_name($station_id, $conn)
{
    $station_id = trim(mysqli_real_escape_string($conn, $station_id));
    $query_product = mysqli_query($conn, "SELECT * FROM gas_stations WHERE Station_Id='$station_id'") or mysql_error();
    $count = mysqli_num_rows($query_product);
    if ($count > 0) {
        $row = mysqli_fetch_array($query_product);
        $station_name = $row['Station_Name'];
        return $station_name;
    } else {
        return $station_id;
    }
}

// This function accepts station name, and returns station id
function station_name_to_station_id($station_name, $conn)
{
    $station_name = trim(mysqli_real_escape_string($conn, $station_name));
    $query_product = mysqli_query($conn, "SELECT * FROM gas_stations WHERE Station_Name='$station_name'") or mysql_error();
    $count = mysqli_num_rows($query_product);
    if ($count > 0) {
        $row = mysqli_fetch_array($query_product);
        $station_id = $row['Station_Id'];
        return $station_id;
    } else {
        return $station_name;
    }
}

// This function fetches product's price depending on the product and gas station passed.
function fetch_product_price($station_id, $product_id, $conn)
{
    $query = mysqli_query($conn, "SELECT * FROM product_availability WHERE Station_Id='$station_id' AND Product_Id='$product_id' AND Product_Status='available'") or mysql_error();
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $row = mysqli_fetch_array($query);
        $price = $row['Price'];
        return $price;
    } else {
        return "unavailable";
    }
}

// This function signs the user in and returns successful if the user is a genuine user, else it returns failed
function sign_admin_in($username, $password, $conn)
{
    $username = trim(mysqli_real_escape_string($conn, $username));
    $password = trim(mysqli_real_escape_string($conn, $password));
    $query = mysqli_query($conn, "SELECT * FROM admin WHERE Username='$username' AND Password='$password' AND Status='active'") or mysql_error();
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $row = mysqli_fetch_array($query);
        // Getting the details of the signed in user from the database table
        $user_id = $row['User_Id'];
        $username = $row['Username'];
        $password = $row['Password'];
        $rank = $row['Rank'];
        $station_id = $row['Station_Id'];

        // putting the details of the person in session variables
        $_SESSION['User_Id'] = $user_id;
        $_SESSION['Username'] = $username;
        $_SESSION['Password'] = $password;
        $_SESSION['Rank'] = $rank;
        $_SESSION['Station_Id'] = $station_id;

        return 'successful';
    } else {
        return "failed";
    }
}

// This function creates or updates the product price
function create_or_update_product_price($station_id, $product_id, $product_price, $date, $time, $conn)
{

    $product_id = mysqli_real_escape_string($conn, $product_id);
    $station_id = mysqli_real_escape_string($conn, $station_id);
    $product_price = mysqli_real_escape_string($conn, $product_price);

    $query = mysqli_query($conn, "SELECT * FROM product_availability WHERE Station_Id='$station_id' AND Product_Id='$product_id'") or mysql_error();
    $count = mysqli_num_rows($query);
    if ($count > 0) { // If the product already exists for this station
        $update_record = mysqli_query($conn, "UPDATE product_availability
													SET
													Price	=	'$product_price',
													Date_Added	=	'$date',
													Time_Added	=	'$time'
													WHERE Station_Id='$station_id' AND Product_Id='$product_id'") or mysql_error();
        if ($update_record) {
            echo "successful";
        } else {
            echo "failed";
        }
    } else { // IF THE RECORD FOR THAT GAS STATION AND THAT PRODUCT DOES NOT ALREADY EXISTS, WE CREATE A NEW ONE
        $create_record = mysqli_query($conn, "INSERT INTO product_availability (Station_Id, Product_Id, Product_Status, Price, Date_Added, Time_Added) VALUES('$station_id','$product_id','available','$product_price','$date','$time')") or mysql_error();
        if ($create_record) {
            echo "successful";
        } else {
            echo "failed";
        }
    }
}


// This method updates the product's status
function update_product_status($station_id, $product_id, $date, $time, $conn)
{

    $product_id = mysqli_real_escape_string($conn, $product_id);
    $station_id = mysqli_real_escape_string($conn, $station_id);

    // The product has to be in the product availability table first before we think of modifying its status.
    $query = mysqli_query($conn, "SELECT * FROM product_availability WHERE Station_Id='$station_id' AND Product_Id='$product_id'") or mysql_error();
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $row = mysqli_fetch_array($query);
        $status = $row['Product_Status'];

        if ($status == "available") {
            $status = "not_available";
        } else {
            $status = "available";
        }
        $update_record = mysqli_query($conn, "UPDATE product_availability
													SET
													Product_Status	=	'$status',
													Date_Added		=	'$date',
													Time_Added		=	'$time'
													WHERE Station_Id='$station_id' AND Product_Id='$product_id'") or mysql_error();
        if ($update_record) {
            echo "successful";
        } else {
            echo "failed";
        }
    } else {
        echo "failed";
    }
}


// This function determines the status of the product passed to it
function fetch_product_status($station_id, $product_id, $conn)
{
    $query = mysqli_query($conn, "SELECT * FROM product_availability WHERE Station_Id='$station_id' AND Product_Id='$product_id'") or mysql_error();
    $count = mysqli_num_rows($query);
    if ($count > 0) {
        $row = mysqli_fetch_array($query);
        $status = $row['Product_Status'];
        if ($status == "available") {
            echo "available";
        } else {
            echo "not_available";
        }
    } else {
        echo "not_added_to_table_yet";
    }
}

function station_image($station_id, $conn)
{
    $station_id = trim(mysqli_real_escape_string($conn, $station_id));
    $query_product = mysqli_query($conn, "SELECT * FROM gas_stations WHERE Station_Id='$station_id'") or mysql_error();
    $count = mysqli_num_rows($query_product);
    if ($count > 0) {
        $row = mysqli_fetch_array($query_product);
        $path = $row['Image_Path'];
        if (trim($path != "")) {
            return "../" . $path;
        } else {
            return "no_image";
        }
    } else {
        return "no_image";
    }
}


    function fetch_location_select($conn){
    $query = mysqli_query($conn, "SELECT * FROM gas_stations GROUP BY Station_Address");
    //    $query = mysqli_query($conn, "SELECT * FROM gas_stations WHERE status='active' GROUP BY Station_Address");
    $count = mysqli_num_rows($query);
    ?>

        <option value="">--select one--</option>
        <?php
        if ($count > 0) {

            while ($row = mysqli_fetch_array($query)) {
                // Getting the details of the signed in user from the database table
                $station_id = $row['Station_Id'];
                $location_name = $row['Station_Address'];
                ?>
                <option value="<?php echo $station_id; ?>"><p
                        style="text-transform: uppercase;"><?php echo $location_name; ?></p></option>
                <?php
            }
        }
        ?>

<?php }
?>
 