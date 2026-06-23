<?php

include 'db.php';

$title=$_POST['title'];
$description=$_POST['description'];
$venue=$_POST['venue'];
$event_date=$_POST['event_date'];

$sql="INSERT INTO announcements(
title,
description,
venue,
event_date
)
VALUES(
'$title',
'$description',
'$venue',
'$event_date'
)";

mysqli_query($conn,$sql);

header("Location: ../admin-news.php");

?>