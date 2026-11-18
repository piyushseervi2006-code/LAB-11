
<?php
function clean($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$name = clean($_POST["name"]);
$gender = clean($_POST["gender"]);
$mobile = clean($_POST["mobile"]);
$email = clean($_POST["email"]);
$city = clean($_POST["city"]);
$state = clean($_POST["state"]);
$country = clean($_POST["country"]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>User Information Output</h2>

    <table>
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Gender</td><td><?php echo $gender; ?></td></tr>
        <tr><td>Mobile</td><td><?php echo $mobile; ?></td></tr>
        <tr><td>Email</td><td><?php echo $email; ?></td></tr>
        <tr><td>City</td><td><?php echo $city; ?></td></tr>
        <tr><td>State</td><td><?php echo $state; ?></td></tr>
        <tr><td>Country</td><td><?php echo $country; ?></td></tr>
    </table>

    <br>

    <a href="index.html">Go Back</a>

</div>

</body>
</html>
