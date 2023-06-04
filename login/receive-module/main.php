<a href="index.php?page=receive&action=create" id="button"></a>

<br>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>#</th>
        <th>Batch Date</th>
        <th>Current Amt.</th>
        <th>Initial Amt.</th>
        <th>Status</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($receive->list_receive() != false){
foreach($receive->list_receive() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a id="black" href="index.php?page=receive&action=receive&id=<?php echo $rec_id;?>"><?php echo $rec_date_added.' - '.$rec_id;?></a></td>
        <td><?php echo $rec_description;?></td>
        <td><?php echo $rec_amount;?></td>
        <td><?php if($rec_saved == 0)
        {
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