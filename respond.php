<?php require("id.php"); ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Mission: Groomsman</title>
	<link href="demos.css" rel="stylesheet" />
</head>

<body>
	<div class="wrap">
		<div class="type-wrap">

			<?php
			
			$message = 'error';

			switch ($_GET["resp"]) {
				case "y":
					$message = $agentName . " Responded ACCEPT";
					echo "Thank you for accepting this mission. This message has self-destructed. Please contact Paul for more information.";
					break;
				case "n":
					$message = $agentName . " Responded DECLINE";
					echo "Declining valuable opportunities like this can place your status as an Agent in jeapordy, you know. How can you expect to be promoted to Mission Director someday with a work ethic like this? Please meet with the HR department at your earliest convenience to recieve your slap on the wrist. This message has self-destructed.";
					break;
				case "t":
					$message = $agentName . " Let the message DESTRUCT";
					echo "You have failed to respond in time. This message has self-destructed.";
					break;
			}

			$to      = 'email@example.com';
			$subject = 'Mission response';
			$headers = 'From: email@example.com' . "\r\n" .
				'Reply-To: email@example.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			
			?>

		</div>
<a href="index.php">Oops, I meant to click something else, let me start over.</a>
	</div>
</body>

</html>
