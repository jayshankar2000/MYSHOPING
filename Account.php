<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
    scale= 1.0">
    <title>All product-Myshoping  | Ecommerse Website Design</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
           
</head>
<body>


	   
      <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/78.jpg" width=125px">
 
            </div> 
            
            <nav>
                <ul id="MenuItems"> 
                    <li><a href="index.html">Home</a></li>
                    <li><a href="product.html">Product</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="Account.php">Account</a></li>
 
                </ul>
            </nav>

			
            <a href="cart.html"><img src="images/cart.png "width="30px" height="30px"></a> 
			 <img src="images/menu.png " class="menu-icon" 
             onclick="menutoggle()"> 
          </div>
         </div>
         <center> 
        <?php 
                  if(isset($_SESSION['status']))
                  {
                    

        ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> Hey! </strong>   <?php echo $_SESSION['status']; ?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
        </div>

        <?php
                      unset($_SESSION['status']);
                  }
     ?>
       
              </center>
         
         
         <!-----Account page    -->
        
        
         <div class="account-page">
            <div class="container">
                <diV class="row">
                <div class="col-2" style="width: 20px;">
                  <img src="images/image1.png" width="80%">   
                </div>
                
                <div class="col-2">
                  <div class="form-container">
                  
                      <div class="form-btn" style="size: 20px;">
                    <span onclick="login()">Login</span>
                    
                    <span onclick="register()">Register</span>
                    <hr id="Indicator">
                  </div>
                  <form id="LoginForm" action="login.php" method="post" required style="width:100% ">
                        <input type="text" placeholder="Username" name="uname" required>
                        <input type="password" placeholder="password" name="password" required>
                        <button type="submit" class="btn"> <a href="index.html">Login</button></a>
                       
                       <h2> <a href="forget.html" style="color:red;">Forgot password</a></h2>
                    </form>
                  <form id="RegForm" action="Register.php" method="post" onsubmit="return validate()">
                        <input type="text" placeholder="Username" name="uname" id="name" >
						<span id="wname"></span>
                        <input type="email" placeholder="Email" name="email"id="email">
						<span id="wemail"></span>
                        <input type="password" placeholder="password" name="password"id="pass">
						<span id="wpass"></span>
                        <button type="submit" class="btn">Register</button>
                      
                    </form>
                   
                    </div>
                </div>
                </diV>
            </div>

         </div>
         



		
	 <!------footer---->
	 <div class="footer">
         <div class="container">
	   <div class="row">
	   <div class="footer-col-1">
	    <h3>Download our APP</h3>
		<p>Download App for Android and ios mobile phone.</p>
        <div class="app-logo">
         <img src="images/play-store.png">   
         <img src="images/app-store.png">   

        </div>
	   </div>
	   <div class="footer-col-2">
	       <img src="images/78.jpg" alt="">
		   <p>our Purpose is to sustainable make the pleasure 
               and Benefit of sports Accessibe to many.</p>
       </div>
        <div class="footer-col-3">
        <h3>Useful Linkes</h3>
        <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Retuen Policy</li>
            <li>Join Affiliate</li>
        </ul>
    </div>
	   
	     <div class="footer-col-4">
		 <h3>follow us</h3>
		 <ul>
		    <li>Facebook</li>
			<li>Twiter</li>
			<li>Instaram</li>
			<li>youtube</li>
			<ul>
	</div>
			
	</div>
    <hr>

	</div>
	</div>
    <!------js for toggle menu-------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight="0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight=="0px"){
                MenuItems.style.maxHeight="200px";
            }else{
                MenuItems.style.maxHeight="0px";
            }
        }
    </script>

    <!---js for toggle form-->
     <script>
	 function validate(){
		 var name=document.getElementById("name").value;
		 var email=document.getElementById("email").value;
		 var pass=document.getElementById("pass").value;
		 var ck_username = /^[A-Za-z0-9_\s]{1,20}$/;
         var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
         var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
		if (!ck_username.test(name)) {
			alert("Please Enter Valid User Name");
            return false;
		}
		if (!ck_email.test(email)) {
			alert("Please Enter Valid Email");
            return false;
		}
		if (!ck_password.test(pass)) {
			alert("Please Enter Valid Password");
            return false;
		}

		
	 }
		 
         var LoginForm=document.getElementById("LoginForm");
         var  RegForm=document.getElementById("RegForm");
        var Indicator=document.getElementById("Indicator");

        function register(){
            RegForm.style.transform="translatex(0px)";
            LoginForm.style.transform="translatex(0px)";
            Indicator.style.transform="translatex(100px)";
        }
        function login(){
            RegForm.style.transform="translatex(300px)";
            LoginForm.style.transform="translatex(300px)";
            Indicator.style.transform="translatex(0px)";
        }
     </script>

</body>
</html>