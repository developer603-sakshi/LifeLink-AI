<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Emergency SOS | LifeLink AI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="assets/css/sos.css">

</head>

<body>

<?php include 'components/navbar.php'; ?>

<section class="sos-section">

<div class="container">

<div class="text-center mb-5">

<h1 class="text-danger fw-bold">
🚨 Emergency Blood Request
</h1>

<p class="text-muted">
Submit urgent blood requirements instantly
</p>

</div>

<div class="row justify-content-center">

<div class="col-lg-8">

<div class="card shadow border-0 sos-card">

<div class="card-body p-5">

<form action="php/save-emergency.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<label>Patient Name</label>

<input
type="text"
name="patient_name"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label>Blood Group</label>

<select
name="blood_group"
class="form-select"
required>

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

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Units Required</label>

<input
type="number"
name="units_required"
class="form-control"
required>

</div>

<div class="col-md-6 mb-3">

<label>Contact Number</label>

<input
type="text"
name="contact_number"
class="form-control"
required>

</div>

</div>

<div class="mb-3">

<label>Hospital Name</label>

<input
type="text"
name="hospital_name"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Hospital Address</label>

<textarea
name="hospital_address"
class="form-control"
rows="3"></textarea>

</div>

<div class="row">

<div class="col-md-6 mb-3">

<label>Emergency Level</label>

<select
name="emergency_level"
class="form-select">

<option>Critical</option>
<option>High</option>
<option>Medium</option>

</select>

</div>

<div class="col-md-6 mb-3">

<label>Need Within</label>

<select
name="required_within"
class="form-select">

<option>1 Hour</option>
<option>2 Hours</option>
<option>6 Hours</option>
<option>12 Hours</option>

</select>

</div>

</div>

<button
class="btn btn-danger w-100">

🚨 Send Emergency Alert

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