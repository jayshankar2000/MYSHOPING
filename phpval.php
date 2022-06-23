<html>
<head>
<link rel="stylesheet" type="text/css" href="tc2cval.css">
</head>
<body>
<?php
$user_err = $email_err = $num_err = $pass_err = $cpass_err = $url_err = 
$cm_err = $gen_err = "";
if($_SERVER['REQUEST_METHOD'] = 'POST'){
if(empty($_POST['user'])){
$user_err = "name is empty";
}else if(!preg_match("/^[a-z A-Z]*$/",$_POST['user'])){
$user_err = "only characters are allowed";
}
if(empty($_POST['eml'])){
$email_err = "email is empty";
}else if(!filter_var($_POST['eml'],FILTER_VALIDATE_EMAIL)){
$email_err = "email is NOt correct";
}
if(empty($_POST['num'])){
$num_err = "number is empty";
}else if(!preg_match("/^[0-9]{10}$/",$_POST['num'])){
$num_err = "only 10 digits are allowed";
}
if(empty($_POST['pass'])){
$pass_err = "password is empty";
}else{
if((strlen($_POST['pass'])<2) || (strlen($_POST['pass'])>9)){
$pass_err = " enter password is between 2 to 9";
}
}
if(empty($_POST['cpass'])){
$cpass_err = "confirm password is empty";
}else if($_POST['pass'] != $_POST['cpass']){
$cpass_err = "password and confirm password is not matched";
}
if(empty($_POST['ur'])){
$url_err = "url is empty";
}
if(empty($_POST['text'])){
$cm_err = "comment is empty";
}
if(empty($_POST['gen'])){
$gen_err = "gender is empty";
}
}
?>
<form method="POST" action="<?php echo 
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label>Enter User Name:</label><br>
<input type= "text" name="user" id="unm" value='<?php echo 
isset($_POST['user']) ? $_POST['user'] : '';?>'><br>
<span class="err"><?php echo $user_err; ?></span><br>
<label>Enter Email:</label><br>
<input type= "text" name="eml" id="eml" value='<?php echo 
isset($_POST['eml']) ? $_POST['eml'] : '';?>'><br>
<span class="err"><?php echo $email_err; ?></span><br>
<label>Enter Number:</label><br>
<input type= "text" name="num" id="num" value='<?php echo 
isset($_POST['num']) ? $_POST['num'] : '';?>'><br>
<span class="err"><?php echo $num_err; ?></span><br>
<label>Enter Password</label><br>
<input type= "password" name="pass" id="pass" value='<?php echo 
isset($_POST['pass']) ? $_POST['pass'] : '';?>'><br>
<span class="err"><?php echo $pass_err; ?></span><br>
<label>Enter Confirm Password</label><br>
<input type= "password" name="cpass" id="cpass" value='<?php echo 
isset($_POST['cpass']) ? $_POST['cpass'] : '';?>'><br>
<span class="err"><?php echo $cpass_err; ?></span><br>
<label>Enter Url</label><br>
<input type= "url" name="ur" id="ur" value='<?php echo 
isset($_POST['ur']) ? $_POST['ur'] : '';?>'><br>
<span class="err"><?php echo $url_err; ?></span><br>
<label>Enter Comments</label><br>
<textarea rows="5" cols="10" name="text" id="text"><?php echo 
isset($_POST['text']) ? $_POST['text'] : '';?></textarea><br><br>
<span class="err"><?php echo $cm_err; ?></span><br>
<label>Select Gender</label><br>
<input type= "radio" name="gen" <?php if (isset($_POST['gen']) && 
$_POST['gen']=="male") echo "checked";?> value="male">Male
<input type= "radio" name="gen" <?php if (isset($_POST['gen']) && 
$_POST['gen']=="female") echo "checked";?> value="female">Female
<input type= "radio" name="gen" <?php if (isset($_POST['gen']) && 
$_POST['gen']=="others") echo "checked";?> value="others">others<br>
<span class="err"><?php echo $gen_err; ?></span><br>
<input type="submit" value="submit" name="button" id="btn">
</form>
<h2>Your Inputs</h2>
<?php 
echo $_POST['user']."<br>";
echo $_POST['eml']."<br>";
echo $_POST['num']."<br>";
echo $_POST['pass']."<br>";
echo $_POST['cpass']."<br>";
echo $_POST['ur']."<br>";
echo $_POST['text']."<br>";
echo $_POST['gen']."<br>";
?>
</body>
</html>

