<?php
session_start();
include('Db.php');
if ($_SESSION['Status'] !=1) {
    header('location:logout.php');
}
if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == 'edit') {
        $id = $_REQUEST['id'];

        $query = "SELECT * FROM user WHERE id ='$id'";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_assoc($result);
        $email = $data['email'];
    }
}

if (isset ($_POST['submit'])) {
    if ($_POST['submit'] == 'Update Email' ) {
        $email = $_POST['email'];
            
        $query = "UPDATE user SET email = '$email' WHERE id = '$id'";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "Update Field";
        }
        else{
            header('location:../index.php?model=list');
        }
    }
}
?>
<style>
    .input input{
        outline: none;
        padding-right: 30px;
    }
    .form{
        margin-left: 500px;
    }
</style>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- header start -->
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <h2>Data Update</h2>
            </div>
        </div>
    </div>
</section>
    <!-- header end -->
<!-- form strat -->
<section class="form ">
    <form accept="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <div>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="input pr-5">
            <label for="email">Email:</label>
            <input type="text"  name="email" placeholder="Name" value="<?php echo $email;?>">
        </div>
        <input type="submit" class="btn-primary ml-5" name="submit" value="Update Email">
    </div>
</form>


