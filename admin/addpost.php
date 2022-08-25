<?php include_once("inc/header.php"); ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
  <fieldset>
    <label for="name">Title</label>
    <input type="text" placeholder="Enate your title" id="name">
    <label for="body">Body</label>
    <textarea id="body" placeholder="Enter your post body"></textarea>
    <label for="username">Username</label>
    <input type="text" placeholder="Enter your username" id="username">
    <input class="button-primary" type="submit" value="Post">
  </fieldset>
</form>
<?php include_once("inc/footer.php"); ?>