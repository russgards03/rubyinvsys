<?php
include '../classes/class.sales.php';

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
}

function create_new_product(){
	$product = new Product();
    $productname = ucwords($_POST['product_name']);
    $producttype = ucwords($_POST['product_type']);
    $productprice = ucwords($_POST['product_price']);
    
    $result = $product->new_product($productname, $producttype, $productprice);
    if($result){
        header('location: ../index.php?page=usersproducts&subpage=products&action=profile&id='.$id);
    }
}

function update_product(){
	$product = new Product();
    $productid = $_POST['product_id'];
    $productname = ucwords($_POST['product_name']);
    $producttype = ucwords($_POST['product_type']);
    $productprice = ucwords($_POST['product_price']);
   
    $result = $product->update_product($productname, $producttype, $productprice, $productid);
    if($result){
        header('location: ../index.php?page=usersproducts&subpage=products&action=profile&id='.$productid);
    }
}

function delete_product(){
	$product = new Product();
    $productid = $_POST['product_id']; 
    $productname = ucwords($_POST['product_name']);
    $producttype = ucwords($_POST['product_type']);
    $productprice = ucwords($_POST['product_price']);

    $result = $product->delete_product($productname, $producttype, $productprice, $productid);
    if($result){
        header('location: ../index.php?page=usersproducts&subpage=products&action=profile&id='.$productid);
    }
}
