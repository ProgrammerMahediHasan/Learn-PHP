<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Form</title>
</head>
<body>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<input type="text" name="username" placeholder="input username"><br><br>
<input type="text" name="password" placeholder="input password"><br><br>
<input type="text" name="email" placeholder="input email"><br><br>
<button type="submit" name="save">Submit</button>
</form>
    
<?php
if(isset($_POST['save'])){
  echo "This username is " . $_POST['username']."<br>";
  echo "This user password is " . $_POST['password']."<br>";
  echo "This user email is " . $_POST['email']."<br>";
}
?>

</body>
</html>