<?php $page = "dashboard"; ?>
<?php
session_start();

if(!isset($_SESSION['user_id'])){
header("Location: login.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/dashboard.css?v=2">

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>

<?php include 'components/navbar.php'; ?>

<div class="container py-5">

<div class="dashboard-hero">

<h1>
Welcome Back,
<?php echo $_SESSION['name']; ?> 👋
</h1>

<p class="lead">
AI Powered Blood Donation Platform
</p>

</div>

<div class="row g-4 mb-5">

<div class="col-md-3">

<div class="card stat-card shadow">

<div class="card-body text-center">

<div class="stat-icon">
🩸
</div>

<h2>1250</h2>

<p>Total Donors</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card stat-card shadow">

<div class="card-body text-center">

<div class="stat-icon">
🚨
</div>

<h2>42</h2>

<p>Active Requests</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card stat-card shadow">

<div class="card-body text-center">

<div class="stat-icon">
📢
</div>

<h2>8</h2>

<p>Upcoming Camps</p>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card stat-card shadow">

<div class="card-body text-center">

<div class="stat-icon">
❤️
</div>

<h2>560</h2>

<p>Lives Saved</p>

</div>

</div>

</div>

</div>

<h3 class="mb-4">
Latest Announcements
</h3>

<div class="row g-4">

<div class="col-md-6">

<div class="card news-card shadow">

<div class="card-body">

<h5>
Blood Donation Camp
</h5>

<p>
📍 Pune
</p>

<p>
📅 30 June 2026
</p>

</div>

</div>

</div>

<div class="col-md-6">

<div class="card news-card shadow">

<div class="card-body">

<h5>
Emergency Blood Drive
</h5>

<p>
📍 Ahilyanagar
</p>

<p>
📅 5 July 2026
</p>

</div>

</div>

</div>

</div>

</div>
<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>