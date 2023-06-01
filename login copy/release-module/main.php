<a href="index.php?page=release&action=create" id="button"></a>

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
        <th>Release Date / ID</th>
        <th>Customer / Description</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($release->list_release() != false){
foreach($release->list_release() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=release&action=release&id=<?php echo $rel_id;?>"><?php echo $rel_date_added.' - '.$rel_id;?></a></td>
        <td><?php echo $rel_customer.' - '.$rel_description;?></td>
        <td><?php echo $rel_amount;?></td>
        <td><?php if($rel_saved == 0){
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