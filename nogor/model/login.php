<?php
    session_start();
    include('Db.php');
    if ($_SESSION['Status'] !=1) {
        header('location:login.php');
    }
    if(isset($_POST['submit']) && $_POST['submit'] == 'Login'){
        $email    = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM user WHERE emil ='$email' AND password = '$password'";
        $result = mysqli_query($connection,$query);
        $count  = mysqli_num_rows($result);

        if ($count > 0) {
            header('location:login.php');
        }
        else{
            $_SESSION['Status']=1;
            header('location:index.php');
        }
    }
?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
         <input type="email" name="email" placeholder="nogor@gmail">
         <input type="password" name="password" placeholder="Password">
         <input type="submit" name="submit" value="Login">
    </form>