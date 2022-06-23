
<?php 
session_start();
$uname=$_POST['uname'];
$password=$_POST['password'];

$conn=new mysqli('localhost','root','','record' );
if($conn->connect_error)
{
    die('connection faild :' .$conn->connect_error);
}

else{
    
    $stmt =$conn->prepare("select * from register where username =?");
    $stmt->bind_param("s",$uname);
    $stmt->execute();
    $stmt_result =$stmt->get_result();
    if($stmt_result->num_rows >0)
    {
        $data =$stmt_result->fetch_assoc();
        if($data['password'] === $password )
        {
            $_SESSION['status']= "login Successfully";
            header("Location:Account.php");
        }
        else{
           $_SESSION['status'] = " Invalid Email or password ";
            header("Location:Account.php");
        }


    }
    else{
        $_SESSION['status'] =" Invalid Email or Password";
        header("Location:Account.php");
    }

}



?>