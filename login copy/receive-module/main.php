<a href="index.php?page=receive&action=create" id="button"></a>

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
        <td><a href="index.php?page=receive&action=receive&id=<?php echo $rec_id;?>"><?php echo $rec_date_added.' - '.$rec_id;?></a></td>
        <td><?php echo $rec_supplier.' - '.$rec_description;?></td>
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