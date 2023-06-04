
<script>
function showResults(str) {
  if (str.length == 0) {
    document.getElementById("search-result").innerHTML = "";
    document.getElementById("search-result").style.border="0px";
    return;
  } 
  
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
        document.getElementById("search-result").innerHTML = xmlhttp.responseText;
      }
    };

    xmlhttp.open("GET", "products-module/search.php?q=" + str, true);
    xmlhttp.send();
}
</script>

<form>
<div id="black">
<i class="fa fa-search"></i> <input type="text" id="search" name="search" onkeyup="showResults(this.value)"> 

<a href="index.php?page=products&subpage=products" id="black">Clear</a> 

</div>
<div id="search-result">
</form>

<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>Product</th>
        <th>Incoming</th>
        <th>Sold</th>
        <th>In stock</th>
        <th>Retail Price</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($inventory->list_instock() != false){
foreach($inventory->list_instock() as $value){
   extract($value);
  
?>
      <tr>
        <td><a id="black" href="index.php?page=products&subpage=products&action=profile&id=<?php echo $product_id;?>"><?php echo $product_name;?></a></td>
        <td style="text-align: center;"><?php echo $inventory->get_product_receive_inv($product_id);?></td>
        <td style="text-align: center;"><?php echo $inventory->get_product_release_inv($product_id);?></td>
        <td style="text-align: center;"><?php echo $inventory->get_product_receive_inv($product_id) - $inventory->get_product_release_inv($product_id);?></td>
        <td style="text-align: right;"><?php echo $product->get_product_price($product_id);?></td>
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