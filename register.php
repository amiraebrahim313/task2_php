<?php
require 'session.php';
require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
  <form action="submit.php" method="post" >
  <input type="text" name="username" placeholder="username">
  <?php if (form_error('name')) { ?>
            <div class="error"><?php echo form_error('name'); ?></div>
        <?php } ?>
  <br>
  <input type="email" name="email" placeholder="email">
  <?php if (form_error('email')) { ?>
            <div class="error"><?php echo form_error('email'); ?></div>
        <?php } ?>
  <br>
  <input type="password" name="password" placeholder="password">
  <?php if (form_error('password')) { ?>
            <div class="error"><?php echo form_error('password'); ?></div>
        <?php } ?><br>
  <input type="confirm_password" name="confirm_password" placeholder="confirm_password">
  <?php if (form_error('confirm_password')) { ?>
            <div class="error"><?php echo form_error('confirm_password'); ?></div>
        <?php } ?><br>
  <button>Create Account</button>
</body>
</html>