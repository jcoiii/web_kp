<!doctype html>  
<html>  
<head>  
<title>Register</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login User KP</title>
		
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/signin.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
		
		<style>
			#customBtn {
			  display: inline-block;
			  background: white;
			  color: #444;
			  width: 170px;
			  border-radius: 3px;
			  border: thin solid #888;
			  box-shadow: 1px 1px 1px grey;
			  white-space: nowrap;
			}	
			#customBtn:hover {
			  cursor: pointer;
		</style>	
		
</head>  
<body class="text-center">
	   <div class="row">
		   </div>
 <form action="" method="POST" class="form-signin">
		<br>
		<br>
		<br>
      <img class="mb-4 img-fluid" src="./css/logo_unpar_only.png" alt="" width="100">
      <h1 class="h3 mb-3 font-weight-normal">MSO Kerja Praktek</h1>
     
      <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" id="emailadd" class="form-control" placeholder="Alamat Email" name="emailadd" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Kata Sandi" name="pass" required="">

     <br>
		<button class="btn btn-lg btn-primary btn-block" type="submit"  value="Login" name="submit" >Daftar</button> 
     	<br>
	  <p1>Universitas Katolik Parahyangan</p1>
	  <br>
 	  <p2>Copyright &copy; 2019 </p2>
  </form>  
<?php 
if(isset($_POST["submit"])){  
if(!empty($_POST['emailadd']) && !empty($_POST['pass'])) 
{  
    $emailadd=$_POST['emailadd'];
    $pass=$_POST['pass'];
    $passhash=password_hash($pass, PASSWORD_DEFAULT);
    
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con, 'kp') or die("cannot select DB");  
  
    if($numrows==0)  
    { 
          
    $sql="UPDATE dosen SET password='$passhash' WHERE email='".$emailadd."'";  
  
    $result=mysqli_query($con, $sql);  
        if($result){  
    header("Location: index.html");   
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
}   else {  
    echo "All fields are required!";  
}  
}  
?>  
</body>  
</html>
