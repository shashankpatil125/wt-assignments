<?php
if(isset($_POST['units'])) {
$units = $_POST['units'];
$total = 0;
if($units <= 50) {
$total = $units * 3.50;
} elseif($units <= 150) {
$total = 50 * 3.50 + ($units - 50) * 4.00;
} elseif($units <= 250) {
$total = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
} else {
$total = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) *
6.50;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill Calculator</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Electricity Bill Calculator</h2>
<form method="post" action="bill.php">
<div class="form-group">
<label for="units">Enter Units Consumed:</label>
<input type="number" class="form-control" id="units"
name="units" required>
</div>
<button type="submit" class="btn btn-primary">Calculate
Bill</button>
</form>
<br>
<?php if(isset($total)) { ?>
<div class="alert alert-success">
<strong>Total Bill:</strong> Rs. <?php echo $total; ?>
</div>
<?php } ?>
</div>
</body>
</html>