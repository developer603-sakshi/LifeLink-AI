<?php

include 'db.php';

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$blood_group = $_POST['blood_group'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$city = $_POST['city'];
$area = $_POST['area'];
$last_donation_date = $_POST['last_donation_date'];
$available = $_POST['available'];

$sql = "INSERT INTO donors(
full_name,
phone,
email,
blood_group,
gender,
age,
city,
area,
last_donation_date,
available
)
VALUES(
'$full_name',
'$phone',
'$email',
'$blood_group',
'$gender',
'$age',
'$weight',
'$city',
'$area',
'$last_donation_date',
'$available'
)";
if($weight < 50){
    die("Sorry! Minimum weight should be 50 kg for blood donation.");
}
if(mysqli_query($conn,$sql))
{
    echo "
    <script>
    alert('Donor Registered Successfully ❤️');
    window.location='../become-donor.php';
    </script>
    ";
}
else
{
    echo 'Error : '.mysqli_error($conn);
}

?>