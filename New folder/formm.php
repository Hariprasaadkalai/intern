<html>
<head><title> registration form </title>
</head>
<center>
<body background="hp1.jpg">
<form action="pg.php" method="post">
<table border="1"  width="400" height="500" bgcolor="lightblue" >
<tr>
<td align="center" bgcolor="blue" colspan="5" style="color:red;"><h3> Registration form</h3></td></tr>
<td>NAME:</td><td><input type="text" name="name"></td></tr>
<tr>
<td>GENDER:</td>
<td><input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br></td>
 </tr>
<td>DOB:</td><td><input type="date" name="dob"></td></tr>
<tr>
<td>PHONE NUMBER:</td><td><input type="number" name="ph_number"></td></tr>
<tr>
<td>EMAIL:</td><td><input type="text" name="email"></td></tr>
<tr>
<td>PASSWORD:</td><td><input type="password" name="password"></td></tr>
<tr>
<td colspan="5" align="center"><button type="submit" value="submit" id="btn">Register</button><br>
<a href="C:\xampp\htdocs\intern\login.php">Back to Home</a></td></tr>
</table>
</form>
</body>

</center>
</html>




