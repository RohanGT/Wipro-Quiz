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
	<header>
		<img src="TTLight.png" id="tt" alt="TechTatva">
        <img src="MAHE.png" id="mahe" alt="MAHE">
        <h1>Registration Form</h1>
    </header>
    <main>
    <section>
            <div>
                <h2> Welcome to the Wipro Quiz!</h2>
                <p class="wipro">
                	<img src="wipro.png" id="wipro" alt="Wipro">
                   	<div id="ins"><a href="Document.pdf" download >Click to Download Instructions</a></div>
                </p>
            </div>
        </section>
		<form method="POST" enctype="multipart/form-data" action='<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]) ?>' >
			<div class="f1">
				<label for="name">Name:</label>
				<div class="f2">
					<input type="text" name="name" class="i" placeholder="Name" required value="<?php if(!empty($name)) echo $name?>">
				</div>
				<label for="regno">Registration No:</label>
				<div class="f2">
					<input type="number" name="regno" class="i" placeholder="Registration Number" min="160000000" max="190000000" required title="Required" value="<?php if(!empty($regno)) echo $regno?>">
				</div>
			</div>
			<div class="f1">
				<label for="branch">Branch:</label>
				<div class="f2">
					<input type="text"  class="i" name="branch" placeholder="Branch" required value="<?php if(!empty($branch)) echo $branch?>">
				</div>
				<div class="semf2">
					<label>Semester:</label>
					<select name="semester" id="sem2">
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
			<div class="f1" >
				<label for="email">Email:</label>
				<div class="f2">
					<input type="email" class="i" name="email" placeholder="Email" required value="<?php if(!empty($email)) echo $email?>">
				</div>
				<label for="phone">Phone No:</label>
				<div class="f2">
					<input type="number"class="i"  name="phone" placeholder="Mobile-No" min="1000000000" max="9999999999" required value="<?php if(!empty($phone)) echo $phone?>">
				</div>
			</div>
			<div>
				<span class="final"><?php echo $success?></span>
				<span class="final"><?php echo $error?></span>
			</div>
			<div id="sub">
				<input type="submit" name="submit" id="submit" value="Submit">
			</div>
		</form>
		</main>
</body>
</html>

