<a href="index.php?page=sales&subpage=sales&action=create" id="button"></a>

<br>

<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>ID</th>
        <th>Amount</th>
        <th>Quantity</th>
        <th>Order ID</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($sales->list_sales() != false){
foreach($sales->list_sales() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a id="black" href="index.php?page=sales&action=sales&id=<?php echo $sales_id;?>"><?php echo $order_date.' - '.$sales_id;?></a></td>
        
        <td><?php echo $sale_amount;?></td>
        <td><?php if($sale_saved == 0){
            echo "Open Transaction";
          }else{
            echo "Saved Transaction"; 
          }
          ?>
          </td>
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