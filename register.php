<?php
require'form.php'
?>
<!DOCTYPE HTML>
<html>

<head>
    <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> -->
    <title> Wipro | TT18</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/components/form.min.css">

    <link rel="stylesheet" href="style_two.css?<?=filemtime("style_two.css")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <header>
    	<img src="TTlight.png" id="tt" alt="TechTatva">
    	<img src="wipro.png" id="wipro" alt="Wipro">
        <img src="MAHE.png" id="mahe" alt="MAHE">
        <!-- <h1>Registration Form</h1> -->
    </header>
    <main>
        <div class="intro">
            <div>
                <h2> Welcome to the Wipro Quiz!</h2>
                <p>
                	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a sapien vehicula, venenatis odio a, molestie sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus accumsan tempus leo, ac pellentesque nulla dignissim ultricies. Nullam euismod odio a elementum vestibulum. Vivamus et malesuada tortor. Curabitur congue. 
                </p>
            </div>
            
            <a href="Document.pdf" download> Download Instructions </a>
        </div>
        <form method="POST" class="ui equal width form" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>' enctype="multipart/form data">
            <div class="field required">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Name" required value="<?php if(!empty($name)) echo $name?>">
            </div>
            <div class="fields">
	            <div class="field required">
	                <label for="regno">Registration No</label>
	                <input type="text" name="regno" placeholder="Registration Number" min="130000000" max="190000000" required value="<?php if(!empty($regno)) echo $regno ?>" value="<?php if(!empty($regno)) echo $regno?>">
	            </div>
	            <div class="field required">
	                <label for="phone">Phone No</label>
	                <input type="text" name="phone" placeholder="Mobile No" min="1000000000" max="9999999999" required value="<?php if(!empty($phone)) echo $phone?>">
	            </div>
	        </div>
            <div class="fields">
	            <div class="field required">
	                <label for="branch">Branch</label>
	                <input type="text" name="branch" placeholder="Branch" required value="<?php if(!empty($branch)) echo $branch?>">
	            </div>
	            <div class="field six wide required">
	                <label for="semester">Semester</label>
	                <select name="semester" class="ui dropdown">
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
            <div class="field required">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required value="<?php if(!empty($email)) echo $email?>">
            </div>
            <span><?php echo $success?></span>
			<span><?php echo $error?></span>
            <div class="centered">
            <?php /*check success and error	
            	<div class="ui success message">
  				<i class="close icon"></i>
 					<div class="header">
  					  Your user registration was successful.
 					 </div>
 				 <p>You may now log-in with the username you have chosen</p>
			</div>*/?>
				
        	<div class="g-recaptcha" data-sitekey="6LfKclgUAAAAANnq-821_v-Fb07k-0o3Pxsjb1T-"></div>
            	<input type="submit" class="btn submit" value="Submit" name="submit">
        	</div>
        </form>
    </main>
    <p class="dets" x-ms-format-detection="none">
		Contact us:<br>
	    Priyam : <b>+91 9999 9999 99</b><br>
	    Arvind : <b>+91 9999 9999 99</b>
    </p>
</body>

</html>