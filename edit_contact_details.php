<head>
	<title>Control - V0.1</title>
</head>

<body>

<html>
<body>
<?php
	$myFile=fopen("mydata.txt","r") or exit("Can’t open file!");
// read each line of text from the text file
	$lastname = fgets($myFile);
	$firstname = fgets($myFile);
	$emailaddress = fgets($myFile);
    $phonenumber = fgets($myFile);
	fclose($myFile);
?>


	<h1>My Contact Details</h1>
	<p>The contact details on file are as shown below.<br>
	Edit the data and save your changes to file.
	</p>
	<form action="save_contact_details.php" method="post">
		<table>
			<tr>
				<td align="right">Last name: </td>
				<td><?php echo "<input size=\"20\" type=\"text\" name=\"lastname\"value=\"$lastname\">"?>
			</td>
			</tr>
			<tr>
				<td align="right">First name: </td><td>
				<?php echo "<input size=\"20\" type=\"text\" name=\"firstname\"value=\"$firstname\">"?>
			</td>
			</tr>
			<tr>
				<td align="right">Email Address: </td><td>
				<?php echo "<input size=\"30\" type=\"text\" name=\"emailaddress\"value=\"$emailaddress\">"?>
			</td>
			</tr>
			<tr>
				<td align="right">Phone Number: </td><td>
				<?php echo "<input size=\"20\" type=\"integer\" name=\"phonenumber\"value=\"$phonenumber\">"?>

				<td> </td>
				<td colspan="2" align="left"><input type="submit" value="Save changes"></td>
			</tr>			
		</table>
	</form>

</body>	

</html>
