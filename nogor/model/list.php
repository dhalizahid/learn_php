 <!-- php start -->
<?php
include('Db.php');

$query = "SELECT * FROM user";
$result = mysqli_query($connection,$query);

// print_r($Result);

?>
<!-- php end -->

<style>
    table{
        border: 1px solid black;
        width: 50%;
        /* justify-items: center; */
        margin-left: 300px;
    }
    th{
        border: 1px solid black;

    }
    td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    .edit{
        height: 30px;
        width: 50px;
        padding: 1px 15px;
        background-color:#ffff00;
        color: black;
        border-radius: 5px;
        text-decoration: none;
    }
    .delete{
        height: 30px;
        width: 50px;
        padding: 1px 15px;
        background-color:#cc0000;
        color: black;
        border-radius: 5px;
        text-decoration: none;
    }
</style>
    <div  >
    <h1 style="text-align: center;">Student List</h1>
    <div class="card-body">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['email'];?> </td>
                            <td>
                                <a href="model/update.php?action=edit&id=<?php echo $row['id'];?>" class="edit">Edit</a>
                                <a href="model/delete.php?action=delete&id=<?php echo $row['id'];?>" class="delete">Delete</a>
                            </td>
                        </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
