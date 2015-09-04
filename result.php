<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	include 'includes/functions.php';

	//declare variables
	$name = $_POST["name"];
	$email = $_POST["email"];
	$bootcamp = $_POST["bootcamp"];
	$tuition = $_POST["tuition"];
	$discount = $_POST["discount"];
	$open = $tuition - $discount;
	$deposit = $_POST["deposit"];
	$apr = $_POST["apr"] / 100;
	$periods = $_POST["periods"];
	$gPeriods = $_POST["gPeriods"];
	$gAmount = $_POST["gAmount"];
	$principal = $tuition - $discount - $deposit;
	if (isset($gPeriods)){
		$a = payment($apr,$periods,$principal);
		$monthly = (($a * $periods) - ($gPeriods * $gAmount)) / ($periods - $gPeriods);
		$total = $a * $periods + $deposit;
	} else {
		$monthly = payment($apr,$periods,$principal);
		$total = $monthly * $periods + $deposit;
	}
	
	
?>

<h1>Deferred Payment Plan for <?php echo $name; ?></h1>
<h2><?php echo $bootcamp; ?></h2>
<h2><?php echo $email; ?></h2>

<table>
	<tr>
		<thead>Amount</thead>
		<thead>Description</thead>
		<thead>Notes</thead>
	</tr>
	<tr id="tuition">
		<td><?php echo $tuition; ?></td>
		<td>Course Tuition</td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo $discount; ?></td>
		<td>Discount / Scholarship</td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo $open; ?></td>
		<td>Open Balance</td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo $deposit; ?></td>
		<td>Deposit</td>
		<td>Due Immediately</td>
	</tr>
	<tr>
		<td><?php echo $principal; ?></td>
		<td>Loan Amount</td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo ($apr * 100). "%"; ?></td>
		<td>Interest Rate</td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo $periods; ?></td>
		<td>Payment Periods</td>
		<td></td>
	</tr>
	<? if ($gPeriods): ?>
	<tr>
		<td><?php echo $gPeriods; ?></td>
		<td>Grace Periods</td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo $gAmount; ?></td>
		<td>Grace Payment</td>
		<td></td>
	</tr>
	<? endif; ?>
	<tr>
		<td><?php echo $total; ?></td>
		<td>Total Tuition</td>
		<td>Tuition + Interest</td>
	</tr>
</table>

<br>

<table>
	<tr>
		<th>Payment Amount</th>
		<th>Description</th>
		<th>Due Date</th>
	</tr>	
<?php
	if (isset($gPeriods)) {
		
		for ($i=0; $i < $gPeriods; $i++) { 
			echo "<tr><td>" . $gAmount . "</td>";
			echo "<td>Grace Payment</td>";
			echo "<td>Due Date</td></tr>";
		}
		
		for ($i=0; $i < ($periods - $gPeriods); $i++) { 
			echo "<tr><td>" . $monthly . "</td>";
			echo "<td>Monthly Payment</td>";
			echo "<td>Due Date</td></tr>";
		}

	} else {

		for ($i=0; $i < $periods; $i++) { 
			echo "<tr><td>" . $monthly . "</td>";
			echo "<td>Monthly Payment</td>";
			echo "<td>Due Date</td></tr>";
		}
	}

?>
</table>
</body>
</html>


