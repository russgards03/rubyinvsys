<?php
include '../classes/class.products.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action){
	case 'create':
        create_new_product();
	break;
    case 'update':
        update_product();
	break;
    case 'delete':
        delete_product();
	break;
    case 'upload':
        upload_product();
}

function create_new_product(){
	$product = new Product();
    $productname = ucwords($_POST['product_name']);
    $producttype = ucwords($_POST['product_type']);
    $productprice = ucwords($_POST['product_price']);
    
    $result = $product->new_product($productname, $producttype, $productprice);
    if($result){
        header('location: ../index.php?page=products'.$id);
    }
}

function update_product(){
	$product = new Product();
    $productid = $_POST['product_id'];
    $productname = ucwords($_POST['product_name']);
    //$producttype = ucwords($_POST['product_type']);
    $productprice = ucwords($_POST['product_price']);
   
    $result = $product->update_product($productname, $productprice, $productid);
    if($result){
        header('location: ../index.php?page=products&subpage=products');
    }
}

function delete_product(){
    $product = new Product();
    $product_id = $_POST['product_id'];

    $result = $product->delete_product($product_id);
    if($result){
        header('location: ../index.php?page=users&subpage=products');
    }
}

function upload_product(){
    if(isset($_POST["submit"])){
    $target_dir = "/";
    $file = $_FILES['fileToUpload']['name'];
    $target_file = $target_dir . $file;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if($check !== false) {
            echo "File is an image - " . $check['mime'] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }else{
        echo "error";
    }
}