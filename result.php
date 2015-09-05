<?php
include 'includes/header.php';
include 'includes/functions.php';

//declare variables
setlocale(LC_MONETARY, 'en_US');
$name = $_POST["name"];
$email = $_POST["email"];
$bootcamp = $_POST["bootcamp"];
$startDate = $_POST["startDate"];
$d = new DateTime( $_POST["startDate"] );

if ($_POST["bootcamp"] == "Part-Time Front-End Bootcamp") {
	$tuition = 6000;
} elseif ($_POST["bootcamp"] == "Java Bootcamp" || $_POST["bootcamp"] == "Front-End (Javscript) Bootcamp") {
	$tuition = 7500;
} elseif ($_POST["bootcamp"] == ".NET/C# Bootcamp") {
	$tuition = 6500;
} else {
	$tuition = 8500;
}

$discount = $_POST["discount"];
$deposit = $_POST["deposit"];

if(isset($_POST['depositPaid'])) {
	    $open = $tuition - $discount - $deposit;

	} else {
	    $open = $tuition - $discount;
	}   

$apr = $_POST["apr"] / 100;
$periods = $_POST["periods"];
$gPeriods = $_POST["gPeriods"];
$gAmount = $_POST["gAmount"];
$principal = $tuition - $discount - $deposit;
$a = payment($apr,$periods,$principal);



if (isset($_POST["discount"])){
	
	$monthly = (($a * $periods) - ($gPeriods * $gAmount)) / ($periods - $gPeriods);
	$total = $a * $periods + $deposit;
} else {
	$monthly = payment($apr,$periods,$principal);
	$total = $open * $periods + $deposit;
}

if (isset($_POST["gPeriods"])){
	//$a = payment($apr,$periods,$principal);
	$monthly = (($a * $periods) - ($gPeriods * $gAmount)) / ($periods - $gPeriods);
	$total = $a * $periods + $deposit;
} else {
	$monthly = payment($apr,$periods,$principal);
	$total = $monthly * $periods + $deposit;
}

if ($discount != 0 && $apr == 0) {
	$total = $tuition - $discount;
} elseif ($discount == 0 && $apr == 0) {
	$total = $tuition;
} else {
	$total = $a * $periods + $deposit;
}
	
?>
<div class="container">
	<h1>Deferred Payment Plan <?php if($name) { echo "for " . $name;} else {} ?></h1>
	<h3><?php echo $bootcamp . " " . $d->format( 'm/d/Y' ); ?></h3>
	<h3><?php // echo $email; ?></h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Amount</th>
						<th>Description</th>
						<th>Notes</th>
					</tr>
				</thead>
				<tbody>
					<tr id="tuition">
						<td><?php echo money_format("%(#10.2n",$tuition); ?></td>
						<td>Regular Course Tuition</td>
						<td></td>
					</tr>
					<? if ($discount != 0): ?>
					<tr>
						<td>(<?php echo money_format("%(#10.2n",$discount); ?>)</td>
						<td>Discount / Scholarship</td>
						<td></td>
					</tr>
					<? endif; ?>
					<? if ($discount != 0): ?>
					<tr>
						<td><?php echo money_format("%(#10.2n",$open); ?></td>
						<td>Custom Tuition  <?php echo $name; ?></td>
						<td></td>
					</tr>
					<? endif; ?>
					<tr>
						<td>
							<?php 
								if(isset($_POST['depositPaid'])) {
									    echo money_format("%(#10.2n",-$deposit);
									} else {
									    echo money_format("%(#10.2n",$deposit);
									}
							?>
						</td>
						<td>Deposit</td>
						<td>
							<?php 
								if(isset($_POST['depositPaid'])) {
								    echo "Paid";
								} else {
								    echo "Due Immediately";
								}    
							?>
						</td>
					</tr>		
					<!-- <tr>
						<td><?php echo money_format("%(#10.2n",$principal); ?></td>
						<td>Loan Amount</td>
						<td></td>
					</tr> -->
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
					<? if ($gPeriods != 0): ?>
					<tr>
						<td><?php echo $gPeriods; ?></td>
						<td>Grace Periods</td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo money_format("%(#10.2n",$gAmount); ?></td>
						<td>Grace Payment</td>
						<td></td>
					</tr>
					<? endif; ?>
					<tr>
						<td><?php echo money_format("%(#10.2n",$total); ?></td>
						<td>Total Tuition</td>
						<td>Tuition + Interest</td>
					</tr>
				</tbody>
			</table>

			<br>
			<h2>Payment Schedule</h2>
			<table class="table">
				<thead>
					<tr>
						<th>Amount</th>
						<th>Description</th>
						<th>Due Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(!isset($_POST['depositPaid'])) {
								echo "<tr><td>" . money_format("%(#10.2n",$deposit) . "</td>";
								echo "<td>Deposit</td>";
								echo "<td>Due Immediately</td></tr>";
							}  				
						
						if ($gPeriods != 0) {
							
							for ($i=0; $i < $gPeriods; $i++) { 
								$d->modify( 'next month' );
								echo "<tr><td>" . money_format("%(#10.2n",$gAmount) . "</td>";
								echo "<td>Grace Payment</td>";
								echo "<td>" . $d->format( 'm/d/Y' ) . "</td></tr>";
							}
							
							for ($i=0; $i < ($periods - $gPeriods); $i++) { 
								$d->modify( 'next month' );
								echo "<tr><td>" . money_format("%(#10.2n",$monthly) . "</td>";
								echo "<td>Monthly Payment</td>";
								echo "<td>" . $d->format( 'm/d/Y' ) . "</td></tr>";
							}

						} else {

							for ($i=0; $i < $periods; $i++) { 
								$d->modify( 'next month' );
								echo "<tr><td>" . money_format("%(#10.2n",$monthly) . "</td>";
								echo "<td>Monthly Payment</td>";
								echo "<td>" . $d->format( 'm/d/Y' ) . "</td></tr>";
							}
						}

					?>
				</tbody>
			</table>
	</div>	<!--table responsive -->
<div> <!--container -->
</body>
</html>


