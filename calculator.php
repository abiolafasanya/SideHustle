
<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container">
<div class="jumbotron text-center">
	<h1 class="text-info">PHP Calculator</h1>
	<a href="index.php" class="btn btn-primary m-auto">Back to Home</a>
</div>
<div class="row justify-content-center">
	<form>
		<p>Number 1</p>
		<input type="text" name="num1" class="form-control">
		<p>Number 2</p>
		<input type="text" name="num2" class="form-control">
		<br><br>
		<select name="sign">
			<option>--Operator--</option>
			<option value="add">Add</option>
			<option value="subtract">Subtract</option>
			<option value="multiply">Multiply</option>
			<option value="division">Division</option>
		</select>
		<br><br>
		<input type="submit" name="calculate" value="Calculate">
		<input type="reset" value="Clear">

	<?php
		if(isset($_GET['calculate'])){
		function compute(){
		$num1 = $_GET["num1"];
		$num2 = $_GET["num2"];
		
		switch($_GET["sign"]){

		case "add":
				$add = $num1 + $num2;
				return 'The Result is: '.$add; 
				break;
		case "subtract":
				$sub = $num1 - $num2;
				return 'The Result is: '.$sub;
				break;

		case "multiply":
				$mult = $num1 * $num2;
				return 'The Result is: '.$mult;
				break;

		case "division":
				$div = $num1 / $num2;
				return 'The Result is: '.$div;
				break;

		default:
				echo "<span style='color:red;'>Please select an Operator</span>";
		}
	}
	echo compute();
}
?>
	</form>

</div>

</div>
