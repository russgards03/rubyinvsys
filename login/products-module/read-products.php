<?php
if ($user->get_user_access($user_id) == "Staff") {
    // Redirect to index.php?page=users if the condition is true
    header("index.php?page=products&subpage=products");
} else {
    // Display the button if the condition is false
    ?>
    <a href="index.php?page=products&subpage=products&action=create" id="button"></a>
    <?php

}
?>

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

<br>

<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Type</th>
        <th>Price</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($product->list_products() != false)
{
  foreach($product->list_products() as $value)
  {
    extract($value);
    
  ?>
        <tr>
          <td><?php echo $count;?></td>
          <td><a id="black" href="index.php?page=products&subpage=products&action=profile&id=
          <?php echo $product_id;?>">
          <?php echo $product_name;?></a></td>  

          <td><?php echo $product_type;?></td>
          <td><?php echo $product_price;?></td>
          
          </a></td>  
        </tr>
        <tr>
  <?php
  $count++;
  }
}

else
{
  echo "No Record Found.";
}
?>
    </table>
</div>
</div>