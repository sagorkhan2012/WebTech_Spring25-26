<?php
include "../Controller/validation.php";
?>

<!DOCTYPE html>
<html>
<body>

<h2>PHP Form Validation Example</h2>

<p style="color:red">* required field</p>

<form method="post" action="">
<table>

<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
<td style="color:red">* <?php echo $nameErr; ?></td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
<td style="color:red">* <?php echo $emailErr; ?></td>
</tr>

<tr>
<td>Website:</td>
<td><input type="text" name="website" value="<?php echo $website; ?>"></td>
<td style="color:red"><?php echo $websiteErr; ?></td>
</tr>

<tr>
<td>Comment:</td>
<td><textarea name="comment" rows="5" cols="30"><?php echo $comment; ?></textarea></td>
</tr>

<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Other"> Other
</td>
<td style="color:red">* <?php echo $genderErr; ?></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $isValid) {
    echo "<h3 style='color:green'>Form Submitted Successfully!</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Website: " . $website . "<br>";
    echo "Comment: " . $comment . "<br>";
    echo "Gender: " . $gender;
}
?>

</body>
</html>