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
    case 'deactivate':
        delete_product();
	break;
}

function create_new_product(){
	$product = new Product();
    $product_name = ucwords($_POST['productname']);
    $product_price = ucwords($_POST['productprice']);
    
    $result = $product->new_product($product_name, $product_price);
    if($result){
        header('location: ../index.php?page=products&subpage=products&action=profile&id='.$product_id);
    }
}

function update_product(){
	$product = new Product();
    $product_id = $_POST['product_id'];
    $product_name = ucwords($_POST['product_name']);
    $product_price = ucwords($_POST['product_price']);
   
    $result = $product->update_product($product_name, $product_price);
    if($result){
        header('location: ../index.php?page=usersproducts&subpage=products&action=profile&id='.$product_id);
    }
}

function delete_product(){
	$product = new Product();
    $product_id = $_POST['productid']; 
    $result = $product->delete_product($product_id);
    if($result){
        header('location: ../index.php?page=products&subpage=products&action=profile&id='.$product_id);
    }
}
