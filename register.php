<?php
	require 'form.php';
	?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Quiz Registration</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Registration Form</h1>
	<div id="container">
		<form method="POST" enctype="multipart/form-data" action='<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>' >
			<legend class="dets">Please enter your details below</legend>
			<div><input type="text" name="name" placeholder="Name" required value="<?php if(!empty($name)) echo $name?>"></div>
			<div><input type="number" name="regno" placeholder="Registration Number" min="160000000" max="190000000" required title="Required" value="<?php if(!empty($regno)) echo $regno?>"></div>
			<div><input type="text" name="branch" placeholder="Branch" required value="<?php if(!empty($branch)) echo $branch?>"></div>
			<div >
				<div id="select">
				<select>
					<option value=NULL disabled selected>Semester</option>
					<option value=1>1</option>
					<option value=2>2</option>
					<option value=3>3</option>
					<option value=4>4</option>
					<option value=5>5</option>
					<option value=6>6</option>
					<option value=7>7</option>
					<option value=8>8</option>
				</select>
				</div>
			</div>
			
			<div><input type="email" name="email" placeholder="Email" required value="<?php if(!empty($email)) echo $email?>"></div>
			<div><input type="number" name="phone" placeholder="Mobile-No" min="1000000000" max="9999999999" required value="<?php if(!empty($phone)) echo $phone?>"></div>
			<div>
			<span class="final"><?php echo $success?></span>
			<span class="final"><?php echo $error?></span>
			</div>
			<div><input type="submit" name="submit" id="submit" value="Submit"></div>

		</form>
			<div id="ins"><a href="Document.pdf" download >Click to Download Instructions</a></div>
		</div>
	</div>
</body>
</html>

