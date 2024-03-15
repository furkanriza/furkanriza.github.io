<!DOCTYPE html>
<html lang="en">

<head>
	<title>Java Jam Coffee House</title>
	<meta name="description" content="CENG 311 Inclass Activity 1" />
</head>

<body>

<?php
$exchangeRates = [
    'USD_CAD' => 1.35,
    'USD_EUR' => 0.92,
    'EUR_CAD' => 1.47,
    'CAD_USD' => 1 / 1.35,
    'EUR_USD' => 1 / 0.92,
    'CAD_EUR' => 1 / 1.47,
];

$value = $_POST['value'] ? $_POST['value'] : 0;
$convertedValue = 0;
$fromCurrency = $_POST['fromCurrency'] ? $_POST['fromCurrency'] : '';
$toCurrency = $_POST['toCurrency'] ? $_POST['toCurrency'] : '';

$conversionRate = $fromCurrency . "_" . $toCurrency;
$convertedValue = $value * $exchangeRates[$conversionRate];
?>

	<form action="DenisGercekFurkanRizaParlak-activity4.php" method="POST">
		<table>
			<tr>
				<td>From:</td>
				<td><input type="text" name="value" value="<?php echo $value; ?>" /></td>
				<td>Currency:</td>
				<td>
					<select name="fromCurrency">
						<option value="USD" <?php echo $fromCurrency == 'USD' ? 'selected' : ''; ?>>USD</option>
						<option value="CAD" <?php echo $fromCurrency == 'CAD' ? 'selected' : ''; ?>>CAD</option>
						<option value="EUR" <?php echo $fromCurrency == 'EUR' ? 'selected' : ''; ?>>EUR</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>To:</td>
				<td>
					<?php if ($convertedValue !== '') : ?>
						<?php echo htmlspecialchars($convertedValue); ?>
					<?php endif; ?>
				</td>
				<td>Currency:</td>
				<td>
					<select name="toCurrency">
						<option value="USD" <?php echo $toCurrency == 'USD' ? 'selected' : ''; ?>>USD</option>
						<option value="CAD" <?php echo $toCurrency == 'CAD' ? 'selected' : ''; ?>>CAD</option>
						<option value="EUR" <?php echo $toCurrency == 'EUR' ? 'selected' : ''; ?>>EUR</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td><input type="submit" value="Convert" /></td>
			</tr>
		</table>
	</form>
</body>

</html>
