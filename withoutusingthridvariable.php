<!DOCTYPE html>
<html>
<head>
    <title>Swap Values</title>
</head>
<body>
      <h2>Swap Values Program</h2>
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $a = $_POST["value1"];
        $b = $_POST["value2"];
        echo "<p>Original Values: Value1 = $a, Value2 = $b</p>";

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
     echo "<p>Swapped Values: Value1 = $a, Value2 = $b</p>";
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="value1" " placeholder="Enter the Frist Number" />
        <br>
        <input type="text" name="value2" " placeholder="Enter the Second Number" />
        <br>
        <input type="submit" value="Swap">
    </form>
</body>
</html>
