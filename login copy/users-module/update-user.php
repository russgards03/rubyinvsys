<div id="form-block">

<div>
    <a href="index.php?page=users&subpage=users" id="cancel"></a>
</div>

<h3>User Details</h3>

<form method="POST" action="processes/process.user.php?action=update">

          <div id="form-block-left">

              <label for="fname">First Name</label>
              <input type="text" id="fname" class="input" name="firstname" value="
              <?php echo $user->get_user_firstname($id);?>" placeholder="Your first name.." required>

              <label for="lname">Last Name</label>
              <input type="text" id="lname" class="input" name="lastname" value=
              "<?php echo $user->get_user_lastname($id);?>" placeholder="Your last name.." required>
          </div>

          <div id="form-block-right">

              <label for="access">Access Level</label>
              <select id="access" name="access">
                <option value="Staff" <?php if($user->get_user_access($id) == "Staff"){ echo "selected";};?>>Staff</option>
                <option value="Manager" <?php if($user->get_user_access($id) == "Manager"){ echo "selected";};?>>Manager</option>
              </select>

              <label for="email">Email</label>
              <input type="email" id="email" class="input" name="email" disabled value=
              "<?php echo $user->get_user_email($id);?>" placeholder="Your email.."> 

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
         
          <!---
          <form method="POST" action="processes/process.user.php?action=delete">
              <button type="submit" id="user_id "name="user_id" value="<?php echo $user->get_user_id($id);?>"><a>Delete</a></button>
          </form>
          -->

</form>
       
</div>