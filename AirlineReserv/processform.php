<form method="post" action="creditcard.php">
Welcome 
<?php 
session_start();
/* save the data for the rest of the session */
$_SESSION['reservation-data'] = $_POST;
print_r($_SESSION);
?> <br>
<p>
<!-- Mastercard, Visa, or AmericanExpress -->
<p> What type of credit card would you like to use? </p>
	<input type="radio" name="creditcomp" value="mc" /> Mastercard
	<input type="radio" name="creditcomp" value="vis" /> Visa
	<input type="radio" name="creditcomp" value="ame" /> AmericanExpress
	
<p> Credit Card Number </p>
	<input type="text" name="credNum" /> 

<p> Credit Card Security Code(on back) </p>
	<input type="text" name="secCode" />
<hr>
<fieldset>
	<legend> Billing Address Information </legend>
<!--<p> Billing Address Information </p> -->

<p> Card Holder's Name </p>
	<input type="text" name="cardName" />
<p> Street Address </p>
	<input type="text" name="cardAddress" />

<p> State </p>
	<select name="state" size="10">
	<option value"1">AK</option>
	<option value"2">AL</option>
	<option value"3">FL</option>
	<option value"4">GA</option>
	<option value"5">KY</option>
	<option value"6">MS</option>
	<option value"7">NC</option>
	<option value"8">OH</option>
	<option value"9">SC</option>
	<option value"10">TN</option>
	</select>
City 
	<input type="text" name="cardCity" />
	<p> 5 digit Zipcode </p>
	<input type="text" name="cardZip" />
</fieldset>
<p> Expiration Date </p>
	<select name="expMonth" size = "4">
	<option value"1">January</option>
	<option value"2">February</option>
	<option value"3">March</option>
	<option value"4">April</option>
	<option value"5">May</option>
	<option value"6">June</option>
	<option value"7">July</option>
	<option value"8">August</option>
	<option value"9">September</option>
	<option value"10">October</option>
	<option value"11">November</option>
	<option value"12">December</option>
	</select>
	<select name="expYear" size="4">
		<option value"1">12</option>
		<option value"2">13</option>
		<option value"3">14</option>
		<option value"3">15</option>
	</select>
	
	
	
	
<!-- Submit Button -->
<p><input type="submit" value="Submit the Data" /></p>

</form>