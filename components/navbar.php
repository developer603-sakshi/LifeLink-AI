
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
<a class="nav-link <?php if($page=='home') echo 'active'; ?>"
href="index.php">
Home
</a>
</li>

<li class="nav-item">
<a class="nav-link <?php if($page=='find') echo 'active'; ?>"
href="find-blood.php">
Find Blood
</a>
</li>

<li class="nav-item">
<a class="nav-link <?php if($page=='donor') echo 'active'; ?>"
href="become-donor.php">
Become Donor
</a>
</li>

<li class="nav-item">
<a class="nav-link <?php if($page=='ai') echo 'active'; ?>"
href="ai-assistant.php">
AI Assistant
</a>
</li>

<li class="nav-item">
<a class="nav-link <?php if($page=='sos') echo 'active'; ?>"
href="emergency-sos.php">
SOS
</a>
</li>

<li class="nav-item">
<a class="nav-link <?php if($page=='dashboard') echo 'active'; ?>"
href="dashboard.php">
Dashboard
</a>
</li>

</ul>

<?php if(isset($_SESSION['user_id'])) { ?>

<div class="d-flex align-items-center">

<div class="position-relative me-3">

<i class="bi bi-bell-fill fs-4 text-danger"></i>

<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
3
</span>

</div>

<div class="dropdown">

<button
class="btn btn-outline-danger dropdown-toggle"
data-bs-toggle="dropdown">

👤 <?php echo $_SESSION['name']; ?>

</button>

<ul class="dropdown-menu">

<li>
<a class="dropdown-item"
href="dashboard.php">
Dashboard
</a>
</li>

<li>
<a class="dropdown-item"
href="logout.php">
Logout
</a>
</li>

</ul>

</div>

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