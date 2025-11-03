<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Order Confirmation | COMP1002 The HTML Pizza Company</title>
		<meta name="author" content="Charlie Sirois-Morin"/>
		<meta name="description" content="Add concise description here">
		<link rel="shortcut icon" href="images/pizzaicon.png" type="image/x-icon"/>
		<link rel="stylesheet" href="css/styles.css"/>
	</head>
	<body>
		<!-- Page-level header -->
		<header>
			<h1>The HTML Pizza Company</h1>
			<h2></h2>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h3>Thank you for ordering</h3>
                <?php
					// Captures the values from index.php inputs and sets the value to the email address as entered by the user in the form on index.php
					$emailAddress = $_POST['emailAddress'];
					$name = $_POST['name'];
					// Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
					echo('<p>Thank you for your order '.$name.'! A confirmation along with order details has been sent to your email address, '.$emailAddress.'. Enjoy!</p>');
				?>
			</section>
		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© HTML Pizza Company Inc.</small></p>
		</footer>
	</body>
</html>