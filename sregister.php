<!DOCTYPE html>
<html>
<head>
	<title>Register Account</title>
</head>
<body>
	<center>
	<h1>Create New Account</h1>
<form action="s_otp.php" method="get">
	<table>
		<tr>
			<td>Name : </td><td><input type="text" name="name" placeholder="Enter your name"></td>
		</tr>

		<tr>
			<td>Pincode (Where you live) : </td><td><input type="text" name="pin" placeholder="Enter your city pincode"></td>
		</tr>
		<tr>
			<td>Email : </td><td><input type="email" name="email" placeholder="Enter your E-mail"></td>
		</tr>
		<tr>
			<td>Gender : </td><td><input type="radio" name="sex" value="Male">Male<input type="radio" name="sex" value="Female">Female</td>
		</tr>
		<tr>
			<td>Date of Birth : </td><td>DOB-<select size="1" name="day">
					<option value="1-">1</option>
					<option value="2-">2</option>
					<option value="3-">3</option>
					<option value="4-">4</option>
					<option value="5-">5</option>
					<option value="6-">6</option>
					<option value="7-">7</option>
					<option value="8-">8</option>
					<option value="9-">9</option>
					<option value="10-">10</option>
					<option value="11-">11</option>
					<option value="12-">12</option>
					<option value="13-">13</option>
					<option value="14-">14</option>
					<option value="15-">15</option>
					<option value="16-">16</option>
					<option value="17-">17</option>
					<option value="18-">18</option>
					<option value="19-">19</option>
					<option value="20-">20</option>
					<option value="21-">21</option>
					<option value="22-">22</option>
					<option value="23-">23</option>
					<option value="24-">24</option>
					<option value="25-">25</option>
					<option value="26-">26</option>
					<option value="27-">27</option>
					<option value="28-">28</option>
					<option value="29-">29</option>
					<option value="30-">30</option>
					<option value="31-">31</option>
			    </select>

			    <select size="1" name="month">
					<option value="Jan-">Jan</option>
					<option value="Feb-">Feb</option>
					<option value="Mar-">Mar</option>
					<option value="Apr-">Apr</option>
					<option value="May-">May</option>
					<option value="Jun-">Jun</option>
					<option value="Jul-">Jul</option>
					<option value="Aug-">Aug</option>
					<option value="Sep-">Sep</option>
					<option value="Oct-">Oct</option>
					<option value="Nov-">Nov</option>
					<option value="Dec-">Dec</option>
			    </select>
			    <select size="1" name="year">
			    	<option value="1985">1985</option>
					<option value="1986">1986</option>
					<option value="1987">1987</option>
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
			    	<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2008">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
			    </select></td>
		</tr>
		<tr>
			<td>Mobile no. : </td><td><input type="number" name="no" placeholder="Your Mobile no."></td>	
		</tr>
		<tr>
			<td>Create Password : </td><td><input type="password" name="pass" placeholder="Password" maxlength="6"></td>
		</tr>
		<tr>
			<td>Re-enter Password : </td><td><input type="password" name="repass" placeholder="Re-enter Password" maxlength="6"></td>
		</tr>
		<tr>
			<td> </td><td><input type="hidden" name="roll" value="student"></td>
		</tr>
		<tr align="right">
			<td colspan="2"><input type="submit" name="submit"></td>
		</tr>
	</table>

	<p><h3><a href="admin.php">Already have a Account?</a></p></h3>
</form>




</body>
</html>