<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    require('submit.php');
}
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
form {
    padding: 100px;
    max-width: 500px;
    margin: 0 auto;
    border: 10px solid black;
    background: #BFC9CA;   
}
.error {color: red;}
</style>
</head>
<body>  
<div class=form>
	<h1 style=text-align:center;>Validation</h1>
		
		<form method="post" action="index.php">
            <p><label>
Username: <input type="text" name="name" value="<?php if(isset($_POST['username'])) echo $_POST['name'];?>">  
</label></p>
<p><label>
Age: <input type="text" name="age" value="<?php if(isset($_POST['age'])) echo $_POST['age'];?>">
</label></p>
<p><label>
Password: <input type="password" name="psd" value="<?php if(isset($_POST['password'])) echo $_POST['psd'];?>">
</label></p>
<p><label>
City: <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo $_POST['city'];?>">
</label></p>
<p><label>
Country: <input type="text" name="country" value="<?php if(isset($_POST['country'])) echo $_POST['country'];?>">
</label></p>
<p><input type="submit" name="submit" value="submit"></p>
 
		</form>
    </div>
</body>
</html>