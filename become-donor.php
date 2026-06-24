<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Become Donor | LifeLink AI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="assets/css/become-donor.css">

</head>

<body>

<?php include 'components/navbar.php'; ?>

<section class="donor-section">

<div class="container">

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card shadow border-0 donor-card">

<div class="card-body p-5">

<h2 class="text-center text-danger mb-4">

🩸 Become a Blood Donor

</h2>

<form action="php/donor-register.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>Full Name</label>

<input
type="text"
name="full_name"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label>Phone Number</label>

<input
type="tel"
name="phone"
class="form-control"
required>

</div>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Blood Group</label>

<select
name="blood_group"
class="form-select"
required>

<option>A+</option>
<option>A-</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>

</select>

</div>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Gender</label>

<select
name="gender"
class="form-select">

<option>Male</option>
<option>Female</option>
<option>Other</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label>Age</label>

<input
type="number"
name="age"
class="form-control">

</div>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>City</label>

<input
type="text"
name="city"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Area</label>

<input
type="text"
name="area"
class="form-control">

</div>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Last Donation Date</label>

<input
type="date"
name="last_donation_date"
class="form-control">

</div>

<div class="col-md-6 mb-3">

<label>Available Now?</label>

<select
name="available"
class="form-select">

<option value="Yes">Yes</option>
<option value="No">No</option>

</select>

</div>

</div>

<button
type="submit"
class="btn btn-danger w-100">

Register as Donor

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>