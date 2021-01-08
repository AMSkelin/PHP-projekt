<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
		<iframe src="https://maps.google.com/maps?q=Mercedesstra%C3%9Fe%20100%2C%2070372%20Stuttgart%2C%20Njema%C4%8Dka&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="DE">Germany</option>
				<option value="HR" selected>Croatia</option>
				<option value="IT">Italy</option>
				<option value="HU">Hungary</option>
				<option value="UK">United Kingdom</option>
				<option value="GR">Greece</option>
				<option value="PO">Poland</option>
				<option value="SL">Slovenia</option>
			</select>

			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>';
?>