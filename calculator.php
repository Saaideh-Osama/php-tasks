<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP - Tutorials Class</title>
</head>

<?php
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($N1) && is_numeric($N2)) {
    switch ($operator) {
        case "Add":
           $result = $N1 + $N2;
            break;
        case "Subtract":
           $result = $N1 - $N2;
            break;
        case "Multiply":
            $result = $N1 * $N2;
            break;
        case "Divide":
            $result = $N1 / $N2;
    }
}

?>

<body>
    <div id="page-wrap">
	<h1>Calculator</h1>
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="N1" id="N1" required="required" value="<?php echo $N1; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="N2" id="N2" required="required" value="<?php echo $N2; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>