<?php include 'php/db.php'; ?>

<form action="php/save-news.php" method="POST">

<input
type="text"
name="title"
class="form-control mb-3"
placeholder="News Title"
required>

<textarea
name="description"
class="form-control mb-3"
rows="4"
placeholder="Description"
required></textarea>

<input
type="text"
name="venue"
class="form-control mb-3"
placeholder="Venue"
required>

<input
type="date"
name="event_date"
class="form-control mb-3"
required>

<button class="btn btn-danger">
Publish News
</button>

</form>