<?php include_once("inc/header.php"); ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <fieldset>
    <label for="name">Name</label>
    <input type="text" placeholder="Enate your name" id="name">
    <label for="username">Username</label>
    <input type="text" placeholder="Enter your username" id="username">
    <label for="email">Email</label>
    <input type="email" placeholder="Enter your email" id="email">
    <label for="role">Role</label>
    <select id="role" name="role">
        <option value="0">Admin</option>
        <option value="1">Modarator</option>
    </select>
    <input class="button-primary" type="submit" value="Submit">
  </fieldset>
</form>
<?php include_once("inc/footer.php"); ?>