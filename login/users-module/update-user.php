<?php
if($user -> get_user_access($user_id) == 'Staff' && $user_id_login != $id){
    header("location: index.php?page=users&subpage=users");
}
if ($user -> get_user_access($user_id) == 'Staff'){
?>

<div id="form-block">

<div>
    <a href="index.php?page=users&subpage=users" id="cancel"></a>
</div>

<h3>User Details</h3>

<form method="POST" action="processes/process.user.php?action=update">

          <div id="form-block-left">

              <label for="fname">First Name</label>
              <input type="text" id="fname" class="input" name="firstname" value="<?php echo $user->get_user_firstname($id);?>" placeholder="First name.." disable>

              <label for="lname">Last Name</label>
              <input type="text" id="lname" class="input" name="lastname" value="<?php echo $user->get_user_lastname($id);?>" placeholder="Last name.." disable>
          </div>

          <div id="form-block-right">

              <label for="access">Access Level</label>
              <select id="access" name="access">
                <option value="Staff" <?php if($user->get_user_access($id) == "Staff"){ echo "selected";}?>>Staff</option>
                <option value="Manager" <?php if($user->get_user_access($id) == "Manager"){ echo "selected";};?>>Manager</option>
              </select>

              <label for="email">Email</label>
              <input type="email" id="email" class="input" name="email" value="<?php echo $user->get_user_email($id);?>" placeholder="Email.." disable> 

              <input type="hidden" id="user_id" class="input" name="user_id" value="<?php echo $user_id;?>">
          </div>    

          <div id="button-block">
             <input type="submit" value="Update" onClick =back()>
             </div>
             <script>

              public function back() {
                <a href="index.php?page=users&subpage=users"></a>
              }
             </script>
          </div>
</form>
</div>

<?php   
}else if ($user -> get_user_access($user_id) == 'Manager'){

?>

<div>
    <a type="submit" id="trash"></a>
</div>

<div id="form-block">

<div>
    <a href="index.php?page=users&subpage=users" id="cancel"></a>
</div>

<h3>User Details</h3>

<form method="POST" action="processes/process.user.php?action=update">

          <div id="form-block-left">

              <label for="fname">First Name</label>
              <input type="text" id="fname" class="input" name="firstname" value="<?php echo $user->get_user_firstname($id);?>" placeholder="First name.." required>

              <label for="lname">Last Name</label>
              <input type="text" id="lname" class="input" name="lastname" value="<?php echo $user->get_user_lastname($id);?>" placeholder="Last name.." required>
          </div>

          <div id="form-block-right">

              <label for="access">Access Level</label>
              <select id="access" name="access">
                <option value="Staff" <?php if($user->get_user_access($id) == "Staff"){ echo "selected";}?>>Staff</option>
                <option value="Manager" <?php if($user->get_user_access($id) == "Manager"){ echo "selected";};?>>Manager</option>
              </select>

              <label for="email">Email</label>
              <input type="email" id="email" class="input" name="email" value="<?php echo $user->get_user_email($id);?>" placeholder="Email.." required> 

              <input type="hidden" id="user_id" class="input" name="user_id" value="<?php echo $user_id;?>">
          </div>    

          <div id="button-block">
             <input type="submit" value="Update" onClick =back()>
             </div>
             <script>

              public function back() {
                <a href="index.php?page=users&subpage=users"></a>
              }
             </script>
          </div>
</form>
</div>
    
<div>
    <form method="POST" action="processes/process.user.php?action=delete">

            <input type="hidden" id="fname" class="input" name="firstname" value="<?php echo $user->get_user_firstname($id); ?>" placeholder="First name.." disabled>
            <input type="hidden" id="lname" class="input" name="lastname" value="<?php echo $user->get_user_lastname($id); ?>" placeholder="Last name.." disabled>
            <input type="hidden" id="access" class="input" name="access" value="<?php echo $user->get_user_access($id); ?>" disabled>
            <input type="hidden" id="email" class="input" name="email" value="<?php echo $user->get_user_email($id); ?>" placeholder="Email.." disabled>
            <input type="hidden" id="user_id" class="input" name="user_id" value="<?php echo $user_id; ?>">
        <div>
            <input type="hidden" >
        </div>

        <input type="image" name="submit" src="../img/trash.png" alt="Submit" style="trash" 
        onclick="return confirm('Are you sure you want to delete this user?');"/>

    </form>
</div>

<?php } ?>


