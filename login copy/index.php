<?php
/* include the class file (global - within application) */
include_once 'classes/class.user.php';
include_once 'classes/class.products.php';
include_once 'classes/class.receive.php';
include_once 'classes/class.release.php';
include_once 'classes/class.inventory.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$product_id = (isset($_GET['product_id']) && $_GET['product_id'] != '') ? $_GET['product_id'] : '';

$product = new Product();
$user = new User();
$receive = new Receive();
$release = new Release();
$inventory = new Inventory();
if(!$user->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
$user_id_login = $user_id;
?>

<!DOCTYPE html>
<html>
<head>
<div id="padding">

    <title>Ruby's' Bread and Pastries House</title>
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>        

    <div id="wrapnav">
        <div id="navbar">
            <div id="logo3"></div>
            <a href="index.php"><i class="fa fa-fw fa-home"></i>  Home</a>
            <a href="index.php?page=users"><i class="fa fa-fw fa-user"></i>  Users</a>
            <a href="index.php?page=products"><i class="fa fa-fw fa-clipboard"></i>  Products</a>
            <a href="index.php?page=inventory"><i class="fa fa-fw fa-list"></i>  Inventory</a>
            <a href="index.php?page=receive"><i class="fa fa-fw fa-list"></i>  Incoming</a>
            <a href="index.php?page=release"><i class="fa fa-fw fa-dollar"></i>  Sales</a> 

            <form action="logout.php">
                <div id="bar">
                    <a href="index.php?page=logout">Logout</a>
                </div>
            </form>
        </div>
    </div>

    <div id="wrapper">
        <div id="content">
            <?php
            switch($page){
                
                        case 'users':
                            require_once 'users-module/index.php';
                        break; 
                        case 'products':
                            require_once 'products-module/index.php';
                        break; 
                        case 'sales':
                            require_once 'sales-module/index.php';
                        break;
                        case 'receive':
                            require_once 'receive-module/index.php';
                        break;
                        case 'release':
                            require_once 'release-module/index.php';
                        break;
                        case 'inventory':
                            require_once 'inventory-module/index.php';
                        break;
                        case 'logout':
                            require_once 'logout.php';
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