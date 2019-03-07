<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Missions HQ</title>
    <link href="demos.css" rel="stylesheet" />
</head>

<body>
    <div class="wrap">
<?php if($_GET["inc"]=='y'){ ?>
        <div class="type-wrap">
	You have entered an invalid ID! Are you sure you are approved for this mission?
	</div>
<?php } ?>
        <div class="type-wrap">
          Please enter your secret ID number:
            
 		<form action="/secure.php" method="get">
			<input type="text" name="id">
			<input type="submit" value=" Enter ">
		</form>
            
        </div>
    </div>
</body>

</html>
