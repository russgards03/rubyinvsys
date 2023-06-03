<?php
if ($user->get_user_access($user_id) == "Staff") {
    // Redirect to index.php?page=users if the condition is true
    header("index.php?page=users&subpage=users");
} else {
    // Display the button if the condition is false
    ?>
    <a href="index.php?page=users&subpage=users&action=create" id="button"></a>
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
        document.getElementById("search-result").innerHTML = this.responseText;
      }
    };

    xmlhttp.open("GET", "users-module/search.php?q=" + str, true);
    xmlhttp.send();
}
</script>

<form>
<div id="black">
<i class="fa fa-search"></i> <input type="text" id="search" name="search" onkeyup="showResults(this.value)"> 

<a href="index.php?page=users&subpage=users" id="black">Clear</a> 

</div>
<div id="search-result">
</form>

<br>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Access Level</th>
        <th>Email</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($user->list_users() != false){
foreach($user->list_users() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a id="black" href="index.php?page=users&subpage=users&action=profile&id=<?php echo $user_id;?>"><?php echo $user_lastname.', '.$user_firstname;?></a></td>        
        <td><?php echo $user_access;?></td>
        <td><?php echo $user_email;?></td>
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