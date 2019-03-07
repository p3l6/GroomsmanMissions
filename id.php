<?php

$id = $_GET["id"];
$isBest = false;
switch ($id) {
	case 'TESTBEST':
		$agentName = 'TestBest';
		$isBest = true;
		break;
	case 'TEST':
		$agentName = 'Test';
		break;
	case '63F-5':
		$agentName = 'Redacted (Best Man)';
		$isBest = true;
		break;
	case '95H-2':
		$agentName = 'Redacted 2';
		break;
	case '21X-4':
		$agentName = 'Redacted 3';
		break;
	case '37Q-8':
		$agentName = 'Redacted 4';
		break;
	default:
		header("Location: http://url-goes-here/index.php?inc=y");
		die();
}
?>
