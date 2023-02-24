<?php
include '../classes/class.products.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action){
	case 'new':
        create_new_product();
	break;
    case 'update':
        update_product();
	break;
    case 'deactivate':
        deactivate_product();
	break;
}

function create_new_product(){
	$product = new Product();
    $pname = ucwords($_POST['pname']);
    $pprice = ucwords($_POST['pprice']);
    
    $result = $product->new_product($pname, $pprice);
    if($result){
        header('location: ../index.php?page=products&subpage=products&action=profile&id='.$product_id);
    }
}

function update_product(){
	$product = new Product();
    $product_id = $_POST['productid'];
    $pname = ucwords($_POST['pname']);
    $pprice = ucwords($_POST['pprice']);
   
    
    $result = $product->update_product($product_id, $pname, $pprice);
    if($result){
        header('location: ../index.php?page=products&subpage=products&action=profile&id='.$product_id);
    }
}

function deactivate_product(){
	$product = new Product();
    $product_id = $_POST['productid']; 
    $result = $product->deactivate_product($product_id);
    if($result){
        header('location: ../index.php?page=products&subpage=products&action=profile&id='.$product_id);
    }
}
