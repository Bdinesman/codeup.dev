<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<form method="POST" action="/my_first_form.php">
		<p>
			<label for="username">Username</label>
			<input placeholder="Enter username" id="username" name="username" type="text">
		</p>
		<p>
			<label for="passowrd">Password</label>
			<input placeholder="Enter password" id="password" name="password" type="password">
		</p>
		<p>
			<button type="submit" name="submitbutton">Login</button>
		</p>
	</form>
	<form method="POST" acton="/my_first_form.php">
		<div>
			<label for="sento">To</label>
			<input type="text" name="sendto" id="sendto">
		</div>
		<div>
			<label for="name">From</label>
			<input type="text" name="name" id="name">
		</div>
		<div>
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject">
		</div>
		<div>
			<textarea rows=10 cols=40>Enter your text here</textarea>
		</div>
		Would you like to save a copy to your folder?
		<label >
			Yes<input type="checkbox" name="save" value="Yes">
		</label>
		<div>
			<button type="submit">Send</button>
		</div>	
	</form>
	<form method="POST" acton="/my_first_form.php">
		<label for="q1">What is your gender?
			<label>Male
				<input type="radio" name="q1" value="Male">
			</label>
			<label>Female
				<input type="radio" name="q1" value="Male">
			</label>
			<label>Other
				<input type="radio" name="q1" value="Male">
			</label>
		</label>
		<div>
			<label for="q2">Which is the correct answer?</label>
				<label>
					A<input type="radio" name="q2" value="A">
				</label>
				<label>
					B<input type="radio" name="q2" value="B">
				</label>
				<label>
					C<input type="radio" name="q2" value="C">
				</label>
				<label>
					D<input type="radio" name="q2" value="D">
			</label>
		</div>
		<div>
		What is your favorite pizza topping?
		<label>
			Pepperoni<input type="checkbox" name="q3[]" value="Pepperoni">
		</label>
		<label>
			Pineapple<input type="checkbox" name="q3[]" value="Pineapple">
		</label>
		<label>
			Squid<input type="checkbox" name="q3[]" value="Squid">
		</label>
		<label>
			Mud<input type="checkbox" name="q3[]" value="Mud">
		</label>
		</div>
		<div>
			<label for="q4[]">What do you want on your pizza?</label>
			<select multiple id="q4" name="q4[]">
				<option>Pepperoni</option>
				<option>Pineapple</option>
				<option>Jello</option>
				<option>BEES?!</option>
			</select>
		<input type="submit">
	</form>
	<form method="POST" acton="/my_first_form.php">
		<label for"testing">Select testing</label>
		<select name="testing">
			<option value=1>Yes</option>
			<option value=0>No</option>
		</select>
		<input type="submit">
	</form>
</body>
</html>