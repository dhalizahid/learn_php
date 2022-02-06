<?php
    $model = $_REQUEST['model']??'';
    include('model/header.php');
    
    switch($model){
        case 'register':
            include('model/register.php');
            break;
        case 'login':
            include('model/login.php');
            break;
        case 'update':
           include('model/update.php');
            break;
        
        case 'list':
            include('model/list.php');
            break;
        case 'delete':
            include('model/delete.php');
            break;
       
            include('model/home.php');
            break;
    include('footer.php');
    }
?>