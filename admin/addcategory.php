<?php include_once("inc/header.php"); ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <fieldset>
    <label for="name">Title</label>
    <input type="text" placeholder="Enate category name" id="name" name="name">
    <input class="button-primary" type="submit" value="Submit">
  </fieldset>
</form>
<?php include_once("inc/footer.php"); ?>