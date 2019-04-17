<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$Home = "current";
$About = "not";
$Projects = "not";
$Contact = "not";
$img_chosen = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel = "stylesheet" href = "styles/site.css">
  <title >Home</title>
</head>

<body>

  <!-- TODO: This should be your main page for your site. -->
  <?php include("includes/nav_bar.php"); /*REMEMBER TO CHANGE FOR MOBILE*/?>
  <div class = container>
    <h1 class = "title"> Welcome </h1>
    <p class= "centered_text"> I make artwork, advertisements, and websites </p>
    <?php include("includes/slideshow.php"); ?>
  </div>
</body>
</html>
