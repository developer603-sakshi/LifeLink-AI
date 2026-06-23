<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Find Blood | LifeLink AI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="assets/css/find-blood.css">

</head>

<body>

<?php include 'components/navbar.php'; ?>

<section class="find-blood-section">

<div class="container">

<div class="text-center mb-5">

<h1 class="fw-bold">
🩸 Find Blood Donors
</h1>

<p class="text-muted">

Search nearby blood donors instantly.

</p>

</div>

<form method="GET">

<div class="row g-3">

<div class="col-md-4">

<select name="blood_group" class="form-select">

<option value="">Select Blood Group</option>

<option>O+</option>
<option>O-</option>
<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>

</select>

</div>

<div class="col-md-4">

<input
type="text"
name="city"
class="form-control"
placeholder="Enter City">

</div>

<div class="col-md-4">

<button
type="submit"
class="btn btn-danger w-100">

Search Donors

</button>

</div>

</div>

</form>

<h3 class="mt-5 mb-4">
Available Donors
</h3>

<div class="row g-4">


<?php

include 'php/db.php';

$blood_group = $_GET['blood_group'] ?? '';
$city = $_GET['city'] ?? '';

$query = "SELECT * FROM donors WHERE available='Yes'";

if($blood_group != '')
{
$query .= " AND blood_group='$blood_group'";
}

if($city != '')
{
$query .= " AND city LIKE '%$city%'";
}

$result = mysqli_query($conn,$query);

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
?>

<div class="col-md-4">

<div class="card donor-card border-0 shadow">

<div class="card-body text-center">

<img
src="https://i.pravatar.cc/120?u=<?php echo $row['id']; ?>"
class="donor-img">

<h5 class="mt-3">
<?php echo $row['full_name']; ?>
</h5>

<p class="text-danger fw-bold">
<?php echo $row['blood_group']; ?>
</p>

<p>
📍 <?php echo $row['city']; ?>,
<?php echo $row['area']; ?>
</p>

<p>
Available:
<span class="badge bg-success">
<?php echo $row['available']; ?>
</span>
</p>

<p>
Last Donation:
<?php echo $row['last_donation_date']; ?>
</p>

<a href="#"
class="btn btn-success">
WhatsApp
</a>

</div>

</div>

</div>

<?php
}
?>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>