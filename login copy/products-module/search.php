<?php
include_once '../classes/class.products.php';

//include '../config/config.php';
$product = new Product();

// get the q parameter from URL
$q = $_GET["q"];
$count = 1;
$hint=' 

<br>
<div id="subcontent">
<table id="data-list">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
      </tr>';

$data = $product->list_product_search($q);
if($data != false){
    //$hint = '<ul>';
    foreach($data as $value){
        extract($value);

        //$hint .= '<li>'.$prod_name. '</li>';
        $hint .= '  
       <tr>
        <td>'.$count.'</td>
        <td><a id="black" href="index.php?page=products&subpage=products&action=profile&id=
        '.$product_id.'">'.$product_name.'</a></td>
        <td>'.$product_type.'</td>
        <td>'.$product_price.'</td>
        </tr>
        <tr>';
        $count++;
    }  
}
else
{
  echo "No Record Found.";
}

$hint .= '</table>';

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "No result(s)" : $hint;
?>