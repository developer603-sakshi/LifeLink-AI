<?php

session_start();

if(!isset($_SESSION['user_id']))
{
header("Location: login.php");
exit();
}

?>
<?php
include 'php/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard | LifeLink AI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/footer.css">
<link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body>

<?php include 'components/navbar.php'; ?>

<section class="dashboard-section">

<div class="container">

<h1 class="text-center fw-bold text-danger mb-5">
📊 LifeLink AI Dashboard
</h1>

<div class="row g-4">

<?php

$totalDonors =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM donors"
)
);

$availableDonors =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM donors WHERE available='Yes'"
)
);

$totalEmergency =
mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM emergency_requests"
)
);

?>

<div class="col-md-4">

<div class="card dashboard-card shadow border-0">

<div class="card-body text-center">

<h2 class="text-danger">
<?php echo $totalDonors; ?>
</h2>

<h5>Total Donors</h5>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card dashboard-card shadow border-0">

<div class="card-body text-center">

<h2 class="text-success">
<?php echo $availableDonors; ?>
</h2>

<h5>Available Donors</h5>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card dashboard-card shadow border-0">

<div class="card-body text-center">

<h2 class="text-primary">
<?php echo $totalEmergency; ?>
</h2>

<h5>Emergency Requests</h5>

</div>

</div>

</div>

</div>
<div class="table-responsive mt-5">

<table class="table table-bordered">

<tr>
<th>Name</th>
<th>Blood Group</th>
<th>City</th>
<th>Status</th>
</tr>

<?php

$result =
mysqli_query(
$conn,
"SELECT * FROM donors ORDER BY id DESC LIMIT 5"
);

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['full_name']; ?></td>

<td><?php echo $row['blood_group']; ?></td>

<td><?php echo $row['city']; ?></td>

<td><?php echo $row['available']; ?></td>

</tr>

<?php
}
?>

</table>

</div>
<h2 class="mt-5 mb-4">
📢 Latest Announcements
</h2>

<div class="row">

<?php

$result=mysqli_query(
$conn,
"SELECT * FROM announcements ORDER BY id DESC LIMIT 6"
);

while($row=mysqli_fetch_assoc($result))
{
?>

<div class="col-md-4 mb-4">

<div class="card shadow border-0 h-100">

<div class="card-body">

<h5 class="text-danger">
<?php echo $row['title']; ?>
</h5>

<p>
<?php echo $row['description']; ?>
</p>

<p>
📍 <?php echo $row['venue']; ?>
</p>

<p>
📅 <?php echo $row['event_date']; ?>
</p>

</div>

</div>

</div>

<?php
}
?>

</div>
</div>

</section>


<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>