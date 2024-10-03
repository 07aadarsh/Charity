<!DOCTYPE html>
<html>
<head>
	<title>Donation Page</title>
	<link rel="stylesheet" type="text/css" href="donation.css">
</head>
<body>
	<div class="donation-container">
		<h1>Donate to Our Cause</h1>
		<p>Help us make a difference in the lives of those in need. Your donation will go towards supporting our mission to [briefly describe your mission].</p>
		<div class="donation-details">
			<h2>Donation Details</h2>
			<ul>
				<li>Donation Amount: ₹ <input type="text" name="donation_amount" id="donation_amount"></li>
				<li>Donor Name: <input type="text" name="donor_name" id="donor_name"></li>
				<li>Donor Email: <input type="email" name="donor_email" id="donor_email"></li>
			</ul>
		</div>
		<div class="upi-payment">
			<h2>UPI Payment</h2>
			<p>Scan the QR code below to make a donation using UPI:</p>
			<img src="qr code.jpeg" alt="UPI QR Code">
			<p>UPI ID: [ayansharma232@okhdfcbank]</p>
			<p>UPI Handle: [insert UPI handle]</p>
		</div>
		<button id="donate-btn">Donate Now</button>
		<form id="donation-form" action="process_donation.php" method="post">
			<input type="hidden" name="donation_amount" id="donation_amount_hidden">
			<input type="hidden" name="donor_name" id="donor_name_hidden">
			<input type="hidden" name="donor_email" id="donor_email_hidden">
		</form>
	</div>

	<script>
		document.getElementById("donate-btn").addEventListener("click", function() {
			document.getElementById("donation_amount_hidden").value = document.getElementById("donation_amount").value;
			document.getElementById("donor_name_hidden").value = document.getElementById("donor_name").value;
			document.getElementById("donor_email_hidden").value = document.getElementById("donor_email").value;
			document.getElementById("donation-form").submit();
		});
	</script>
</body>
</html>