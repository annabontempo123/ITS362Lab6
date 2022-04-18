<!DOCTYPE html>
<head>
<link rel="stylesheet" href="calculator.css">
<title>CALCULATOR</title>
</head>
<?php
    $FirstNumber = $_POST['FirstNumber'];
    $SecondNumber = $_POST['SecondNumber'];
    $operator = $_POST['operator'];
    $CalculatorResult = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
    switch ($operator) {
        case "Sum":
        $CalculatorResult = $FirstNumber + $SecondNumber;
        break;
        case "Subtraction":
        $CalculatorResult = $FirstNumber - $SecondNumber;
        break;
        case "Multiplication":
        $CalculatorResult = $FirstNumber * $SecondNumber;
        break;
        case "Division":
        $CalculatorResult = $FirstNumber / $SecondNumber;
		case "Power":
        $Result = Math.pow($FirstNumber, $SecondNumber);
        $CalculatorResult = substr($Result, 4);
    }
}
?>

<body>
<div id="page-wrap">
<h1>Enter numbers to calculate!</h1>
<form action="" method="post" id="quiz-form">
<p>
<b>First Number: </b>
<input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" />
</p>
<p>
<b>Second Number: </b>
<input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" />
</p>
<p>
<b>Calculator Result:</b>
</p><input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> 
<input type="submit" class = "button" name="operator" value="Sum" />
<input type="submit" class = "button" name="operator" value="Subtraction" />
<input type="submit" class = "button" name="operator" value="Multiplication" />
<input type="submit" class = "button" name="operator" value="Division" />
<input type="submit" class = "button" name="operator" value="Power" />
</form>
</div>
</body>