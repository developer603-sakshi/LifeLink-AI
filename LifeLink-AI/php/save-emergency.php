<?php

include 'db.php';

$patient_name = $_POST['patient_name'];
$blood_group = $_POST['blood_group'];
$units_required = $_POST['units_required'];
$hospital_name = $_POST['hospital_name'];
$hospital_address = $_POST['hospital_address'];
$contact_number = $_POST['contact_number'];
$emergency_level = $_POST['emergency_level'];
$required_within = $_POST['required_within'];

$sql = "INSERT INTO emergency_requests(
patient_name,
blood_group,
units_required,
hospital_name,
hospital_address,
contact_number,
emergency_level,
required_within
)
VALUES(
'$patient_name',
'$blood_group',
'$units_required',
'$hospital_name',
'$hospital_address',
'$contact_number',
'$emergency_level',
'$required_within'
)";

if(mysqli_query($conn,$sql))
{
?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="alert alert-success text-center p-5">

<h2>🚨 Emergency Request Sent Successfully</h2>

<p>Your request has been recorded.</p>

<a
href="../emergency-sos.php"
class="btn btn-danger">

Back

</a>

</div>

</div>

</body>
</html>

<?php
}
else
{
echo mysqli_error($conn);
}

?>