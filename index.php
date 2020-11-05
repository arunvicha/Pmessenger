<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $gender = $Message = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Message = test_input($_POST["Message"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Pearsonel Messenger</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Message: <textarea name="Message" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="SEND">  
</form>

<?php
echo "<h2>Hey Hi User.....View your message here</h2>";
echo "<br>";
echo $Message;
echo "<br>";
?>

</body>
</html>