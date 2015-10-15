<html>
<head>

</head>
<body>
<div id = "createUser">
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("soc/homepage/create_user");?>

<p>
    <label for="first_name">First Name: </label> <br />
    <?php echo form_input($first_name);?>
</p>

<p>
    <label for="last_name">Last Name: </label> <br />
    <?php echo form_input($last_name);?>
</p>

<p>
    <label for="email">eMail: </label> <br />
    <?php echo form_input($email);?>
</p>

<p>
    <label for="phone">Phone: </label> <br />
    <?php echo form_input($phone);?>
</p>
<p>
    <label for="company">Phone Provider: </label> <br />
    <?php echo form_input($company);?>
</p>
<p>
    <label for="password">Password: </label> <br />
    <?php echo form_input($password);?>
</p>

<p>
    <label for="password_confirm">Confirm Password: </label> <br />
    <?php echo form_input($password_confirm);?>
</p>


<p><?php echo form_submit('submit', 'Register!');?></p>

<?php echo form_close();?>
</div>
</body>
</html>