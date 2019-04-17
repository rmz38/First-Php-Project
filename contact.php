<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$Home = "not";
$About = "not";
$Projects = "not";
$Contact = "current";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel = "stylesheet" href = "styles/site.css">
  <title >Contact</title>
</head>

<body>

  <?php include("includes/nav_bar.php");?>
  <h1 class = "title"> Contact Me </h1>
  <?php
  if (isset($_POST['submit'])) {
  $valid_form = TRUE;

  $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
  if(trim($message) == ''){
    $form_validity = 'invalid';
    $valid_form = FALSE;
    $valid_message = 'invalid_field';
  }else{
    $form_validity = 'valid';
    $valid_message = 'valid_field';
  }
  $sender = filter_input(INPUT_POST, 'sender', FILTER_SANITIZE_STRING);
  if(trim($sender) == ''){
    $form_validity = 'invalid';
    $valid_form = FALSE;
    $valid_sender = 'invalid_field';
  }else{
    $form_validity = 'valid';
    $valid_sender = 'valid_field';
  }
  $reason = filter_input(INPUT_POST,'reason', FILTER_SANITIZE_STRING);
  if(trim($reason) == ''){
    $form_validity = 'invalid';
    $valid_form = FALSE;
    $valid_reason = 'invalid_field';
  }else{
    $form_validity = 'valid';
    $valid_reason = 'valid_field';
  }
  $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
  if(trim($subject) == ''){
    $form_validity = 'invalid';
    $valid_form = FALSE;
    $valid_subject = 'invalid_field';
  }else{
    $form_validity = 'valid';
    $valid_subject = 'valid_field';
  }
}
else { //form has not been submitted
  $message = '';
  $sender = '';
  $reason = '';
  $subject = '';
  $valid_message = 'valid_field';
  $valid_sender = 'valid_field';
  $valid_reason = 'valid_field';
  $valid_subject = 'valid_field';
} ?>
<?php if(isset($valid_form) && $valid_form){?>
  <p> Your Message Has Been Sent! </p>
<?php }else{ ?>
<p>If you want to send me a message, type it here!</p>
<?php } ?>
<p class = '<?php echo $valid_message ?>'> You need to write a message! </p>
  <p class = '<?php echo $valid_sender ?>'> You left the sender empty! </p>
  <p class = '<?php echo $valid_reason ?>'> You left the reason empty! </p>
  <p class = '<?php echo $valid_subject ?>'> You left the subject empty!! </p>
<div class = "container">
<?php if(isset($valid_form) && $valid_form) {?>
  <div id ="aligner">
    <p id = "message">Message:<?php echo $message ?></p>
    <p>Sender:<?php echo $sender ?></p>
    <p>Reason:<?php echo $reason ?></p>
    <p>Subject:<?php echo $subject?></p>
  </div>

<?php }else{?>
  <label for ="message_box">Message:</label>
  <div id = "contact_form">
    <form id = "contact" class = "container" method = "post" action = "contact.php">
    <fieldset>
      <div class = "pad_box">
        <textarea form = "contact" id = "message_box" name="message"><?php echo htmlspecialchars($message);?>
        </textarea>
      </div>
      <div class = "pad_box">
        <label for="sender_box">Sender:</label>
        <input id = "sender_box" type="text" name="sender" value='<?php echo htmlspecialchars($sender);?>'>
      </div>
      <div class = "pad_box">
        <label for="reason_box">Reason:</label>
        <input id = "reason_box" type="text" name="reason" value='<?php echo htmlspecialchars($reason);?>'>
      </div>
      <div class = "pad_box">
        <label for="subject_box">Subject:</label>
        <input id = "subject_box" type="text" name="subject" value='<?php echo htmlspecialchars($subject);?>'>
      </div>
      <input id = "submit" type="submit" name = "submit" value="Send">
    </fieldset>
</form>
  </div>
</div>
<?php } ?>
<div id = "img">
  <?php include('includes/slideshow.php');?>
</div>
</body>
</html>
