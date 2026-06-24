<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>
<nav class="navbar navbar-expand-lg sticky-top">

<div class="container">

<a class="navbar-brand d-flex align-items-center"
href="index.php">

<span style="font-size:35px;">
🩸
</span>

<span class="logo-text ms-2">
LifeLink AI
</span>

</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="navbarNav">

<ul class="navbar-nav mx-auto">

<li class="nav-item">
<a class="nav-link active"
href="index.php">
Home
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="find-blood.php">
Find Blood
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="become-donor.php">
Become Donor
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="ai-assistant.php">
AI Assistant
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="emergency-sos.php">
SOS
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="dashboard.php">
Dashboard
</a>
</li>

</ul>

<?php if(isset($_SESSION['user_id'])) { ?>

<div class="d-flex align-items-center">

<a href="dashboard.php"
class="nav-link fw-bold">

👤 <?php echo $_SESSION['name']; ?>

</a>

<a href="logout.php"
class="btn btn-danger ms-3">

Logout

</a>

</div>

<?php } else { ?>

<div class="d-flex">

<a href="login.php"
class="btn btn-outline-danger me-2">

Login

</a>

<a href="register.php"
class="btn btn-danger">

Register

</a>

</div>

<?php } ?>

</div>

</div>

</nav>