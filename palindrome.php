<!DOCTYPE html>
<html>
<head>
<title>Palindrome Program</title>
</head>
<body>
        <h2>To check the string is Palindorme or NOt </h2>
        <form method="post" action="palindrome.php">
        <input type="text" name="str" value="" placeholder="Enter the String" />
        <input type="submit" name="submit" value="Submit" />
        </form>
<?php
if(isset($_POST['str'])) 
{
     $a = $_POST['str'];
     $reverse = strrev($a);
      
if($reverse == $a)
 {
      echo $a.'  is a palindrome';
    }
else
{
       echo $a.'  is not a palindrome';
}
}
?>
</body>
</html>