<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow">

<div class="card-body p-4">

<h2 class="text-center text-danger mb-4">
Create Account
</h2>

<form action="php/register-user.php"
method="POST">

<input
type="text"
name="name"
class="form-control mb-3"
placeholder="Full Name"
required>

<input
type="email"
name="email"
class="form-control mb-3"
placeholder="Email"
required>

<input
type="password"
name="password"
class="form-control mb-3"
placeholder="Password"
required>

<select
name="role"
class="form-control mb-3">

<option value="donor">
Donor
</option>

<option value="patient">
Patient
</option>

<option value="organizer">
Organizer
</option>

</select>

<button
class="btn btn-danger w-100">

Register

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>