<?php
//  session_start();
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $conn=new mysqli('localhost','root','','record');
        
    if($conn->connect_error)
    {
        die('connection failed:' .$conn->connect_error);
    }

    else{
        $sql = "SELECT * FROM `register` where username='$username'";
        $result = mysqli_query($conn,$sql);
        // while($row=mysqli_fetch_assoc($result))
        // {
        //     echo $row['username'];
        // }
        $count = mysqli_num_rows($result);
        if($count>0)
        {
            echo"User is already Exist";
            // header("Location:/myshoping/Account.php");
            include 'Account.php';
            
        }
        else{
            $stmt =$conn->prepare("insert into register(username,email,password) values(?,?,?)");
            $stmt->bind_param("sss", $username, $email, $password);
            $stmt->execute();
            $_SESSION['status']="Register successfully";
            echo"you are successfuly register";
              include 'Account.php';
            header("Location:Account.php");
           
        }
          
            $stmt->close();
            $conn->close();
    }




?>