<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($product->list_products() != false){
foreach($product->list_products() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=usersproducts&subpage=products&action=profile&id=<?php echo $product_id;?>">
        <?php echo $product_name;?></a></td>  
        <td><?php echo $product_type;?></td>
        <td><?php echo $product_price;?></td>
      </tr>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>