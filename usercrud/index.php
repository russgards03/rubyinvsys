<?php
/* include the class file (global - within application) */
include_once 'classes/class.user.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$user = new User();
if(!$user->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
?>

<!DOCTYPE html>
<html>
<head>
<div id="padding">
    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="index.php?page=usersproducts">Users</a>
    </div>

    <title>Ruby's' Bread and Pastries House</title>
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>
<body>

    <div id="wrap">
        <div id="logo2"></div>
        <div id="name">
            <p>Logged in as:</p>
            <?php echo $user->get_user_lastname($user_id).', '.$user->get_user_firstname($user_id);?>
        </div>

        <form action="logout.php">
            <div id="button-center">
            <input type="submit" value="Logout">
            </div>
        </form>
       
    </div>


    <div id="wrapper">
        <div id="content">
            <?php
            switch($page){
                
                        case 'usersproducts':
                            require_once 'users-products-module/index.php';
                        break; 
                        case 'products':
                            require_once 'products-module/index.php';
                        break; 
                        case 'productinv':
                            require_once 'products-module/index.php';
                        break;
                        default:
                            require_once 'main.php';
                        break; 
                    }
            ?>
        </div>
    </div>
</div>
</body>
</html>