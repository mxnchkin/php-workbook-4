<head>
	<title>Control - V0.1</title>
</head>

<body>
	<h1>Contact Details</h1>
	<p>The contact details you submitted are shown below:</p>
	<table>
		<tr>
			<td align="right">Last name: </td>
			<td><?php echo $_POST["lastname"]; ?></td>
		</tr>
		<tr>
			<td align="right">First name: </td>
			<td><?php echo $_POST["firstname"]; ?></td>
		</tr>
		<tr>
			<td align="right">Email Address: </td>
			<td><?php echo $_POST["emailaddress"]; ?></td>
		</tr>
		<tr>
			<td align="right">Phone Number: </td>
			<td><?php echo $_POST["phonenumber"]; ?></td>
		</tr>
		<tr>
	</table>

<?php
$myFile=fopen("mydata.txt","w") or exit("Can’t open file!");

// Write each line of text into the text file file

fwrite($myFile, $_POST["lastname"]."\r\n");
fwrite($myFile, $_POST["firstname"]."\r\n");
fwrite($myFile, $_POST["emailaddress"]."\r\n");
fwrite($myFile, $_POST["phonenumber"]."\r\n");
fclose($myFile);

echo '<br>Data Saved on Server'



?>
<br>

	<form action="edit_contact_details.php" method="post">
		<input type="submit" value="Edit Values">
	</form>

</body>	

</html>
