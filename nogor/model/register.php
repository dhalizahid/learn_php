<?php
	session_start();
	include('Db.php');
    if(isset($_POST['submit'])){ 
        // var_dump($_POST['email']);
        if( $_POST['submit']== 'Send Data'){      
            $email 			  = $_POST['email'];
            $password 		  = md5($_POST['password']);
            $confirm_password = md5($_POST['confirm_password']);
            
            if (empty($email) ||  empty($password)  ||  empty($confirm_password)) {
                echo "Error ! You must input all filds.";
            }
            else{
                if ($password != $confirm_password) {
                    echo "Error ! password dosn't match.";
                }
                else{
                    $query="SELECT * FROM user WHERE email = '$email'";
                    $result= mysqli_query($connection,$query);
                    $count=mysqli_num_rows($result);
                    if ($count > 0) {
                        echo "Sorry ! This Email already exists";
                    }
                    echo $query= "INSERT INTO user(email,password)  VALUES('$email','$password')";
                    $result = mysqli_query($connection,$query);
                    if (!$result) {
                        echo "Sorry ! data insert faild";
                    }
                    else{
                        $_SESSION['Status']=1;
                        header('location:index.php?model=login');
                    }

                }
            }
    
        }
    }    
	
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="email" name="email" placeholder="nogor@gmail">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        <input type="submit" name="submit" value="Send Data">
    </form>
</body>
</html>