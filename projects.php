<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$Home = "not";
$About = "not";
$Projects = "current";
$Contact = "not";
$img_chosen = 6;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel = "stylesheet" href = "styles/site.css">
  <title >Projects</title>
</head>

<body>

  <!-- TODO: This should be your main page for your site. -->
  <?php include("includes/nav_bar.php"); /*REMEMBER TO CHANGE FOR MOBILE*/?>
  <h1 class = "title">Look at a Project! </h1>
  <p class= "centered_text"> Here's a random project! Every time you refresh the page, you see a random project.</p>
  <?php
  $img_chosen = 6;
  include("includes/slideshow.php");
  ?>

</body>
</html>
