<?php $page = "home"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>LifeLink AI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/home.css">
<link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>

<?php include 'components/navbar.php'; ?>

<section class="hero-section">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<span class="badge bg-danger mb-3">
🩸 AI Powered Blood Donation Network
</span>

<h1 class="display-3 fw-bold mt-3">

Connecting Donors,<br>

<span class="text-danger">
Saving Lives
</span>

</h1>

<p class="lead text-secondary mt-4">

Find blood donors instantly using AI-powered matching.
Every second matters during emergencies.

</p>

<div class="mt-4 d-flex flex-column flex-sm-row gap-3">

<a href="find-blood.php"
class="btn btn-danger btn-lg hero-btn">

Find Blood

</a>

<a href="become-donor.php"
class="btn btn-outline-danger btn-lg hero-btn">

Become Donor

</a>

</div>

</div>

<div class="col-lg-6 text-center">

<img
src="https://cdn-icons-png.flaticon.com/512/2966/2966486.png"
class="img-fluid hero-image"
alt="Blood Donation">

</div>

</div>

</div>

</section>

<section class="py-5 bg-light">

<div class="container">

<div class="row g-4">

<div class="col-md-3">

<div class="card stat-card border-0 shadow">

<div class="card-body text-center">

<h2 class="text-danger fw-bold">10K+</h2>

<p>Registered Donors</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card stat-card border-0 shadow">

<div class="card-body text-center">

<h2 class="text-danger fw-bold">500+</h2>

<p>Cities Covered</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card stat-card border-0 shadow">

<div class="card-body text-center">

<h2 class="text-danger fw-bold">5K+</h2>

<p>Blood Requests</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card stat-card border-0 shadow">

<div class="card-body text-center">

<h2 class="text-danger fw-bold">2K+</h2>

<p>Lives Saved</p>

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