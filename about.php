<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$Home = "not";
$About = "current";
$Projects = "not";
$Contact = "not";
$img_chosen = 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel = "stylesheet" href = "styles/site.css">
  <title >About</title>
</head>

<body>

  <!-- TODO: This should be your main page for your site. -->
  <?php include("includes/nav_bar.php");?>
  <h1 class = "title"> About Me </h1>
  <div id = 'positioner'>
    <p class= "centered_text"> Hello, I'm an undergraduate student majoring in Computer Science at Cornell University's College of Engineering. I love to draw in my free time! If you or your business would like a commission, or you have a question, feel free to contact me.</p>
  </div>
  <?php include("includes/slideshow.php"); ?>

</body>
</html>
