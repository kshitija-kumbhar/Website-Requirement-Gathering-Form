<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websiteform";

// Create connection and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//Run only if form is submitted using post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data from $_POST
    /* ?? - This is PHP "null coalescing operator" - If value exists use it or use default value.
        If $_POST['fullname'] exist store it in $fullname. Is it does not exist store empty string ''.
        $fullname = $_POST['fullname']; - If written only this then it will show error or warning. 
        Syntax: $value = something ?? default; */
    $fullname = $_POST['fullname'] ?? '';
    $orgname = $_POST['orgname'] ?? '';
    $logo = $_POST['logo'] ?? '';
    $bdesc = $_POST['bdesc'] ?? '';
    $baddress = $_POST['baddress'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $fb = $_POST['fb'] ?? '';
    $ig = $_POST['ig'] ?? '';
    $yt = $_POST['yt'] ?? '';
    $PSinfo = $_POST['PSinfo'] ?? '';
    $certificate = $_POST['certificate'] ?? '';
    $team = $_POST['team'] ?? '';
    $comp = $_POST['comp'] ?? '';
    $price = $_POST['price'] ?? '';
    $color = $_POST['color'] ?? '';
    $font = $_POST['font'] ?? '';
    $bword = $_POST['bword'] ?? '';
    $photos = $_POST['photos'] ?? '';
    $test = $_POST['test'] ?? '';

    // Insert query
    $sql = "INSERT INTO requirements
            (fullname, orgname, logo, bdesc, baddress, phone, email, fb, ig, yt, PSinfo, certificate, 
            team, comp, price, color, font, bword, photos, test)
            VALUES
            ('$fullname', '$orgname', '$logo', '$bdesc', '$baddress', '$phone', '$email', '$fb', '$ig', '$yt',
            '$PSinfo', '$certificate', '$team', '$comp', '$price', '$color', '$font', '$bword', '$photos', '$test')";

    //Execute query
    if (mysqli_query($conn, $sql)) {
    echo "success";
    } else {
    echo "error";
    }

}

//Close connection
mysqli_close($conn);

// This was to check if form was submitting
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo "success";
// } else {
//     echo "error";
// }
?>